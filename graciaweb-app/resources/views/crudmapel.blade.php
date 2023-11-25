<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mapel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Welcome, Admin</h2>
    <a class="nav-link" href="{{ url('/home') }}" style="color: black;"><b>Home Page</b></a>
    <h3>Daftar Mata pelajaran</h3>
    <table>
        <tr>
            <th style="max-width:20px;">No</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Tgl. Dibuat</th>
            <th>Last Update</th>
            <th>Edit</th>
        </tr>
            <tr>
                <td style="max-width:20px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="{{ url('/admineditkelas/update/') }}">Edit</a></td>
            </tr>
    </table>    
    <a href="{{ url('/adminaddkelas') }}">Add Data</a>
    <br />
    <a href="{{ url('/home') }}">Back</a>
</body>
</html>