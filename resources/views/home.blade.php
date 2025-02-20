<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avvanz Inc.</title>
    @vite('resources/css/home.css')
    @vite('resources/js/home.js')

</head>
<body>

    <main>
        <div class="content-container">
            <img id="avvanz-logo" class="avvanz-logo" src="{{ asset('images/avvanz-logo.png') }}" alt="Avvanz Inc. Logo">
            
            <div class="login-container">
                <button class="login-btn" onclick="window.open('{{ route('screenGlobal') }}', '_blank')">SCREENGLOBAL LOGIN</button>
                <button class="login-btn" onclick="window.open('{{ route('cdGlobal') }}', '_blank')">CDGLOBAL LOGIN</button>
                <button class="login-btn" onclick="window.open('{{ route('learnGlobal') }}', '_blank')">LEARNGLOBAL LOGIN</button>
            </div>

            <div class="tags-container">
                <button class="tag-btn" onclick="window.open('{{ route('about') }}', '_blank')">About</button>
                <button class="tag-btn" onclick="window.open('{{ route('screen') }}', '_blank')">Screen</button>
                <button class="tag-btn" onclick="window.open('{{ route('develop') }}', '_blank')">Develop</button>
                <button class="tag-btn" onclick="window.open('{{ route('contact') }}', '_blank')">Contact Us</button>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>