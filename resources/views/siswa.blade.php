<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    @include ('include.style')

</head>

<body>
    <div id="app">
        
        @include('include.sidebar')


    @include('include.script')
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width:125%;
            border-collapse: collapse;
        }
        th,
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #ddd;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: yellow;
        }
        .colored-button {
            background-color: #3498db; /* Warna biru asal */
            color: #fff; /* Warna teks putih */
            padding: 10px 20px; /* Spasi di dalam tombol */
            text-decoration: none; /* Menghapus garis bawah pada tautan */
            border-radius: 5px; /* Mengatur sudut melingkar pada tombol */
            display: inline-block; /* Mengubah tautan menjadi blok inline */
        }

        /* CSS Hover Style untuk efek interaktif saat mouse di atas tombol */
        .colored-button:hover {
            background-color: #2980b9; /* Warna biru lebih gelap saat dihover */
        }

        #button1 {
            background-color: green;
            color: white;
        }

        #button2 {
            background-color: blue;
            color: white;
        }
        #button3 {
            background-color: red;
            color: white;
        }

    </style>
    <title>Data Peserta</title>
</head>
<body>
    <h1> Data Peserta</h1>
    <hr>
    <p>
    <a href="/create-siswa" class="colored-button"> <i class="bi bi-person-fill-add"></i> Tambah Peserta</button></a>
    </p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Nis</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                <th>Hobi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i =1; @endphp 
    @foreach($datas as $data)
            <tr>
                <td>{{$i++}}.</td>
                <td>{{$data->name}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->kelas}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_handphone}}</td>
                <td>{{$data->hobi}}</td>
                <td>
                <a href="/edit/{{$data->id}}"><button type="button" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></button></a>
                <a href="/delete/{{$data->id}}"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button></a>
                </td>
               
            </tr>
@endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

