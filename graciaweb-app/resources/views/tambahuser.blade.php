<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
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
            margin-top: 20px;
            margin-bottom: 20px;
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
        <h2 style="text-align: left;">Tambah User</h2>
        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        <form action="{{ route('adminuser.add') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" style="width: 100%; max-width: 280px;" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" id="nama_depan" name="nama_depan" style="width: 100%; max-width: 280px;" placeholder="Nama Depan" required>
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" id="nama_belakang" name="nama_belakang" style="width: 100%; max-width: 280px;" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" style="width: 100%; max-width: 280px;" placeholder="Password" required>
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <div>
                    <input type="radio" id="gender_laki" name="gender" value="Laki-Laki" />
                    <label for="gender_laki">Laki-laki</label>

                    <input type="radio" id="gender_perempuan" name="gender" value="Perempuan" />
                    <label for="gender_perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" style="width: 100%; max-width: 280px;" placeholder="Tanggal Lahir" required>
            </div>
            <br />
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" style="width: 100%; max-width: 280px;" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" style="width: 100%; max-width: 280px;" placeholder="NIS" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" id="agama" name="agama" style="width: 100%; max-width: 280px;" placeholder="Agama" required>
            </div>
            <div class="form-group">
                <label for="nama_orangtua">Nama Orangtua</label>
                <input type="text" id="nama_orangtua" name="nama_orangtua" style="width: 100%; max-width: 280px;" placeholder="Nama Orangtua" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" style="width: 100%; max-width: 280px;" placeholder="Tempat Lahir" required>
            </div>
            <div>
                <label for="role">Role</label>
                <br />
                <select id="role" name="role" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px;">
                    <option value="admin">Admin</option>
                    <option value="student">Murid</option>
                    <option value="teacher">Guru</option>
                </select>
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Tambah User</button>
                <br />
                <br />
                <a href="{{ url('/adminuserindex') }}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
