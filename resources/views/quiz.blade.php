<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/nav-new.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Bootdey.com</a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" class="nav-item nav-link active">Logout</a></li>



                    </ul>
                </div>
            </div>
        </nav>

        {{-- <div class="banner">
            <div class="container">
                <h1>Bootstrap 4 Navbar</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie.</p>
                <a href="#content" class="button button-primary">Learn More</a>
            </div>
        </div> --}}
        <main>

            @yield('content')

        </main>
    </header>



</body>
</html>
