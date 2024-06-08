
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilet Al</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .form-container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input:focus, .form-group select:focus {
            border-color: #4CAF50;
            outline: none;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .biletler-container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .bilet {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        .bilet:last-child {
            border-bottom: none;
        }
    </style>

</head>
<body>
    @if (@session()->has('success'))
        <div class="alert alert-success" role="alert" style="border: 3px solid green ; background-color:green; width: 30% ; color: black">
         {{session('success')}}
        </div>
    @endif 
   <center>
    <fieldset style="text-align: center; width: 30%">
        <legend>Bilet Kesme Formu</legend>        
        <form action="{{route('biletekle')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firma-adi">Firma Adı:</label>
                <input type="text" id="firma-adi" name="firma-adi" required>
            </div>
            <div class="form-group">
                <label for="kalkis-yeri">Kalkış Yeri:</label>
                <input type="text" id="kalkis-yeri" name="kalkis-yeri" required>
            </div>
            <div class="form-group">
                <label for="varis-yeri">Varış Yeri:</label>
                <input type="text" id="varis-yeri" name="varis-yeri" required>
            </div>
            <div class="form-group">
                <label for="kalkis-saati">Kalkış Saati:</label>
                <input type="time" id="kalkis-saati" name="kalkis-saati" required>
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyat:</label>
                <input type="number" id="fiyat" name="fiyat" required>
            </div>
            <div class="form-group">
                <button type="submit">Bileti Kes</button>
            </div>
        </form>
    </fieldset>
</center>
</>
<h1>Otobüs Seferleri</h1>
    <table>
        <thead>
            <tr>
                <th>Firma Adı</th>
                <th>Kalkış Yeri</th>
                <th>Varış Yeri</th>
                <th>Kalkış Saati</th>
                <th>Fiyat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Firma A</td>
                <td>İstanbul</td>
                <td>Ankara</td>
                <td>08:00</td>
                <td>100 TL</td>
            </tr>
            <tr>
                <td>Firma B</td>
                <td>İzmir</td>
                <td>Antalya</td>
                <td>09:30</td>
                <td>120 TL</td>
            </tr>
            <tr>
                <td>Firma C</td>
                <td>Bursa</td>
                <td>İzmir</td>
                <td>10:00</td>
                <td>90 TL</td>
            </tr>
            <tr>
                <td>Firma D</td>
                <td>Adana</td>
                <td>Gaziantep</td>
                <td>11:15</td>
                <td>70 TL</td>
            </tr>
            <tr>
                <td>Firma E</td>
                <td>Antalya</td>
                <td>İstanbul</td>
                <td>12:45</td>
                <td>150 TL</td>
            </tr>
        </tbody>
    </table>
</body>
</html>