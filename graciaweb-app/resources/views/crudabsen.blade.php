<!DOCTYPE html>
<html>
<head>
    <title>Absen Siswa</title>
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
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
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
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
    @if(session('success'))
        <div id="success" style="color: green;">{{ session('success') }}</div>
        <script>
            setTimeout(function(){
                document.getElementById('success').style.display = 'none';
            }, 5000);
        </script>
    @elseif(session('error'))
        <div id="error" style="color: red;">{{ session('error') }}</div>
        <script>
            setTimeout(function(){
                document.getElementById('error').style.display = 'none';
            }, 5000);
        </script>
    @endif
        <h2 style="padding-left: 15px; font-size: 30px;">Daftar Absen Siswa  {{ $kelas->tingkat }} {{ $kelas->nama_kelas }}</h2>
        <br />
        <form id="absenForm" action="{{ url('/teacher/absensubmit/') }}" method="post">
            @csrf
            <div class="text-2l ml-2 font-sans" style="padding-left: 10px;">
            </div>
            <br />
            <div class="input-container" style="padding-left: 15px;">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" style="border: 1px solid #000;" required>

                <p>Semester: </p>
                <select id="semester" name="semester" style="width: 100%; max-width: 300px; height: 30px; font-size: 18px; margin-top: 5px; border: 1px solid #000;">
                    <option value="Genap">Genap</option>
                    <option value="Ganjil">Ganjil</option>
                </select>
            </div>
            <div class="card-body">
                <div class="row" style="padding-left: 15px;">
                    <table>
                        <thead>
                            <tr>
                                <th style="width: 20px;">ID</th>
                                <th style="width: 250px;">Nama</th>
                                <th style="width: 40px;">Kehadiran</th>
                                <th style="width: 180px;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            @if($user->role == 'student')
                                <tr>
                                    <td>{{ $user->userID }}</td>
                                    <td>{{ $user->nama_depan }} {{ $user->nama_belakang }}</td>
                                    <td>
                                        <input type="hidden" name="user_ids[]" value="{{ $user->userID }}">
                                        <input type="checkbox" id="remember_{{ $user->userID }}" name="remember[{{ $user->userID }}]">
                                    </td>
                                    <td>
                                        <select name="keterangan[{{ $user->userID }}]" style="border: 1px solid #000; border-radius: 5px;">
                                            <option value="Hadir">Hadir</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                        </select>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <br />
                    <a href="{{ url('admin/listadmin') }}" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-primary" style="background-color: blue;">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
