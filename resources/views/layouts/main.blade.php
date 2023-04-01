<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>My test page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#1F2728]">
    <header>
        <x-navbar></x-navbar>
    </header>
    {{ $slot }}
</body>

</html>
