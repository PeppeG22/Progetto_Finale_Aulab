<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="\img\chiave-logo.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Edu+NSW+ACT+Foundation:wght@400..700&family=Micro+5&family=Poetsen+One&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>La Chiave del Sapere</title>

    
</head>
<body class="bg-custom">
    
    <x-navbar />


    <div class="min-vh-100" style="margin-top:56px;">

        {{ $slot }}

    </div>

    <x-footer />
    <script src="https://kit.fontawesome.com/572b2e1969.js" crossorigin="anonymous"></script>
</body>
</html>