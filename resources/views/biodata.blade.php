<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Halaman Biodata </h1>
    <table border="5">
        <th>no</th>
        <th>name</th>
        <th>kelas</th>
        </tr>
        <tr>
            @foreach($biodata as $bio)
             <td>{{$loop->iteration}}</td>
             <td>{{$bio['nama']}}</td>
             <td>{{$bio['kelas']}}</td>
        </tr> 
       @endforeach
</table>
</body>
</html>