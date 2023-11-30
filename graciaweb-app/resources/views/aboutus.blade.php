<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            overflow: hidden; 
            display: flex;
            justify-content: space-between;
            flex-direction: column; /* To stack image section and content */
            height: 100vh; /* Set full height of the viewport */
            margin: 0; /* Remove default margin */
        }

        .image-section {
            height: 450px; 
            position: relative;
            overflow: hidden;
        }

        .imgFluid {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .content-section {
            flex: 1; 
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .box {
            width: 30%; 
            height: 100px; 
            background-color: #f0f0f0; 
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="image-section">
        <img src="{{ asset('img') }}/sekolah1.jpg" alt="laptop image" class="imgFluid">
    </div>

    <div class="content-section">
        <div class="box"></div>
        <div class="box"></div>
    </div>
</body>
</html>
