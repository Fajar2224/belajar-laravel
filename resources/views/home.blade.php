<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>
<body>
    <h1>Ini adalah halaman Home</h1>
    <h3>
        Selamat datang {{ $nama }},
anda berada di kelas {{ $kelas }},anda tinggal di {{ $alamat }}
    </h3>
<h3> Tim  {{ $nama }} adalah </h3>
<ol>@foreach($gank as $gk)
    <li>{{ $gk }}</li>
    @endforeach
</ol>
</body>
</html>