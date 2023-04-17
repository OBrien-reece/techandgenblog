<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    {{--Imported jquery for purposes of using the toastr library--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('styles')
</head>
<body>
    <div id="app">

        @include('layouts._includes.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @if(Session::has('message'))
        <script>
            toastr.options = {
                'progressBar' : true,
                "showMethod": "fadeIn",
                "positionClass": "toast-bottom-right",
                "hideMethod": "fadeOut",
                "closeButton": true,
                "newestOnTop": false,
            }
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif

    @if(Session::has('error'))
        <script>
            toastr.options = {
                'progressBar' : true,
                "showMethod": "fadeIn",
                "positionClass": "toast-bottom-right",
                "hideMethod": "fadeOut",
                "closeButton": true,
                "newestOnTop": false,
            }
            toastr.error("{{ Session::get('error') }}");
        </script>
    @endif

@stack('scripts')

{{--Become a writer modal logic start--}}

    @if(Auth()->user())
        <!-- Modal -->
        <div id="Modal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Want to become a writer?</h5>
                    </div>

                    <form action="/writer/{{ Auth()->user()->name }}/request" method="POST" class="mt-1">
                        @csrf

                        <div class="modal-body">
                            <span>Tell us something about yourself...</span>
                            <div class="form-group">
                                <textarea required maxlength="300" class="form-control" name="writers_about" id="" cols="30" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endif

{{--Become a writer modal logic ends--}}

</body>

</html>
