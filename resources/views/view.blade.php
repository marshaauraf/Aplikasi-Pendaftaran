<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 40000px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
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
    <a href="#" class="colored-button"> <i class="bi bi-person-fill-add"></i> Tambah Peserta</button></a>
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
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button id="button1">Create</button>
                    <button id="button2">Edit</button>
                    <button id="button3">Delete</button>
                </td>
        </tbody>
    </table>
</body>
</html>

    </div>
</div>
</body>
</html>
