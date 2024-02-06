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
            <th>Uploader</th>
        </tr>
        <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->link}}</td>
            <td>{{$article->user_id}}</td>
        </tr>
    </table>
    <h1>EN CONSTRUCCIÓN</h1>
</body>
</html>
