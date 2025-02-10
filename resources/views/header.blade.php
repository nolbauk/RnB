{{-- Tamplate Header --}}
<header style="background-color: #1b1b1b">
    <div class="logo">
        <img src="{{ asset('images/BISMILLAH.png') }}" alt="Logo" />
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('item') }}">ITEM</a></li>
            <li><a href="#page-3">NEWS</a></li>
            <li><a href="#page-4">FORUM</a></li>
        </ul>
    </nav>
    <div class="login">
        <a href="/login">Login</a>
    </div>
</header>