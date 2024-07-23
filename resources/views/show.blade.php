<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Car</title>
</head>
<body>
    <div class="box">
        <p>Nama : {{ $car->nama }}</p>
        <p>Jenis : {{ $car->jenis }}</p>
        <p>Harga : {{  $car->harga }}</p>
        <p>Tanggal Pembuatan : {{ $car->tanggal_pembuatan }}</p>
    </div>
</body>
</html>
