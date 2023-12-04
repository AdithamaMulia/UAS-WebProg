<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
    <div class="card">
        <h2 style="text-align: left;">Edit Nilai <?php echo e($mapel->nama_mapel); ?>, <?php echo e($user->nama_depan); ?>  <?php echo e($user->nama_belakang); ?></h2>
        <?php if(session('error')): ?>
            <div id="error" style="color: red;"><?php echo e(session('error')); ?></div>
            <script>
                setTimeout(function(){
                    document.getElementById('error').style.display = 'none';
                }, 5000);
            </script>
        <?php endif; ?>
        <form action="<?php echo e(url('/nilaisiswa/' . $user->userID . '/' . $mapel->mapelID)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <label for="semester">Semester</label>
                <br />
                <select id="semester" name="semester" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px;">
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nilaiUH1">Ulangan 1</label>
                <input type="number" id="nilaiUH1" name="nilaiUH1" style="width: 100%; max-width: 280px;" placeholder="Ulangan 1" value="<?php echo e($nilai->nilaiUH1 ?? '0'); ?>">
            </div>
            <div class="form-group">
                <label for="nilaiUH2">Ulangan 2</label>
                <input type="number" id="nilaiUH2" name="nilaiUH2" style="width: 100%; max-width: 280px;" placeholder="Ulangan 2" value="<?php echo e($nilai->nilaiUH2 ?? '0'); ?>">
            </div>
            <div class="form-group">
                <label for="nilaiUH3">Ulangan 3</label>
                <input type="number" id="nilaiUH3" name="nilaiUH3" style="width: 100%; max-width: 280px;" placeholder="Ulangan 3" value="<?php echo e($nilai->nilaiUH3 ?? '0'); ?>">
            </div>
            <div class="form-group">
                <label for="nilaiUH4">Ulangan 4</label>
                <input type="number" id="nilaiUH4" name="nilaiUH4" style="width: 100%; max-width: 280px;" placeholder="Ulangan 4" value="<?php echo e($nilai->nilaiUH4 ?? '0'); ?>">
            </div>
            <div class="form-group">
                <label for="nilaiUTS">UTS</label>
                <input type="number" id="nilaiUTS" name="nilaiUTS" style="width: 100%; max-width: 280px;" placeholder="UTS" value="<?php echo e($nilai->nilaiUTS ?? '0'); ?>"> 
            </div>
            <div class="form-group">
                <label for="nilaiUAS">UAS</label>
                <input type="number" id="nilaiUAS" name="nilaiUAS" style="width: 100%; max-width: 280px;" placeholder="UAS" value="<?php echo e($nilai->nilaiUAS ?? '0'); ?>">
            </div>
            <div class="form-group">
                <label for="nilaiAkhir">Nilai Akhir</label>
                <input type="number" id="nilaiAkhir" name="nilaiAkhir" style="width: 100%; max-width: 280px;" placeholder="Nilai Akhir" value="<?php echo e($nilai->nilaiAkhir ?? '0'); ?>">
            </div>
            <br />
            <input type="hidden" name="userID" value="<?php echo e($user->userID); ?>">
            <input type="hidden" name="mapelID" value="<?php echo e($mapel->mapelID); ?>">
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Edit Nilai</button>
                <br />
                <br />
                <a href="<?php echo e(url('/nilaisiswa/' . $mapel->mapelID . '/' . $user->userID)); ?>" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/editnilai.blade.php ENDPATH**/ ?>