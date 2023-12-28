<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto</title>
    {{--  favi --}}
    <link rel="icon" href="/media/favi.png" type="image">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@300&family=Patrick+Hand&family=Playpen+Sans:wght@400;800&display=swap" rel="stylesheet">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/064399c8ef.js" crossorigin="anonymous"></script>
    {{--  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

            <div class="min-vh-100">
                {{$slot}}
            </div>
                <x-footer/>                

</body>
</html>