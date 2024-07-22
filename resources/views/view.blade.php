<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>

    <style>
        .container{
            margin-top: 3rem;
            padding: 1rem;
            display: flex;
            justify-content: center;
        }
        .angka2 {
            margin-bottom: 0.5rem
        }
        form .error{
            color: red;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" style="width:50%">
            <div class="angka1">
                <label for="angka1">Angka 1 : </label>
                <input type="text" id="angka1" name="angka1">
            </div>
            @error('angka1')
            <div class="error">{{ $message }}</div>
            @enderror
            <div class="angka2">
                <label for="angka2">Angka 2 : </label>
                <input type="text" id="angka2" name="angka2">
            </div>
            @error('angka2')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Tambah</button>
        </form>

        <h1>Hasil = {{ $hasil }}</h1>
    </div>
</body>
</html>
