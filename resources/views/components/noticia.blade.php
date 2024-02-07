
<div class="mt-20 block overflow-hidden relative items-center mx-auto my-auto bg-white rounded-lg shadow md:flex-row md:max-w-5xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div class="bg-naranjita news-shakeit text-xs text-center text-orange-500 absolute top-6 left-4 h-24 w-16">
        <div class="votes py-1 border border-white border-b-0 leading-4 bg-repeat-x bg-position-0 rounded-t-3 font-bold">
            <a href=# class="leading-none ga-event text-orange-500 no-underline text-base font-bold">{{$article->meneadores->count()}} meneos</a>
        </div>
        <div class="overflow-visible w-16 absolute top-18">
            <a href=# class="overflow-hidden  bg-gradient-to-r from-orange-500 to-orange-600 shadow-md border border-orange-900 p-1 block text-white no-underline font-bold ">menéalo</a>
        </div>
        <div class="clics py-1 border border-white border-t-0 text-10 bg-repeat-x bg-position-bottom rounded-b-3 font-bold pt-8">
            <span>{{$article->click}}</span> clics
        </div>
    </div>

<div class="flex flex-col justify-between p-4 pl-28 pr-40 leading-normal">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$article->title}}</h5>

    <div class="text-xs min-h-7">
        <a href="$user-profile" class="inline-block relative opacity-100 z-0 font-inherit cursor-pointer">
            <img src={{ asset('storage/uploads/users/' . $article->user->image) }} class="w-6 h-6 mr-1 inline-block align-middle rounded-full">
        </a>
        por
         <a href="$perfil" class="inline-block">{{$article->user->name}}</a>
        a
        <a href="{{$article->link}}" class="font-bold">fuente</a>
        &nbsp;
        publicado:
        <span class="inline-block">{{$article->created_at}}</span>

    </div>

    <p class="mb-3">{{$article->description}}</p>

</div>
<div class="h-8 ml-28 text-sm border-t border-b border-orange-200 w-full">
    <div class="mt-1">
        <a href="{{route('articles.show',$article)}}" class="bg-naranjita text-orange-500 pointer cursor-pointer p-1 pt-1.5 pb-2 pl-2 pr-4 font-bold">{{$article->comments->count()}} comentarios</a>
        <a class=" text-orange-400 border-r border-orange-300 p-1 pl-3 pr-3">compartir</a>
        @foreach ($article->label as $label )
        <a class="p-1 pl-2 pr-2 bg-gray-400 text-white rounded-full text-xs">{{$label->nombre}}</a>

        @endforeach
    </div>
</div>
<img src="{{ asset('storage/uploads/articles/' . $article->image) }}" class="absolute top-3 right-0 h-23 w-40" alt="">
</div>
