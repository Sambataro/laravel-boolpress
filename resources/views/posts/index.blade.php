<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITOLO</th>
                    <th>POST</th>
                    <th>AUTORE</th>
                    <th>COMMENTI STATUS</th>
                    <th>POST STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->sentence}}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->infoPost->comment_status }}</td>
                    <td>{{ $post->infoPost->post_status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>