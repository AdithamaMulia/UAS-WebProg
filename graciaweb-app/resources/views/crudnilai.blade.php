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
    <title>CRUD NILAI</title>
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
    <h3 class="text-2xl ml-2 font-sans"><strong>User Murid</strong></h3>
    <h4 class="text-2l ml-2 font-sans"><strong>Nama : </strong></h4>
    <h4 class="text-2l ml-2 font-sans"><strong>NIS : </strong></h4>
    <div class="text-2l ml-2 font-sans">
        <select id="semester" name="semester" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px; border: 1px solid #000;">
            <option value="Ganjil">Ganjil</option>
            <option value="Genap">Genap</option>
        </select>
    </div>

    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th style="max-width: 20px; text-align: center; vertical-align: middle;" rowspan="2">No</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Mata Pelajaran</th>
        <th colspan="4" style="text-align: center;">Nilai Ulangan</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UTS</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai UAS</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Nilai Akhir</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Last Update</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Tgl Dibuat</th>
        <th style="text-align: center; vertical-align: middle;" rowspan="2">Edit</th>
    </tr>
    <tr>
        <th style="max-width: 20px; text-align: center;">1</th>
        <th style="max-width: 20px; text-align: center;">2</th>
        <th style="max-width: 20px; text-align: center;">3</th>
        <th style="max-width: 20px; text-align: center;">4</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="text-align: center; vertical-align: middle;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td style="max-width: 20px; text-align: center;"></td>
        <td>
            <a href="{{ url('/adminaddnilai') }}">
                <i class="fa fa-pencil text-primary"></i> Edit
            </a>
        </td>
    </tr>
    </tbody>
    </table>
    <a href="{{ url('/adminaddnilai') }}" class="ml-2 border border-primary rounded px-2 py-1">
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
