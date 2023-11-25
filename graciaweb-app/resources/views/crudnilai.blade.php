<!DOCTYPE html>
<html>
<head>
    <title>CRUD Nilai</title>
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
    <h3>Nilai kelas 7a</h3>
    <table>
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
        <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
    </tr>
    </table>
    <a href="{{ url('/adminpage7') }}">Add Data</a>
    <br />
    <a href="{{ url('/adminpage3') }}">Back</a>
</body>
</html>