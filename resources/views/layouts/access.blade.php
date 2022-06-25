<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Sora:wght@400&family=Acme" rel="stylesheet">
    <link rel="icon" href="../public/immagini/Images/Zampa.png">
    <link rel="stylesheet" href="{{ url('css/access.css') }}">
    <title>@yield('title')</title>
    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>
    @yield('script')
</head>
<body>

    <article>
        <section>
            <img src="../public/immagini/Images/Logo.png" alt="Logo">
        </section>

        @yield('content')

    </article>
</body>
</html>