<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
</head>
<body>
    <table border="1" style="background-color: orange">
        <tr>
            <th>Article</th>
            <th>Description</th>
            <th>Link</th>
            <th>Image</th>
            <th>Uploader</th>
            <th>Ver</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
        @foreach ($articles as $article )
        <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->description}}</td>
            <td><a href="{{$article->link}}">{{$article->link}}</a></td>
            <td><img src="{{ asset('storage/uploads/' . $article->image) }}" ></td>
            <td>{{$article->user_id}}</td>
            <td><a href="{{ route('articles.show', $article)}}"><button>Ver</button></a></td>
            <td>
                <form action="{{ route('articles.edit' , $article)}}" method="get">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{ route('articles.destroy', $article)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('articles.create') }}">Add project</a>
</body>
</html>
