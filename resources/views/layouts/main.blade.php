<!-- resources/views/layouts/main.blade.php -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss'])

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <style>
        /* 讓頁面充滿整個視窗 */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        /* 讓主要內容填滿剩餘空間 */
        main {
            flex: 1;
        }
        /* 讓 footer 固定在頁面底部 */
        footer {
            background-color:rgb(169, 209, 235);
            text-align: center;
            padding: 10px;
        }
         /* 將 footer 平分成三等份 */
        .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center; /* 讓內容垂直置中 */
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 10px;
    }
    </style>
</head>
<body>
    <!-- 導航列 -->
    <header>
        <nav>
            <ul>
                <a href="{{ url('/') }}">首頁</a>
                <a href="{{ url('/about') }}">關於我們</a>
                <a href="{{ url('/contact') }}">聯絡我們</a>
            </ul>
        </nav>
    </header>

    <!-- 主要內容 -->
    <main>
        @yield('content')
    </main>

    <!-- 頁尾 -->
    <footer>
    <div class="footer-content">
        <span>Email: contact@example.com</span>
        <span>&copy; {{ date('Y') }} GOOGLE.COM 版權所有</span>
        <span>Tel: 0123-456-789</span>
    </div>
</footer>
</body>
</html>
