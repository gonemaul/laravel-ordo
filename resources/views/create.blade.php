<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Car</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ Route('insert') }}" method="POST">
            @csrf
            <div class="nama">
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama">
            </div>
            @error('nama')
            <div class="error">{{ $message }}</div>
            @enderror
            <div class="jenis">
                <label for="jenis">Jenis : </label>
                <input type="text" id="jenis" name="jenis">
            </div>
            @error('jenis')
            <div class="error">{{ $message }}</div>
            @enderror
            <div class="harga">
                <label for="harga">Harga : </label>
                <input type="text" id="harga" name="harga">
            </div>
            @error('harga')
            <div class="error">{{ $message }}</div>
            @enderror
            <div class="tanggal_pembuatan">
                <label for="tanggal_pembuatan">Tanggal Pembuatan : </label>
                <input type="text" id="tanggal_pembuatan" name="tanggal_pembuatan">
            </div>
            @error('tanggal_pembuatan')
            <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Insert</button>
        </form>
    </div>
</body>
</html>
