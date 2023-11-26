<!-- Backup List -->

<!DOCTYPE html>
<html>
<head>
    <title>LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        h1 {
            background: linear-gradient(to right, #1f67bf, #40d6ff);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        h2 {
            background: linear-gradient(to right, #696c70, #91abb3);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        .blue-top {
            background-color: #1f67bf;
            padding: 40px;
        }
        .card-text-zoom {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            transition: opacity 0.3s, font-size 0.3s;
        }

        .card-text-zoom:hover {
            font-size: 1.1em;
            opacity: 1;
        }

        .card-text-zoom-hidden {
            font-size: 0;
            opacity: 1;
        }

        .no-underline {
            text-decoration: none;
        }
        .box-main{
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            margin: auto;
            margin-top : 20px;
            height: 100%;
        }

        .navbar {
        position: sticky;
        top: 0;
        z-index: 1000; 
        background-color: #fff; 
        }

        .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1000;
        }
        
    </style>
</head>
<body style="background-color: #a4a4a4;">
@include('navbar')
    <div class="box-main">
        <br />
        <div class="card mb-3"  style= "width:100%; max-width: 1400px;">
            <h2 style="padding-left: 15px; font-size: 30px">Class</h2>
            <div class="card-body">
                <div class="row">
                <?php
                    echo '<div class="row justify-content-center">';
                    echo "
                    <div class=\"col-lg-4 mb-3\">
                        <a href=\"{{ url('/') }}\" class=\"card-link no-underline\">
                            <div class=\"card\" style=\"height: 300px; width: 100%; max-width: 400px; background-color: #63c9ff;\">
                                <div class=\"card-body card-text-zoom\" style=\"overflow: auto;\">
                                    <p style=\"color: black;\"><b>Daftar Siswa</b></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ";
                    echo '
                    <div class="col-lg-4 mb-3">
                        <a href="nilai2.php" class="card-link no-underline">
                            <div class="card" style="height: 300px; width: 100%; max-width: 400px; background-color: #63c9ff;">
                                <div class="card-body card-text-zoom" style="overflow: auto;">
                                    <p style="color: black;"><b>Daftar Absen</b></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ';
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
