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
    <br>
    <h3>Manufacture</h3>
    <p>Nama : {{ $car->manufacture->nama }}</p>
    <p>Alamat : {{ $car->manufacture->alamat }}</p>
    <br>
    <h3>Review</h3>
    <hr>
    @foreach ($car->reviews as $item)
        <p>Nilai : {{ $item->nilai }}</p>
        <p>Nama : {{ $item->nama }}</p>
        <p>Isi : {{ $item->isi }}</p>
        <hr>
    @endforeach
    <br>
    <h3>Feature</h3>
    @foreach ($car->features as $item)
        <p>{{ $item->nama }}</p>
    @endforeach
</body>
</html>
