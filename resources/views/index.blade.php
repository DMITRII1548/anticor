@extends('layouts.main')

@section('styles')
    @vite([
        'resources/css/wellcome.css',
        'resources/css/info.css',
        'resources/css/info_more.css',
        'resources/css/company.css',
    ])
@endsection

@section('content')
    <div class="inner"></div>
    <section id ="wellcome">
        <div class="wellcome">
            <div class="wellcome_text">
                <h1>Добро пожаловать на сайт борьбы с коррупцией в Казахстане</h1>
                <p>Наша миссия — создание прозрачного, честного и справедливого общества. Мы работаем над тем, чтобы каждый гражданин Казахстана мог жить и работать в условиях, свободных от коррупционных практик, и имел возможность свободно и безопасно выражать свои права.</p>
            </div>
            <div class="wellcome_image">
                <img src="{{ asset('/image/6298761 (1).jpg') }}" alt="">
            </div>
        </div>
    </section>
    <div class="inner"></div>
    <section id = "info">
            <div class="info_text">
                <h1>О нас</h1>
                <p>Мы — студенты, объединенные общей целью: сделать нашу страну<br> свободной от коррупции. Мы не профессиональная организация, но наша энергия, идеи и желание перемен вдохновляют нас на активные действия.</p>
            </div>
            <div class="info_text_right">
                <h1>Наши цели</h1>
                <ul>
                    <li>
                        <img src="" alt="">
                        <div class="info_text_card">
                            <h2>Повышение осведомленности о вреде коррупции.</h2>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="info_text_card">
                            <h2>Реализация антикоррупционных инициатив и программ.</h2>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="info_text_card">
                            <h2>Образование и развитие культуры честности и справедливости.</h2>                            
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="info_text_card">
                            <h2>Обеспечение граждан права на доступ к информации и поддержка в борьбе с коррупционными действиями.</h2>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
    <div class="inner"></div>
    <section id = "more_info">
        <div class="more_info_text">
            <h1>Что мы преддлагаем для борьбы с коррупцией</h1>
            <ul style="color: #fff">
                <li>Мы будем регулярно публиковать самые свежие и актуальные новости о борьбе с коррупцией, чтобы вы всегда были в курсе происходящего.</li>
                <li>Через наш сайт вы можете анонимно сообщить о коррупционных действиях, с которыми вы столкнулись, или стать свидетелем, и наши государственные специалисты обязательно проверят эту информацию.</li>
            </ul>
            <p>Давайте сделаем нашу страну лучше! Помните, изменения начинаются с каждого из нас.</p>
        </div>
    </section>
    <div class="inner"></div>
    <section id = "company">
        <h1>Компании которые с нами сотрудничают</h1>
        <div class="company_cards">
            <div class="cards"><img src="" alt=""></div>
            <div class="cards"><img src="" alt=""></div>
            <div class="cards"><img src="" alt=""></div>
            <div class="cards"><img src="" alt=""></div>
            <div class="cards"><img src="" alt=""></div>
        </div>
    </section>
    <div class="inner"></div>

@endsection
