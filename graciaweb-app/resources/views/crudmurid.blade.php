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
    </style>
</head>
<body>
    <h2 class="text-3xl font-bold text-blue-pigeon text-center mt-3">Welcome, Admin!!</h2>
<a href="{{ url('/home') }}" class="ml-2 rounded px-2 py-1">
    <i class="fa fa-home text-primary"></i>
    Home Page</a>
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 10 MIPA</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 10 IPS</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 11 MIPA</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 11 IPS</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 12 MIPA</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <h3 class="text-2xl ml-2 font-sans"><strong>Siswa Kelas 12 IPS</strong></h3>
    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ url('/admineditsiswa') }}">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>
                <td><a href="{{ url('/adminnilai') }}">Nilai</a></td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/adminaddsiswa') }}" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
    <br />
    <br />
    <a href="{{ url('/listadmin') }}" class="ml-2 border border-primary rounded px-2 py-1">
    <i class="fa fa-arrow-left text-primary"></i>
        Back
    </a>
</body>
</html>
