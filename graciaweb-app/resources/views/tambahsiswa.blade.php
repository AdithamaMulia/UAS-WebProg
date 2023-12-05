<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
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
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
            <script>
                setTimeout(function(){
                    document.getElementById('error').style.display = 'none';
                }, 5000);
            </script>
        @endif
        <form action="{{ url('admin/addUserToClass', ['kelasID' => $kelas]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kelasID">Kelas {{ $kelas->tingkat }} {{ $kelas->nama_kelas }}</label>

                <label for="userID">Pilih murid: </label>
                <select name="userID" id="userID">
                    @foreach($user as $key => $murid)
                    @if($murid->role == 'student')
                        <option value="{{ $murid->userID }}">{{ $murid->nama_depan }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Tambah Siswa</button>
                <br />
                <br />
                <a href="{{ url('/admin/adminkelasindex')}}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
