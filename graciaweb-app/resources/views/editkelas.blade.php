<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a4a4a4;
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
        <h2 style="text-align: left;">Edit Kelas</h2>
        <div style="color: green;"></div>
        <form action="{{ route('adminkelas.update', ['kelasID' => $class->kelasID]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_kelas">Kelas</label>
                <input type="text" id="nama_kelas" name="nama_kelas" style="width: 100%; max-width: 280px;" placeholder="{{ $class->nama_kelas }}" value="{{ $class->nama_kelas }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" style="width: 100%; max-width: 280px;" placeholder="{{ $class->deskripsi }}" value="{{ $class->deskripsi }}" required>
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Edit Kelas</button>
                <a href="{{ url('/') }}" class="btn btn-primary" style="text-decoration: none;">Delete</a>
                <br />
                <br />
                <a href="{{ url('/adminpage4') }}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
