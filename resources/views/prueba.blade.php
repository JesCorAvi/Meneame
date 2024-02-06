<x-app-layout>
    @php
    $article = App\Models\Article::find(1);
    $fuente =$article->link;
    dd($article->meneos);
    @endphp

</x-app-layout>
