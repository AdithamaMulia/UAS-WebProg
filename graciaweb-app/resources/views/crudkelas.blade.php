<!DOCTYPE html>
<html>
<head>
    <title>CRUD Kelas</title>
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
    <h3>Daftar Kelas</h3>
    <table>
        <tr>
            <th style="max-width:20px;">No</th>
            <th>Kelas</th>
            <th>Deskripsi</th>
            <th>Tgl. Dibuat</th>
            <th>Last Update</th>
            <th>Edit</th>
        </tr>
        @foreach($classes as $key => $class)
            <tr>
                <td style="max-width:20px;">{{ $key + 1 }}</td>
                <td><a href="{{ url('/adminkelas') }}" style="text-decoration: none;">{{ $class->nama_kelas }}</a></td>
                <td>{{ $class->deskripsi }}</td>
                <td>{{ $class->created_at }}</td>
                <td>{{ $class->update_at }}</td>
                <td><a href="{{ url('/admineditkelas/update/' . $class->kelasID) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>    
    <a href="{{ url('/adminaddkelas') }}">Add Data</a>
    <br />
    <a href="{{ url('/home') }}">Back</a>
</body>
</html>