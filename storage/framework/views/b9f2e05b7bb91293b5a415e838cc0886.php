<!DOCTYPE html>
<html lang="en">
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
    <title>CRUD USER</title>
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
    <?php if(session('success')): ?>
        <div id="success" style="color: green;"><?php echo e(session('success')); ?></div>
        <script>
            setTimeout(function(){
                document.getElementById('success').style.display = 'none';
            }, 5000);
        </script>
    <?php elseif(session('error')): ?>
        <div id="error" style="color: red;"><?php echo e(session('error')); ?></div>
        <script>
            setTimeout(function(){
                document.getElementById('error').style.display = 'none';
            }, 5000);
        </script>
    <?php endif; ?>
    <br/>
    <a href="<?php echo e(url('/home')); ?>" class="ml-2 rounded px-2 py-1">
    <i class="fa fa-home text-primary"></i>
    Home Page</a>
    <h3 class="text-2xl ml-2 font-sans"><strong>User Murid</strong></h3>


    <br />
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
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
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->role == 'student'): ?>
            <tr>
                <td><?php echo e($user->userID); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->nama_depan); ?> <?php echo e($user->nama_belakang); ?></td>
                <td><?php echo e($user->gender); ?></td>
                <td><?php echo e($user->tanggal_lahir); ?></td>
                <td><?php echo e($user->alamat); ?></td>
                <td><?php echo e($user->agama); ?></td>
                <td><?php echo e($user->nis); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
                <td><?php echo e($user->created_at); ?></td>
                <td>
                    <a href="<?php echo e(url('/adminedituser/update/' . $user->userID)); ?>">
                        <i class="fa fa-pencil text-primary"></i> Edit
                    </a>
                </td>

            </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    <h3 class="text-2xl ml-2 font-sans"><strong>User Guru</strong></h3>
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
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
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->role == 'teacher'): ?>
            <tr>
                <td><?php echo e($user->userID); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->nama_depan); ?> <?php echo e($user->nama_belakang); ?></td>
                <td><?php echo e($user->gender); ?></td>
                <td><?php echo e($user->tanggal_lahir); ?></td>
                <td><?php echo e($user->alamat); ?></td>
                <td><?php echo e($user->agama); ?></td>
                <td><?php echo e($user->nis); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
                <td><?php echo e($user->created_at); ?></td>
            <td>
                <a href="<?php echo e(url('/adminedituser/update/' . $user->userID)); ?>">
                    <i class="fa fa-pencil text-primary"></i> Edit
                </a>
            </td>

            </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    <h3 class="text-2xl ml-2 font-sans"><strong>User Admin</strong></h3>
    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th style="max-width:20px;">ID</th>
            <th>Username</th>
            <th>Nama</th>
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
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->role == 'admin'): ?>
            <tr>
                <td style="max-width:20px;"><?php echo e($user->userID); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->nama_depan); ?> <?php echo e($user->nama_belakang); ?></td>
                <td><?php echo e($user->gender); ?></td>
                <td><?php echo e($user->tanggal_lahir); ?></td>
                <td><?php echo e($user->alamat); ?></td>
                <td><?php echo e($user->agama); ?></td>
                <td><?php echo e($user->nis); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
                <td><?php echo e($user->created_at); ?></td>
            <td>
                <a href="<?php echo e(url('/adminedituser/update/' . $user->userID)); ?>">
                    <i class="fa fa-pencil"></i> Edit
                </a>
            </td>

            </tr>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<a href="<?php echo e(url('/adminadduser')); ?>" class="ml-2 border border-primary rounded px-2 py-1">
            <i class="fa fa-plus text-primary"></i>
            Add Data
        </a>
        <br/>
        <br/>
    <a href="<?php echo e(url('/listadmin')); ?>" class="ml-2 border border-primary rounded px-2 py-1">
    <i class="fa fa-arrow-left text-primary"></i>
        Back
    </a>
</body>
</html>
<?php /**PATH D:\Program Files (x86)\XAMPP\htdocs\Tugas Campus\WEBPROG Real Backup 051123\UAS WebProg\UAS-WebProg\graciaweb-app\resources\views/cruduser.blade.php ENDPATH**/ ?>