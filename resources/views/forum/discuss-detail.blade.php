<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCUSSION DETAIL</title>
    <link rel="stylesheet" href="{{ asset('/css/forum.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/discussdetail.css') }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-13hI8REa9Ksx8PGZPqH42joYltH4NpPr5LmRl9y6FCl0PHZT0+g2q5PPLVi1iMQ=" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }} ">
</head>

<body>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="/images/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="hero">HERO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item">ITEM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icecream.html">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">FORUM</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="cart_bt"><a href="login">LOGIN</a></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <main class="main">
        <div class="middle">
            <div class="feeds">
                <div class="feed">
                    <div class="gabaw">
                        <div class="head"></div>
                        <div class="user">
                            <div class="profile-pic">
                                <img src="{{ $question->user->profile_picture ? Storage::url($question->user->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
                            </div>
                            <div class="info">
                                <h5>{{ $question->user->username }}</h5>
                                <small>{{ $question->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <div class="bahan">
                            <h5>{{ $question->content }}</h5>
                        </div>
                        <form class="create-post" action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="question_id" value="{{ $question->id }}">
                            <div class="profile-pic-comment">
                                <img src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
                            </div>
                            <input type="text" name="content" placeholder="Haiyaaa.." id="create-post" required />
                            <input type="submit" value="Comment" class="post post-primary" />
                        </form>                        
                    </div>
                    <div class="comments">
                        @foreach($question->comments as $comment)
                            <div class="caption">
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
                                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                    <input type="text" name="content" placeholder="Balas komentar..." required />
                                    <input type="submit" value="Reply" class="post post-secondary" />
                                </form>
                    
                                {{-- Tampilkan Replies --}}
                                <div class="reply" style="margin-left: 40px;">
                                    @foreach($comment->replies as $reply)
                                        <div class="caption">
                                            <div class="liked-by">
                                                <div class="user">
                                                    <div class="profile-pic-reply">
                                                        <img src="{{ $reply->user->profile_picture ? Storage::url($reply->user->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
                                                    </div>
                                                    <div class="info">
                                                        <h7>{{ $reply->user->username }}</h7>
                                                        <h8>{{ $reply->created_at->diffForHumans() }}</h8>
                                                    </div>
                                                    <span class="edit"><i class="uil uil-ellipsis-h"></i></span>
                                                </div>
                                            </div>
                                            <div class="bahan-reply">
                                                {{ $reply->content }}
                                            </div>
                                            <div class="action-button">
                                                <div class="interaction-button">
                                                    <span class="reply-toggle" data-comment-id="{{ $reply->id }}">
                                                        <i class="fa-solid fa-comment"></i>
                                                    </span>
                                                </div>
                                            </div>
                    
                                            {{-- Form Reply untuk Reply --}}
                                            <form class="reply-form" id="reply-form-{{ $reply->id }}" action="{{ route('comments.reply2reply') }}" method="POST" style="display: none; margin-top: 10px;">
                                                @csrf
                                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                <input type="hidden" name="username" value="{{ $reply->user->username }}">
                                                <input type="text" name="content" placeholder="Balas komentar..." required />
                                                <input type="submit" value="Reply" class="post post-secondary" />
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".reply-toggle").forEach(button => {
                button.addEventListener("click", function() {
                    let commentId = this.getAttribute("data-comment-id");
                    let replyForm = document.getElementById("reply-form-" + commentId);
        
                    if (replyForm.style.display === "none") {
                        replyForm.style.display = "block";
                    } else {
                        replyForm.style.display = "none";
                    }
                });
            });
        });
    </script>
    <script src="{{ asset('/js/forum.js') }}"></script>
        
</body>

</html>