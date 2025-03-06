<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss'])

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <style>
        /* 全局樣式 */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #F8FAFC; /* 柔和的淺灰色背景 */
        }
        main {
            flex: 1;
            display: flex;
            
            align-items: center;     /* 垂直置中 */
            flex-direction: column;  /* 使內容垂直排列 */
            
           
        }

        /* 導航列設計 */
        header {
            background-color: rgb(105, 176, 241); /* 深藍色 */
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 25px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            padding: 10px 20px;
            transition: 0.3s ease-in-out;
        }
        nav a:hover {
            background-color: rgb(128, 170, 233); /* 懸停變亮藍色 */
            border-radius: 8px;
        }

        /* 頁尾設計 */
        footer {
            background-color: #1F2937; /* 深灰藍色 */
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 10px 20px;
        }
        .footer-content div {
            flex: 1;
            text-align: center;
        }
        .footer-content div:first-child {
            text-align: left;
        }
        .footer-content div:last-child {
            text-align: right;
        }
        .footer-divider {
            width: 80%;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: auto;
        }
        .footer-icons a {
            margin: 0 10px;
            color: white;
            font-size: 18px;
            transition: 0.3s;
        }
        .footer-icons a:hover {
            color: #60A5FA; /* 淡藍色 */
        }

        /* RWD 響應式調整 */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            .footer-content div {
                text-align: center !important;
                margin-bottom: 8px;
            }
        }
    </style>
</head>
<body>
    <!-- 導航列 -->
    <header>
        <nav>
            <a href="{{ url('/') }}">🏠 首頁</a>
            <a href="{{ url('/about') }}">📖 關於我們</a>
            <a href="{{ url('/contact') }}">📞 聯絡我們</a>
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

    <!-- Font Awesome 圖示 -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
