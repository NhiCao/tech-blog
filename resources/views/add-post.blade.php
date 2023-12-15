<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technology blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-image: url("{{URL::asset('/images/light-bulbs-5488573_1280.jpg')}}");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/add-post">New post <span class="sr-only"></span></a>
                </li>
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="/logout">Log out <span class="sr-only"></span></a>
                </li> --}}
            </ul>

            <div style="display: flex; position: fixed; top: 17px; right: 30px;">
                <p>Hello {{Auth::user()->name}}!</p>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <form action="/logout" method="POST">
                    @csrf
                    <input type="submit" value="Log out" style="background: none!important; border: none; padding: 0!important; cursor: pointer;" />
                </form>
            </div>
        </div>
    </nav>

    <div style="padding-top: 100px; padding-left: 250px; padding-right: 250px;">
        <h2 style="color: white">Add post</h2>
        <br>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" class="form-control" name="title" placeholder="title"><br>
            <textarea class="form-control" name="body" placeholder="body"></textarea><br>
            <button class="btn btn-primary mb-2">Add</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>