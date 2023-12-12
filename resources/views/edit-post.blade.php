<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
</head>
<body>
    
    <form action="/save-post/{{$post['id']}}" method="POST">
        @csrf
        <input type="text" name="title" value={{$post['title']}}><br>
        <textarea name="body">{{$post['body']}}</textarea><br>
        <button>Save</button>
    </form>

</body>
</html>