@if ($article)
        <h1>Статья: {{ $article->title }}</h1>
        <p>Символьный код: {{ $article->code }}</p>
        <p>Содержание: {{ $article->content }}</p>
        <p>Дата создания: {{ $article->date }}</p>
        <p>Автор: {{ $article->author }}</p>
    @else
        <h1>Статья не найдена</h1>
    @endif

