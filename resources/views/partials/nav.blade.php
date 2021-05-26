<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> Главная
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}">
                        <i class="fa fa-file-text-o"></i> Все вопросы
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class="fa fa-lightbulb-o"></i> FAQ
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class="fa fa-lightbulb-o"></i> Скачать файлы договоров
                    </a>
                </li>
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
            </ul>
        </div>
    </div>
</div>