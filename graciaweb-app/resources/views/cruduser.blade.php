<!DOCTYPE html>
<html>
<head>
    <title>CRUD User</title>
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
        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
    <a user="nav-link" href="{{ url('/home') }}" style="color: black;"><b>Home Page</b></a>
    <h3>User Murid</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>NIS</th>
            <th>Role</th>
            <th>Last Update</th>
            <th>Tgl Dibuat</th>
            <th>Edit</th>
        </tr>
        @foreach($users as $key => $user)
            <tr>
                <td style="max-width:20px;">{{ $user->userID }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama_depan }}{{ $user->nama_belakang }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->agama }}</td>
                <td>{{ $user->nis }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>{{ $user->created_at }}</td>
                <td><a href="{{ url('/adminedituser/update/' . $user->userID) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('/adminadduser') }}">Add Data</a>
    <h3>User Guru</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>NIS</th>
            <th>Role</th>
            <th>Last Update</th>
            <th>Tgl Dibuat</th>
            <th>Edit</th>
        </tr>
        @foreach($users as $key => $user)
            <tr>
                <td style="max-width:20px;">{{ $user->userID }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama_depan }}{{ $user->nama_belakang }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->agama }}</td>
                <td>{{ $user->nis }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>{{ $user->created_at }}</td>
                <td><a href="{{ url('/adminedituser/update/' . $user->userID) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('/adminadduser') }}">Add Data</a>
    <h3>User Admin</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>NIS</th>
            <th>Role</th>
            <th>Last Update</th>
            <th>Tgl Dibuat</th>
            <th>Edit</th>
        </tr>
        @foreach($users as $key => $user)
            <tr>
                <td style="max-width:20px;">{{ $user->userID }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama_depan }}{{ $user->nama_belakang }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->agama }}</td>
                <td>{{ $user->nis }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>{{ $user->created_at }}</td>
                <td><a href="{{ url('/adminedituser/update/' . $user->userID) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('/adminadduser') }}">Add Data</a>
    <a href="{{ url('/home') }}">Back</a>
</body>
</html>