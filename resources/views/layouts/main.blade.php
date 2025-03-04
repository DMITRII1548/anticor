<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AntiCorp</title>

    @vite([
        'resources/css/reset.css', 
        'resources/css/base.css', 
        'resources/css/header.css',
        'resources/css/footer.css',
    ])

    @yield('styles')
</head>
<body>
    <header>
        <img class = "logo" src="{{ asset('/image/logo.png') }}" alt="">
        <nav>
            <a href="{{ route('pages.home') }}">Главная</a>
            <a href="{{ route('messages.create') }}">Сообщить о коррупции</a>
            <a href="">Новости</a>
        </nav>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <div class="logo">
                <h1>Присоединяйтесь к нам</h1>
                <img src="./image/logo.png" alt="">
            </div>
            <div class="footer_text">
                <h3>Каждый из нас может внести свой вклад в борьбу с коррупцией и создание более справедливого<br> и свободного общества. Вместе мы можем изменить будущее Казахстана, сделав его<br> свободным от коррупции и несправедливости.</h3>
            </div>
            <div class="footer_nav">
                <ul>
                    <li><a href="{{ route('pages.home') }}">Главная</a></li>
                    <li><a href="{{ route('messages.create') }}">Форма связи</a></li>
                    <li><a href="">Новости</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>