<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.public.style')
</head>

<body>
    <div class="col">
        @include('includes.public.header')
        <div class="col">
            <div class="row">
                @include('includes.public.sidebar')
                
                {{-- Content --}}
                <div class="col-lg-10">
                    @yield('content')
                </div>

            </div>
        </div>
        @include('includes.public.script')
    </div>
    <script src="{{ asset('fa/js/all.min.js') }}"></script>
</body>

</html>