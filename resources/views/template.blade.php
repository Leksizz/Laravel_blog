<?php
session_start();
?>
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title id="pageTitle"></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/47ae1cb85a.js" crossorigin="anonymous"></script>
    <style>
        .navbar {
            background-color: #472400 !important;
        }

        .btn {
            background-color: #B28C66 !important;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }

        .exit:hover {
            background-color: #A60000;
        }

        .profile:hover {
            background-color: #007929;
        }
    </style>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">PlanetOfHistory</a>
        <!-- Для авторизованных пользователей -->
        @auth()
        <div class="d-flex ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 dropstart">
                <li class="nav-item dropdown">
{{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">--}}
{{--                            <?php echo $_SESSION['login'] ?>--}}
{{--                    </a>--}}
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="profile dropdown-item text-light" href="/profile"><i
                                    class="fa-solid fa-user pe-2"></i>Профиль</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="exit dropdown-item text-light" href="/logout"><i
                                    class="fa-solid fa-door-open pe-2"></i>Выход</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Для неавторизованных пользователей -->
        @else
        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                </li>
            </ul>
            <a class="me-3 btn btn-secondary" href="/register" role="button">Регистрация</a>
            <a class="btn btn-secondary" href="/login" role="button">Вход</a>
        </div>
    </div>
</nav>
@endauth
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="content">
    <div class="container">
        @yield('content')
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">&copy; Алексей Никитенко 2023</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="/js/scripts.js"></script>
</body>
</html>
