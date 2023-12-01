<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
            flex-direction: column; 
            height: 100vh; 
            margin: 0; 
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
            margin: 10px;
        }

        .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1000;
        }

        .navbar {
        position: sticky;
        top: 0;
        z-index: 1000; 
        background-color: #fff; 
        }

        body {
            ovaeflow: hidden;
        }

        .mission-list-container {
        border: 1px solid #ccc; 
        padding: 15px; 
        border-radius: 8px; 
        }

        .mission-box h2 {
            margin-bottom: 10px; 
        }

        .mission-box ol {
            margin: 0; 
            padding-left: 20px; 
        }

        .mission-box li {
            margin-bottom: 8px; 
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="image-section ">
        <img src="{{ asset('img') }}/sekolah1.jpg" alt="laptop image" class="imgFluid">
    </div>

    <div class="content-section">
    <div class="box mission-box">
        <h2 class= font-bold text-lg"> Vision</h2>
        <div class="mission-list-container font-sans">
            <ol style="text-align: left;">
                <li>“Terwujudnya peserta didik Sekolah Gracia yang berakhlak mulia, cerdas, trampil,
                aktif, kreatif, berwawasan luas dan bertaqwa kepada Tuhan Yang Maha Esa serta unggul berbahasa Inggris dan dapat menguasai penggunaan teknologi informasi dan komunikasi di masa pandemi Covid-19 ” </li>

        </div>
    </div>

    <div class="box mission-box">
        <h2 class="font-bold text-lg">Mission</h2>
        <div class="mission-list-container font-serif"> 
            <ol style="text-align: left;"> 
                <li>1. Mewujudkan peserta didik yang berakhlak mulia melalui pembinaan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</li>
                <li>2. Mewujudkan peserta didik yang berprestasi melalui peningkatan kompetensi dan profesionalitas tenaga pendidik dan tenaga kependidikan.</li>
                <li>3. Mewujudkan peserta didik yang mandiri melalui pelayanan pendidikan yang sesuai dengan tuntutan zaman serta perkembangan ilmu pengetahuan, teknologi, dan seni.</li>
                <li>4. Mewujudkan perpustakaan yang representatif.</li>
                <li>5. Menjalin komunikasi dan koordinasi antara anggota komunitas sekolah, masyarakat, dan instansi terkait.</li>
            </ol>
        </div>
    </div>


</div>

</body>
</html>
