<!DOCTYPE html>
<html>
<head>
    <title>CRUD Murid</title>
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
    <h3>Siswa kelas 7a</h3>
    <table>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <h3>Siswa kelas 7b</h3>
    <table>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <h3>Siswa kelas 7c</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Last Update</th>
            <th>Tgl Dibuat</th>
            <th>Edit</th>
            <th>Nilai</th>
        </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <h3>Siswa kelas 8a</h3>
    <table>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <h3>Siswa kelas 8b</h3>
    <table>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <h3>Siswa kelas 8c</h3>
    <table>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
                <td><a href="{{ url('/adminpage4') }}">Nilai</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage5') }}">Add Data</a>
    <br />
    <a href="{{ url('/adminpage2') }}">Back</a>
</body>
</html>