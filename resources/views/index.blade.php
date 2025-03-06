@extends('layouts.main')

@section('styles')
    @vite([
        'resources/css/wellcome.css',
        'resources/css/info.css',
        'resources/css/info_more.css',
        'resources/css/company.css',
        'resources/css/base.css',
    ])
@endsection

@section('content')
    <div class="inner"></div>
    <section class="none" id="wellcome">
        <div class="wellcome">
            <div class="wellcome_text">
                <h1>Добро пожаловать! <br> на сайт по борьбе с коррупцией</h1>
                <p>Наша миссия — создание прозрачного, честного и справедливого общества. Мы работаем над тем, чтобы каждый гражданин Казахстана мог жить и работать в условиях, свободных от коррупционных практик, и имел возможность свободно и безопасно выражать свои права.</p>
            </div>
            <div class="wellcome_image">
                <img src="{{ asset('/image/6298761 (1).jpg') }}" alt="">
            </div>
        </div>
    </section>
    <div class="inner"></div>
    <section class="none" id="info">
            <div class="info_text">
                <h1>О нас</h1>
                <p>Мы — студенты, объединенные общей целью: сделать нашу страну<br> свободной от коррупции. Мы не профессиональная организация, но наша энергия, идеи и желание перемен вдохновляют нас на активные действия.</p>
                <a href=""><button class="more">ПОДРОБНЕЕ</button></a>
            </div>
            <div class="info_text_right">
                <h1>Наши цели</h1>
                <ul>
                    <li>
                        <div class="info_text_card">
                            <div class="img_cards img_cards1">
                                <img src="{{asset('/image/discount tag and megaphone.png')}}" alt="">
                            </div>
                            <h2>Повышение осведомленности о вреде коррупции.</h2>
                        </div>
                    </li>
                    <li>
                        <div class="info_text_card">
                            <div class="img_cards img_cards2">
                                <img src="{{asset('image/check list with credit card and coins.png')}}" alt="">
                            </div>
                            <h2>Реализация антикоррупционных инициатив и программ.</h2>
                        </div>
                    </li>
                    <li>
                        <div class="info_text_card">
                            <div class="img_cards img_cards3">
                                <img src="{{asset('/image/Commercial court sentence and legal system.png')}}" alt="">
                            </div>
                            <h2>Образование и развитие культуры честности и справедливости.</h2>                            
                        </div>
                    </li>
                    <li>
                            <div class="img_cards img_cards4">
                                <img src="{{asset('/image/Reviewing resumes with magnifying glass.png')}}" alt="">
                            </div>
                        <div class="info_text_card">
                            <h2>Обеспечение граждан права на доступ к информации и поддержка в борьбе с коррупционными действиями.</h2>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
    <div class="inner"></div>
    <section class="none" id="more_info">
        <div class="more_info_text">
            <h1>Что мы преддлагаем для борьбы с коррупцией</h1>
            <ul style="color: #fff">
                <li>
                    <div class="more_info_cards">
                        <div class="circle_number">
                            <h1>1</h1>
                        </div>
                        <div class="more_info_text_card">
                            <p>Мы будем регулярно публиковать самые свежие и актуальные новости о борьбе с коррупцией, чтобы вы всегда были в курсе происходящего.</p>
                        </div>
                        <div class="buttons_news">
                            <a href=""><button>ПОСМОТРЕТЬ</button></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="more_info_cards2">
                        <div class="circle_number">
                            <h1>2</h1>
                        </div>
                        <div class="more_info_text_card">
                            <p>Через наш сайт вы можете анонимно сообщить о коррупционных действиях, с которыми вы столкнулись, или стать свидетелем, и наши государственные специалисты обязательно проверят эту информацию.</p>
                        </div>
                        <div class="buttons_write">
                            <a href=""><button>НАПИСАТЬ</button></a>
                        </div>
                    </div>
                </li>
            </ul>
            <p>Давайте сделаем нашу страну лучше! Помните, изменения начинаются с каждого из нас.</p>
        </div>
    </section>
    <div class="inner"></div>
    <section class="none" id="company">
        <h1>Вред коррупции</h1>
        <div class="company_cards">
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Экономический ущерб</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Коррупция ведёт к нецелевому использованию бюджетных средств, снижает инвестиционную привлекательность страны и тормозит развитие бизнеса.
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Рост социального неравенства</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Из-за коррупции ресурсы перераспределяются в пользу привилегированных групп, усиливая бедность и несправедливость.
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Ослабление государственных институтов</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Подкуп чиновников и судей снижает эффективность госуправления, правоохранительных органов и судебной системы.
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Угроза национальной безопасности</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Коррупция в армии, полиции и спецслужбах ослабляет обороноспособность страны, увеличивая риски преступности и терроризма.
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Низкое качество государственных услуг</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Коррупция в здравоохранении, образовании и коммунальном секторе приводит к ухудшению качества услуг и их недоступности для большинства граждан.
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="cards_text_name">
                    <h2>Подрыв доверия к власти</h2>
                    <div class="cards_icon">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="company_cards_text">
                    <p>
                        Коррупционные скандалы вызывают недоверие к государственным структурам, что может привести к политической нестабильности и массовому недовольству населения.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="inner"></div>

@endsection
