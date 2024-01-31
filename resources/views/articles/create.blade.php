<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title">

        <label for="description">Description</label>
        <input type="text" id="description" name="description">

        <label for="link">Link</label>
        <input type="text" id="link" name="link">

        <label for="user_id">ID</label>
        <input type="text" id="user_id" name="user_id" value="{{ auth()->id() }}">

        <button type="submit">Añadir</button>
    </form>

</body>
</html>
