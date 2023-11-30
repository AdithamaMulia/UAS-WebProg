<!DOCTYPE html>
<html>
<head>
    <title>Absen Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
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
        .box-main{
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            margin: auto;
            margin-top : 20px;
            height: 100%;
        }

        .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #fff;
        }

        .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1000;
        }

    </style>
</head>
<body style="background-color: #a4a4a4;">
@include('navbar')
<div class="box-main">
    <br />
    <div class="card mb-3" style="width:100%; max-width: 1200px;">
        <h2 style="padding-left: 15px; font-size: 30px;">Daftar Absen Siswa</h2>
        <br />
        <div class="text-2l ml-2 font-sans" style="padding-left: 10px;">
        <select id="semester" name="semester" style="width :100%; max-width:300px; height: 30px; font-size: 18px; margin-top: 5px; border: 1px solid #000;">
            <option value="Ganjil">10 Mipa</option>
            <option value="Genap">10 IPS</option>
            <option value="Genap">11 MIPA</option>
            <option value="Genap">11 IPS</option>
            <option value="Genap">12 MIPA</option>
            <option value="Genap">12 IPS</option>
        </select>
    </div>
        <br />
        <div class="input-container" style="padding-left: 15px;">
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" style="border: 1px solid #000;">
        </div>
        <div class="card-body">
            <div class="row" style="padding-left: 15px;">
            <table>
                <tr>
                <td style="width: 20px;">No.</td>
                <td style="width: 250px;">Nama</td>
                <td style="width: 40px;">Kehadiran</td>
                <td style="width: 180px;">Keterangan</td>
            </tr>
                @foreach($absensi as $key)
                    <tr>

                        <td style="width: 20px;">{{ $key + 1 }}</td>
                        <td style="width: 250px;">{{ $absensi->nama }}</td>
                        <td style="width: 20px; text-align: center;"><input type="checkbox" id="remember" name="remember"></td>
                        <td style="width: 180px;">
                            <select id="keterangan" style="border: 1px solid #000; border-radius: 5px;">
                                <option value="hadir" {{ $absensi->Keterangan == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                <option value="sakit" {{ $absensi->Keterangan == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                <option value="izin" {{ $absensi->Keterangan == 'Izin' ? 'selected' : '' }}>Izin</option>
                                <option value="tanpaketerangan" {{ $absensi->Keterangan == 'Tanpa Keterangan' ? 'selected' : '' }}>Tanpa Keterangan</option>
                            </select></td>
                    </tr>
                @endforeach
                </table>

            </div>
            <div class="text-end">
                <br />
                    <a href="{{ url('/listadmin') }}" class="btn btn-primary">Back</a>
                    @foreach($absensi as $key)
                    <a href="{{ url('/adminabsen/hari/' . $absensi->tanggal) }}" class="btn btn-primary">Submit</a>
                    @endforeach
                </div>
            </div>
    </div>
</div>
</body>
</html>
