<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa per kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h1 {
            background: linear-gradient(to right, #1f67bf, #40d6ff);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        h2 {
            background: linear-gradient(to right, #696c70, #91abb3);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        h6 {
            background: linear-gradient(to right, #696c70, #91abb3);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            filter: drop-shadow(5px 5px 10px grey);
        }
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
<div class="container">
    <h1>Informasi Nilai</h1>
    <br />
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
        <h2 style="padding-left: 15px;">Rekap Nilai</h2>
        <h6 style="padding-left: 15px;">Matematika Wajib</h6>
        <div class="card-body">
            <div class="row" style="padding-left: 15px;">
                <table style="width: 330px;">
                    <tr>
                        <td style="width: 100px;">Penilaian</td>
                        <td style="width: 100px;">Bobot Nilai</td>
                        <td style="width: 130px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;">Tugas</td>
                        <td style="width: 100px;">20%</td>
                        <td style="width: 100px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;">Ulangan</td>
                        <td style="width: 100px;">20%</td>
                        <td style="width: 100px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;">UTS</td>
                        <td style="width: 100px;">25%</td>
                        <td style="width: 100px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;">UAS</td>
                        <td style="width: 100px;">30%</td>
                        <td style="width: 100px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;">Sikap</td>
                        <td style="width: 100px;">5%</td>
                        <td style="width: 100px;">Nilai</td>
                    </tr>
                    <tr>
                        <td style="width: 100px; border: 1px solid white;"></td>
                        <td style="width: 100px; border-bottom: 1px solid white;"></td>
                        <td style="width: 100px;">Total :</td>
                    </tr>
                </table>
            </div>
            <div>
                <br />
                    <a href="course.php" class="btn btn-primary">Back</a>
                </div>
            </div>
    </div>
</div>
</body>
</html>
