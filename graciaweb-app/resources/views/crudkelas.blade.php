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
            <th>Deskripsi</th>
            <th>Edit</th>
        </tr>
        @foreach($classes as $key => $class)
            <tr>
                <td style="max-width:20px;">{{ $key + 1 }}</td>
                <td><a href="{{ url('/adminpage3') }}" style="text-decoration: none;">{{ $class->nama_kelas }}</a></td>
                <td>{{ $class->deskripsi }}</td>
                <td><a href="{{ url('/edit_data.php') }}?table=makanan&id={{ $class->kelasID }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('/adminpage6') }}">Add Data</a>
    <br />
    <a href="{{ url('/') }}">Back</a>
</body>
</html>