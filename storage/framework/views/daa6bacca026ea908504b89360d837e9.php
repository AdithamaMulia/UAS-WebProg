<!DOCTYPE html>
<html>
<head>
    <title>Class List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Arial', sans-serif;
    background-color: #a4a4a4;
    color: #333;
    line-height: 1.6;
    margin: 0;
}


.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}


.card {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.card-header {
    height: 10px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.card-body {
    padding: 20px;
}

.card-link {
    text-decoration: none;
    color: inherit;
}

h1,
h2 {
    text-align: center;
    padding: 20px 0;
    font-weight: bold;
}

h1 {
    font-size: 2.5rem;
    color: #1f67bf;
}

h2 {
    font-size: 2rem;
    color: #696c70;
}


@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    .card {
        margin-bottom: 20px;
    }
}

.nested-box {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
        }

        .nested-box img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .blue-top {
            background-color: #FEC994;
            padding: 40px;
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
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-color: #eee2dc;">
    <div class="box-main">
        <br />
        <div class="card mb-3 mx-auto" style="max-width: 1400px;">
            <h2 style="padding-left: 15px; font-size: 30px"><strong>Class of :</strong></h2>
            <div class="card-body">
                <div class="row">
                    <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 mb-3">
                            <a href="<?php echo e(url('/list/' . $class->kelasID)); ?>" class="card-link no-underline">
                                <div class="card" style="height: 200px; width: 100%; max-width: 400px;">
                                    
                                    <div class="card-body card-text-zoom" style="overflow: auto;">
                                        <p style="color: black;"><b><?php echo e($class->nama_kelas); ?></b></p>
                                    <br />
                                        <div class="blue-top"><?php echo e($class->deskripsi); ?></div>
                                        <div class="nested-box">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/kelas.blade.php ENDPATH**/ ?>