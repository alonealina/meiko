<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>高野山遍照尊院</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <!-- Google tag (gtag.js) -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11144444741"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-11144444741');
        </script> -->
        <!-- Event snippet for 電話 conversion page
        In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
        <!-- <script>
        function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
            window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-11144444741/k7pRCIjrrPwDEMX2isIp',
            'event_callback': callback
        });
        return false;
        }
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
        <!-- Google tag (gtag.js) -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-SBYEJKK6GE"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-SBYEJKK6GE');
        </script>
 -->
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header>
                <div class="header_logo" id="header_logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('img/logo_header.png') }}" class="header_logo_img"></a>
                </div>
                <div class="header_menu" id="header_menu">
                    <a href="{{ route('services') }}" class="header_a">事業情報</a>
                    <a href="{{ route('company') }}" class="header_a">企業情報</a>
                    <a href="{{ route('recruit') }}" class="header_a">採用情報</a>
                    <a href="{{ route('news') }}" class="header_a">お知らせ</a>
                    <a href="{{ route('contact') }}" class="header_a">お問合せ</a>
                </div>
            </header>
            <div class="header_margin"></div>


            @yield('content')
            <footer>
                <div class="footer_item1">
                    <img src="{{ asset('img/footer_logo.png') }}" class="footer_logo">

                    <div class="footer_text1">
                        〒540-0012<br>
                        大阪府大阪市中央区谷町5丁目6-12新野村ビル7階
                        <div class="footer_icon_list">
                            <a href="#!" target="_blank"><img src="{{ asset('img/facebook.png') }}" class="footer_icon"></a>
                            <a href="#!" target="_blank"><img src="{{ asset('img/x.png') }}" class="footer_icon"></a>
                            <a href="#!" target="_blank"><img src="{{ asset('img/insta.png') }}" class="footer_icon"></a>
                        </div>
                    </div>
                </div>

                <div class="footer_item2">
                    <a href="{{ route('services') }}" class="footer_main_a">事業情報</a>
                    <a href="{{ route('service1') }}" class="footer_sub_a">寺院運営コンサルティング</a>
                    <a href="{{ route('service2') }}" class="footer_sub_a">納骨堂コンサルティング</a>
                    <a href="{{ route('service3') }}" class="footer_sub_a">集客・広報コンサルティング</a>
                    <a href="{{ route('service4') }}" class="footer_sub_a">新規事業コンサルティング</a>
                </div>

                <div class="footer_item2">
                    <a href="{{ route('company') }}" class="footer_main_a">採用情報</a>
                    <a href="{{ route('company1') }}" class="footer_sub_a">会社概要</a>
                    <a href="{{ route('company2') }}" class="footer_sub_a">代表挨拶</a>
                    <a href="{{ route('company3') }}" class="footer_sub_a">企業理念</a>
                </div>

                <div class="footer_item2">
                    <a href="{{ route('recruit') }}" class="footer_main_a">事業情報</a>
                    <a href="{{ route('recruit1') }}" class="footer_sub_a">会社について</a>
                    <a href="{{ route('recruit2') }}" class="footer_sub_a">人について</a>
                    <a href="{{ route('recruit3') }}" class="footer_sub_a">仕事について</a>
                </div>

            </footer>
            <div class="copyright">
                <a href="{{ route('policy') }}" class="copyright_a">プライバシーポリシー</a>
                <div>© 2023 meiko inc.</div>
            </div>
        </body>
    </div>

    @else
    <div id="registration_sp">
        <body>
            <header>
                <div class="header_logo_sp" id="header_logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('img/logo_header.png') }}" class="logo_header"></a>
                </div>
            </header>

            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <div class="header_icon_list">
                        <a href="#!" target="_blank"><img src="{{ asset('img/facebook.png') }}" class="header_icon"></a>
                        <a href="#!" target="_blank"><img src="{{ asset('img/x.png') }}" class="header_icon"></a>
                        <a href="#!" target="_blank"><img src="{{ asset('img/insta.png') }}" class="header_icon"></a>
                    </div>

                    <ul>
                        <li>
                            <a href="#!" class="menu_content" onclick="clickMenuServiceButton();">事業情報</a>
                            <div>
                                <span class="beside service_beside"></span>
                                <span class="vertical service_vertical"></span>
                            </div>
                        </li>
                        <div id="menu_service_sp">
                            <a href="{{ route('service1') }}" class="menu_a_sp">寺院運営コンサルティング</a>
                            <a href="{{ route('service2') }}" class="menu_a_sp">納骨堂コンサルティング</a>
                            <a href="{{ route('service3') }}" class="menu_a_sp">広告・集客コンサルティング</a>
                            <a href="{{ route('service4') }}" class="menu_a_sp">新規事業コンサルティング</a>
                        </div>

                        <li>
                            <a href="#!" class="menu_content" onclick="clickMenuCompanyButton();">企業情報</a>
                            <div>
                                <span class="beside company_beside"></span>
                                <span class="vertical company_vertical"></span>
                            </div>
                        </li>
                        <div id="menu_company_sp">
                            <a href="{{ route('company1') }}" class="menu_a_sp">会社概要</a>
                            <a href="{{ route('company2') }}" class="menu_a_sp">代表挨拶</a>
                            <a href="{{ route('company3') }}" class="menu_a_sp">企業理念</a>
                        </div>

                        <li>
                            <a href="#!" class="menu_content" onclick="clickMenuRecruitButton();">採用情報</a>
                            <div>
                                <span class="beside recruit_beside"></span>
                                <span class="vertical recruit_vertical"></span>
                            </div>
                        </li>
                        <div id="menu_recruit_sp">
                            <a href="{{ route('recruit1') }}" class="menu_a_sp">会社について</a>
                            <a href="{{ route('recruit2') }}" class="menu_a_sp">人について</a>
                            <a href="{{ route('recruit3') }}" class="menu_a_sp">仕事について</a>
                        </div>

                        <li>
                            <a href="#!" class="menu_content">お知らせ</a>
                        </li>
                        <li>
                            <a href="#!" class="menu_content">お問合せ</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="header_margin"></div>


            @yield('content_sp')
            <footer>
                <div class="footer_item1">
                    <img src="{{ asset('img/footer_logo.png') }}" class="footer_logo">

                    <div class="footer_text1">
                        〒540-0012<br>
                        大阪府大阪市中央区谷町5丁目6-12新野村ビル7階
                    </div>
                </div>

                <a href="{{ route('services') }}" class="sp1_hover_div">
                    <div>事業情報</div>
                    <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
                </a>

                <a href="{{ route('company') }}" class="sp2_hover_div">
                    <div>企業情報</div>
                    <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
                </a>

                <a href="{{ route('recruit') }}" class="sp3_hover_div">
                    <div>採用情報</div>
                    <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
                </a>



            </footer>
            <div class="copyright">
                <a href="{{ route('policy') }}" class="copyright_a">プライバシーポリシー</a>
                <div>© 2023 meiko inc.</div>
            </div>

        </body>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/recruit.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>