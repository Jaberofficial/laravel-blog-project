<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Website-Jaber</title>
        
        <!-- Font Awesome icons (free version) & Google fonts & Core theme CSS (includes Bootstrap) -->
        @include('frontend.includes.style')
    </head>
    <body>
        <!-- Navigation-->
@include('frontend.includes.navbar')

@yield('content')
 
        <!-- Footer-->
@include('frontend.includes.footer')

<!-- Bootstrap core JS & Core theme JS-->
        @include('frontend.includes.script')
    </body>
</html>
