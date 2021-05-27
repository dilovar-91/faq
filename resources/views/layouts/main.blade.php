<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('panel.site_title') }}</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="header">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>

        @include('partials.nav')

        @if(!isset($exception))
            <div class="searchfield bg-hed-six">
                <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                    <div class="row text-center margin-bottom-20">
                        <h1 class="white">Вся информация по договору купля продаж</h1>
                        <span class="nested">Актуальные темы, полезные статьи, вопросы и ответы, файлы для скачивание</span>
                    </div>
                </div>
            </div>
        @endif

        <div class="container featured-area-default padding-30">
            <div class="row">
                @yield('content')

                @if(!isset($exception))
                    @include('partials.sidebar')
                @endif
            </div>
        </div>

        @yield('about')

        @include('partials.footer')

        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(79728832, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/79728832" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </body>
</html>
