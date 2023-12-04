<!DOCTYPE html>
<html>
<head>
    <title>Course Overview</title>
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
            transition: opacity 0.3s, font-size 0.3s;
        }

        .card-text-zoom:hover {
            font-size: 1.1em;
            opacity: 1;
        }

        .card-text-zoom:hover .view-score-text {
            font-size: 1em;
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
    </style>
</head>
<body style="background-color: #a4a4a4;">
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="box-main">
        <br />
        <div class="card mb-3"  style= "width:100%; max-width: 1400px;">
            <h2 style="padding-left: 15px; font-size: 30px;">Student Grade</h2>
            <div class="card-body">
                <div class="row">
                <?php
                for ($i = 1; $i <= 9; $i++) {
                    echo '
                    <div class="col-lg-4 mb-3">
                        <a href="nilai' . $i . '.php" class="card-link no-underline">
                            <div class="card" style="height: 100%; max-height: 250px; width: 100%; max-width: 400px;">
                                <div class="blue-top"></div>
                                <div class="card-body card-text-zoom" style="overflow: auto;">
                                    <p style="color: black;"><b>Card ' . $i . '</b></p>
                                    <p style="color: black; text-decoration: none;">Description for Card ' . $i . '</p>
                                    <p class="view-score-text card-text-zoom-hidden" style="text-align:center;">View Score</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/course.blade.php ENDPATH**/ ?>