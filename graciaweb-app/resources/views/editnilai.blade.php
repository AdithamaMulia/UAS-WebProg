<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 15px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background-color: #a4a4a4;">
    <div class="card">
        <h2 style="text-align: left;">Edit Nilai</h2>
        <form action="{{ url('/adminpage4') }}" method="get">
            <div class="form-group">
                <label for="nilaiUH1">Ulangan 1</label>
                <input type="text" id="nilaiUH1" name="nilaiUH1" style="width: 100%; max-width: 280px;" placeholder="Ulangan 1">
            </div>
            <div class="form-group">
                <label for="nilaiUH2">Ulangan 2</label>
                <input type="text" id="nilaiUH2" name="nilaiUH2" style="width: 100%; max-width: 280px;" placeholder="Ulangan 2">
            </div>
            <div class="form-group">
                <label for="nilaiUH3">Ulangan 3</label>
                <input type="text" id="nilaiUH3" name="nilaiUH3" style="width: 100%; max-width: 280px;" placeholder="Ulangan 3">
            </div>
            <div class="form-group">
                <label for="nilaiUH4">Ulangan 4</label>
                <input type="text" id="nilaiUH4" name="nilaiUH4" style="width: 100%; max-width: 280px;" placeholder="Ulangan 4">
            </div>
            <div class="form-group">
                <label for="nilaiUTS">UTS</label>
                <input type="text" id="nilaiUTS" name="nilaiUTS" style="width: 100%; max-width: 280px;" placeholder="UTS">
            </div>
            <div class="form-group">
                <label for="nilaiUAS">UAS</label>
                <input type="text" id="nilaiUAS" name="nilaiUAS" style="width: 100%; max-width: 280px;" placeholder="UAS">
            </div>
            <br />
            <div class="btn-container" style="text-align: left;">
                <button type="submit" class="btn">Update Nilai</button>
                <br />
                <br />
                <a href="{{ url('/adminpage4') }}" class="btn btn-primary" style="text-decoration: none;">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
