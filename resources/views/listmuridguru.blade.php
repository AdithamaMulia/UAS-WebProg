<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <title>CRUD MURID</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <style>
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
    </style>
</head>
<body style="background-color: #a4a4a4;">
@include('navbar')
<div class="box-main" style="text-align:center;">
    <br />
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
    <br />
        <h3 class="text-2xl ml-2 font-sans" style="text-align: left;"><strong>Daftar Siswa Kelas {{ $class->tingkat }} {{ $class->nama_kelas }}</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $key => $user)
            @if($user->role == 'student')
                <tr>
                    <td>{{ $user->userID }}</td>
                    <td>{{ $user->nama_depan }} {{ $user->nama_belakang }}</td>
                    <td>{{ $user->nis }}</td>
                    <td>{{ $user->tempat_lahir }}</td>
                    <td>{{ $user->tanggal_lahir }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->agama }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>
                        <a href="{{ url('/nilaisiswa/' . $class->kelasID . '/' . $user->userID) }}">
                            <i class="fa fa-pencil text-primary"></i> Edit
                        </a>
                    </td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/list/' . $class->kelasID) }}" class="ml-2 border border-primary rounded px-2 py-1" style="max-width: 120px; margin-top: 5px;">
    <i class="fa fa-arrow-left text-primary"></i>
        Back
    </a>
</div>
</body>
</html>
