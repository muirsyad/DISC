<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DISC test LHI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    /* Sticky Footer Classes */

    html,
    body {
        height: 100%;
    }

    #page-content {
        flex: 1 0 auto;
    }

    /* Other Classes for Page Styling */
</style>

<body class="d-flex flex-column">
    <div id="page-content">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-4 my-5">

                    @if (session()->has('message'))
                        <div x-data="{show:true}" x-init="setTimeout(() => show = false, 2500)" x-show="show" class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
        </div>
    </footer>


    {{-- js package --}}

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
