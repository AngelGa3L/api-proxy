<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="bg-black">
    <div class="container">
        <h1 style="text-align: center; color: white; margin-top: 40px;">Bienvenido</h1>
    </div>
    <div class="image-container">
            <img style="height: 450px; margin-top: 0px;" src="/images/asa.png" alt="Foto">
        </div>
    <div class="">
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>