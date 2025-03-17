<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCUSSION</title>
    <link rel="stylesheet" href="{{ asset('/css/forum.css') }}">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/bootstrap.min.css') }}">
    <!-- style css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/style.css') }}">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="{{ asset('images/logo.png') }}" /> -->
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    </li>
    <link rel="icon" type="image" href="/images/logo.png">
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
        <div class="container">
            <div class="middle">
                <!-- Form untuk membuat pertanyaan -->
                <form class="create-post" action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="profile-pic">
                        <img src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
                    </div>
                    <input type="text" name="content" placeholder="Haiyaaa.." id="create-post" required />
                    <input type="submit" value="Post" class="post post-primary" />
                </form>
    
                <!-- Feed pertanyaan -->
                <div class="feeds">
                    @foreach($questions as $question)
                    <div class="feed">
                        <div class="user">
                            <div class="profile-pic">
                                <img src="{{ $question->user->profile_picture ? Storage::url($question->user->profile_picture) : 'https://via.placeholder.com/50' }}" alt="Profile Picture">
                            </div>                            
                            <div class="info">
                                <h5>{{ $question->user->username }}</h5>
                                <small>{{ $question->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        <div class="caption">
                            <p>
                                <h5>{{ $question->content }}</h5>
                            </p>
                        </div>
    
                        <div class="d-flex align-items-center">
                            @if(Auth::user()->role_id == 1)
                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');" class="m-0 p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent text-danger p-0 mx-2" style="cursor: pointer;">
                                    Delete
                                </button>
                            </form>
                            <span class="mx-1">|</span>
                            @endif
                            <a href="{{ route('questions.show', $question->id) }}" class="text-primary mx-2">
                                View
                            </a>
                        </div>                                                                    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    
    <script src="{{ asset('/js/forum.js') }}"></script>
    <!-- Javascript files-->
    <script src="/js/home/jquery.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.min.js') }}"></script> -->
    <script src="/js/home/popper.min.js"></script>
    <!-- <script src="{{ asset('js/home/popper.min.js') }}"></script> -->
    <script src="/js/home/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{ asset('js/home/bundle.min.js') }}"></script> -->
    <script src="/js/home/jquery-3.0.0.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script> -->
    <script src="/js/home/plugin.js"></script>
    <!-- <script src="{{ asset('js/home/plugin.js') }}"></script> -->
    <!-- sidebar -->
    <script src="/js/home/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
    <script src="/js/home/custom.js"></script>
    <!-- <script src="{{ asset('js/home/custom.js') }}"></script> -->
    <!-- javascript -->
</body>

</html>