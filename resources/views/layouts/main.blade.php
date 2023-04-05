<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>BGeen - Top Up sepuasnya</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-950 text-slate-50 font-rubik">
    <header>
        <x-navbar></x-navbar>
    </header>
    <main class="mt-20">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
