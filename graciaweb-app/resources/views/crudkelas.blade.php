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
    <h3>Daftar Kelas</h3>
    <table>
        <tr>
            <th style="max-width:20px;">No</th>
            <th>Kelas</th>
            <th>deskripsi</th>
            <th>Edit</th>

        </tr>
            <tr>
                <td style="max-width:20px;"></td>
                <td><a href="{{ url('/adminpage3') }}" style="text-decoration: none;">Kelas</a></td>
                <th></th>
                <td><a href="edit_data.php?table=makanan&id=">Edit</a></td>
            </tr>
    </table>
    <a href="{{ url('/adminpage6') }}">Add Data</a>
    <br />
    <a href="{{ url('/') }}">Back</a>
</body>
</html>