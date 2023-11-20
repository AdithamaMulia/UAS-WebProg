<!DOCTYPE html>
<html>
<head>
    <title>Admin Page - OffCourse</title>
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
    <a class="nav-link" href="{{ url('/') }}" style="color: black;"><b>Home Page</b></a>
    <h3>User Murid</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>Role</th>
            <th>Edit</th>
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
                <td><a href="{{ url('/i') }}">Edit</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage9') }}">Add Data</a>
    <h3>User Guru</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>Role</th>
            <th>Edit</th>
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
                <td><a href="{{ url('/i') }}">Edit</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage9') }}">Add Data</a>
    <h3>User Admin</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>Role</th>
            <th>Edit</th>
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
                <td><a href="{{ url('/i') }}">Edit</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage9') }}">Add Data</a>
    <a href="{{ url('/') }}">Back</a>
</body>
</html>