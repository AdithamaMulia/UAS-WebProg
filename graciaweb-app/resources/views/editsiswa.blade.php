<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
        <h2 style="text-align: left;">Tambah Siswa</h2>
        <form action="{{ url('/adminpage8') }}" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" style="width: 100%; max-width: 280px;" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" style="width: 100%; max-width: 280px;" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" id="nama_depan" name="nama_depan" style="width: 100%; max-width: 280px;" placeholder="Nama Depan" required>
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" id="nama_belakang" name="nama_belakang" style="width: 100%; max-width: 280px;" placeholder="Nama Belakang" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" style="width: 100%; max-width: 280px;" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" style="width: 100%; max-width: 280px;" placeholder="Tempat Lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" style="width: 100%; max-width: 280px;" placeholder="Tanggal Lahir" required>
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <div>
                <input type="radio" id="gender_laki" name="gender" value="Laki-Laki" /> Laki-laki
                <input type="radio" id="gender_perempuan" name="gender" value="Perempuan" /> Perempuan
                </div>
            </div>
            <br />
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" style="width: 100%; max-width: 280px;" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" style="width: 100%; max-width: 280px;" placeholder="NIS" required>
            </div>
            <div>
                <label for="role">Role : Murid</label>
                <br />
            </div>
            <br />
            <div>
                <label for="action">Action</label>
                    <select id="action" name="action" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px;">
                        <option value="edit">Edit</option>
                        <option value="delete">Delete</option>
                    </select>
                </label>
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Submit</button>
                <br />
                <br />
                <a href="{{ url('/adminpage8') }}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
