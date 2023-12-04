<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <title>CRUD KELAS</title>
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
    </style>
</head>
<body>
    <h2 class="text-3xl font-bold text-blue-pigeon text-center mt-3">Welcome, Admin!!</h2>
    <br/>
    <a href="{{ url('/home') }}" class="ml-2 rounded px-2 py-1">
    <i class="fa fa-home text-primary"></i>
    Home Page</a>

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

    <h3 class="text-2xl ml-2 font-sans"><strong>Daftar Kelas</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">

        <tr>
            <th style="max-width:40px;">ID Kelas</th>
            <th>Kelas</th>
            <th>Deskripsi</th>
            <th>Tingkat</th>
            <th>Tgl. Dibuat</th>
            <th>Last Update</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $key => $class)
            <tr>
                <td style="max-width:40px;">{{ $class->kelasID }}</td>
                <td><a href="{{ url('/adminmurid/' . $class->kelasID) }}">{{ $class->nama_kelas }}</a></td>
                <td>{{ $class->deskripsi }}</td>
                <td>{{ $class->tingkat }}</td>
                <td>{{ $class->created_at }}</td>
                <td>{{ $class->updated_at }}</td>
                <td>
                <a href="{{ url('/admineditkelas/update/' . $class->kelasID) }}">
                    <i class="fa fa-pencil text-primary"></i> Edit
                </a>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <a href="{{ url('admin/adminaddkelas') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <a href="{{ url('admin/listadmin') }}" class="ml-2 border border-primary rounded px-2 py-1">
    <i class="fa fa-arrow-left text-primary"></i>
        Back
    </a>
</body>
</html>
