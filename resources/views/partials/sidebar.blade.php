<div class="col-md-4 padding-20">
    <div class="row margin-bottom-30">
        <div class="col-md-12 ">
            <div class="support-container">
                <h2 class="support-heading">Нужна помощь?</h2>
                Если вы не можете найти ответ, вы можете <a href="#">связаться</a> с нами для получения дополнительной помощи.
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
            Популярные вопросы
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($popularArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Последные вопросы
            </div>
            <hr class="style-three">
            <div class="fat-content-small padding-left-10">
                <ul>
                    @foreach ($latestArticles as $article)
                        <li>
                            <a href="{{ route('articles.show', [$article->slug, $article->id]) }}">
                                <i class="fa fa-file-text-o"></i> {{ $article->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row margin-top-20">
        <div class="col-md-12">
            <div class="fb-heading-small">
                Популярные теги
            </div>
            <hr class="style-three">
            <div class="fat-content-tags padding-left-10">
                @foreach ($popularTags as $tag)
                    <a href="{{ route('tags.show', [$tag->slug, $tag->id]) }}" class="btn btn-default btn-o btn-sm">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>