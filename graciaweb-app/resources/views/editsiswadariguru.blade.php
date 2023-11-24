<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
        <h2 style="text-align: left;">Edit Daftar Siswa</h2>
        <form action="{{ url('/tambahmurid') }}" method="get">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" style="width: 100%; max-width: 280px;" placeholder="Nama Siswa" required>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" style="width: 100%; max-width: 280px;" placeholder="NIS" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" style="width: 100%; max-width: 280px;" placeholder="Tempat Lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" style="width: 100%; max-width: 280px;" placeholder="Tanggal Lahir" required>
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <input type="radio" name="gender" value="m" /> Laki-laki
                <input type="radio" name="gender" value="f" /> Perempuan
            </div>
            <br />
            <div>
                <label for="pilihan">Agama</label>
                <br />
                <select id="agama" name="agama" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px;">
                    <option value="opsi1">Islam</option>
                    <option value="opsi2">Kristen</option>
                    <option value="opsi3">Khatolik</option>
                    <option value="opsi4">Buddha</option>
                    <option value="opsi5">Hindu</option>
                    <option value="opsi6">Khonghucu</option>
                </select>
            </div>
            <br />
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" style="width: 100%; max-width: 280px;" placeholder="Alamat" required>
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Update Siswa</button>
                <br />
                <br />
                <a href="{{ url('/tambahmurid') }}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
