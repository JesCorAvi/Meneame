<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('articles.update', $article) }}" method="post">
        @csrf
        @method("PUT")
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{$article->title}}">

        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{$article->description}}">

        <label for="link">Link</label>
        <input type="text" id="link" name="link" value="{{$article->link}}">

        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
