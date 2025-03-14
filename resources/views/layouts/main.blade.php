<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/sass/app.scss'])
    <link rel="stylesheet" href="{{ asset('css/mainblade.css') }}?v={{ time() }}">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <!-- 導航列 -->
    <header>
        <nav>
            <div class="nav-links">
                <a href="{{ url('/') }}">🏠 首頁</a>
                <a href="{{ url('/about') }}">📖 關於我們</a>
                <a href="{{ url('/contact') }}">📞 聯絡我們</a>
            </div>
            <div class="auth-links">
                @if (Auth::check())
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">登出</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">登入</a>
                    <a href="{{ route('register') }}">註冊</a>
                @endif
            </div>
        </nav>
    </header>

    <!-- 主要內容 -->
    <main>
        @yield('content')
    </main>

    <!-- 頁尾 -->
    <footer>
        <div class="footer-content">
            <div>Email: contact@example.com</div>
            <div>&copy; {{ date('Y') }} YourCompany 版權所有</div>
            <div>Tel: 0123-456-789</div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
