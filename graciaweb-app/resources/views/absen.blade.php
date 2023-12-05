<!DOCTYPE html>
<html>
<head>
    <title>Absen Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
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
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #d9d9d9;
    }
    td a {
        text-decoration: none;
        color: blue;
        transition: color 0.3s ease-in-out;
    }
    td a:hover {
        color: darkblue;
        font-weight: bold;
    }
    td:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

            *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }
        body{
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
        }
        .header{
        display: flex;
        flex-direction: row;
        justify-content: center;
        }
        #addEmpBtn{
        outline: none;
        border: 2px solid white;
        border-radius: 50px;
        background-color: yellow;
        font-size: 15px;
        font-weight: 500;
        padding: 0px 5px;
        }
        .btn-sm{
        width: 26px;
        height: 30px;
        padding: 2px;
        cursor: pointer;
        }
        @media (max-width:470px){
        .main-heading{
            font-size:15px;
        }
        #addEmpBtn{
            font-size: 10px;
        }
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

    <h2 class="text-3xl font-bold text-blue-pigeon mt-3" style="padding-left: 15px;">Daftar Absen Siswa</h2>
        <br />
        <div class="text-2l ml-2 font-sans" style="padding-left: 10px;">{{$kelas->tingkat}} {{ $kelas->nama_kelas }}</div>
        <br />
        <div class="input-container" style="padding-left: 15px;">
            <label for="tanggalv">Absensi dari Tanggal: {{$absen ? $absen->tanggal : 'NULL'}}</label>
            <input type="hidden" id="tanggalv" name="tanggalv" style="border: 1px solid #000;" value="{{$absen ? $absen->tanggal : ''}}" required>
        </div>
        <form id="absenForm" action="{{ url('/teacher/absensubmit/' . $kelas->kelasID)}}" method="post">
            @csrf
            <div class="card-body">
            <div class="input-container" style="padding-left: 15px;">
                <label for="tanggal">Update/Add Absensi Tanggal: </label>
                <input type="date" id="tanggal" name="tanggal" style="border: 1px solid #000;" value="{{$absen ? $absen->tanggal : ''}}" required>
            </div>
                <div class="row" style="padding-left: 15px;">
                <table class="table table-striped">
                    <thead class="thead-dark" style="background-color:black;">
                            <tr>
                                <th style="width: 20px;">No</th>
                                <th style="width: 250px;">Nama</th>
                                <th style="width: 250px;">Kehadiran</th>
                                <th style="width: 180px;">Kehadiran (Update)</th>
                            </tr>
                        </thead>
                        <tbody id="dataBody">
                        @foreach($users as $key => $user)
                            @if($user->role == 'student' && $user->kelasID == $kelas->kelasID)
                                <tr>
                                    <td class="increment">1</td>
                                    <td>{{ $user->nama_depan }} {{ $user->nama_belakang }}</td>
                                    <td>{{ $absen ? $absen->keterangan : 'NULL' }}</td>
                                        <input type="hidden" name="userID[]" value="{{ $user->userID }}">  
                                    <input type="hidden" name="kelasID" value="{{ $kelas->kelasID }}">
                                    <input type="hidden" name="absenID[{{ $user->userID }}]" value="{{ $absen ? $absen->absenID : '' }}">
                                    <input type="hidden" id="semester" name="semester" style="border: 1px solid #000;" value="Ganjil" required>
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
                    <a href="{{ url('teacher/kelas')}}" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-primary" style="background-color: blue;">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
