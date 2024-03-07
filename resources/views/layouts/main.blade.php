<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My posts</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{route('post.index')}}">Posts</a>
                    <a class="nav-item nav-link" href="{{route('contact.index')}}">Contacts</a>
                    <a class="nav-item nav-link" href="{{route('about.index')}}">About</a>
                    @can('view', auth()->user())
                        <a class="nav-item nav-link" href="{{route('admin.post.index')}}">Admin</a>
                    @endcan
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</div>

</body>
</html>
