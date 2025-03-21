<div class="caption" style="margin-left: 20px;">
    <div class="liked-by">
        <div class="user">
            <div class="profile-pic-reply">
                <img src="{{ $comment->user->profile_picture ? Storage::url($comment->user->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
            </div>
            <div class="info">
                <h7>{{ $comment->user->username }}</h7>
                <h8>{{ $comment->created_at->diffForHumans() }}</h8>
            </div>
            <span class="edit"><i class="uil uil-ellipsis-h"></i></span>
        </div>
    </div>
    <div class="bahan-reply">
        {{-- Tambahkan @username jika ini adalah reply ke reply --}}
        @if($comment->parent_id)
            <strong>@{{ $comment->parent->user->username }}</strong>
        @endif
        {{ $comment->content }}
    </div>
    <div class="action-button">
        <div class="interaction-button">
            <span class="reply-toggle" data-comment-id="{{ $comment->id }}">
                <i class="fa-solid fa-comment"></i>
            </span>
        </div>
    </div>

    {{-- Form untuk Reply --}}
    <form class="reply-form" id="reply-form-{{ $comment->id }}" action="{{ route('comments.reply') }}" method="POST" style="display: none; margin-top: 10px;">
        @csrf
        <input type="hidden" name="question_id" value="{{ $comment->question_id }}">
        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        <input type="text" name="content" placeholder="Balas komentar..." required />
        <input type="submit" value="Reply" class="post post-secondary" />
    </form>

    {{-- Rekursi: Tampilkan Reply ke Reply --}}
    @if($comment->replies->count() > 0)
        <div class="reply" style="margin-left: 20px;">
            @foreach($comment->replies as $reply)
                @include('partials.comment', ['comment' => $reply])
            @endforeach
        </div>
    @endif
</div>