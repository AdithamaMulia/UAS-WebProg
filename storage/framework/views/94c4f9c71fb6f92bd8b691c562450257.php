<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mapel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a4a4a4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
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
            text-align: left;
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
            text-align: left;
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
<body>
    <div class="card">
        <h2 style="text-align: left;">Tambah Mata Pelajaran</h2>
        <?php if(session('error')): ?>
            <div style="color: red;"><?php echo e(session('error')); ?></div>
            <script>
                setTimeout(function(){
                    document.getElementById('error').style.display = 'none';
                }, 5000);
            </script>
        <?php endif; ?>
        <form action="<?php echo e(route('adminmapel.add')); ?>" method="post"> 
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_mapel">Mata Pelajaran</label>
                <input type="text" id="nama_mapel" name="nama_mapel" style="width: 100%; max-width: 280px;" placeholder="Mata Pelajaran" required>
            </div>
            <div class="form-group">
                <label for="tingkat">Kelas</label>
                <select id="tingkat" name="tingkat" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px;">
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <br />
            <div class="btn-container">
                <button type="submit" class="btn">Tambah Mapel</button>
                <br />
                <br />
                <a href="<?php echo e(url('/adminmapelindex')); ?>" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/tambahmapel.blade.php ENDPATH**/ ?>