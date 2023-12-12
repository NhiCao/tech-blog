<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
</head>
<body>

    @auth
    <p>Hello! You are logged in. Have a nice day.</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    <h2>Create post</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title"><br>
        <textarea name="body" placeholder="body"></textarea><br>
        <button>Create</button>
    </form>

    <h2>Your posts</h2>
    @foreach ($posts as $post)
        <div style="background-color: beige">
            <h3>{{$post['title']}}</h3>
            <p>{{$post['body']}}</p>
            <a href="/edit-post/{{$post['id']}}" class="btn btn-link">Edit</a>
            {{-- <form action="/edit-post/{{$post['id']}}" method="GET">
                @csrf
                <button>Edit</button>
            </form> --}}
            <form action="/delete-post/{{$post['id']}}" method="POST">
                @csrf
                {{-- <button>Delete</button> --}}
                <button class="btn btn-link">Delete</button>
            </form>
        </div>
    @endforeach

    @else
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button>Register</button>
    </form>

    <h2>Log in</h2>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="login_name" placeholder="name"><br>
        <input type="password" name="login_password" placeholder="password"><br>
        <button>Log in</button>
    </form>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>