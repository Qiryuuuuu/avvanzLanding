<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avvanz Inc.</title>
    @vite('resources/css/splash.css')
    @vite('resources/js/splash.js')

    <script defer>
        const redirectUrl = "{{ url('/home') }}";
    </script>

</head>
<body>
    <main>
        <div class="container">
            <img id="avvanz-logo" class="avvanz-logo" src="{{ asset('images/avvanz-logo.png') }}" alt="Avvanz Inc. Logo">
        </div>
    </main>


</body>
</html>

