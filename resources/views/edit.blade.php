<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  @include ('include.style')

  <style>
    /* Tambahkan gaya khusus di sini */
    .container {
      margin-top: 20px;
    }
    .form-container {
      max-width: 600px; /* Ubah sesuai kebutuhan */
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div id="app">
    @include('include.sidebar')
    @include('include.script')

    <div class="form-container">
      <h1>Edit Siswa</h1>

      <form action="/update-siswa" method="POST">
        @csrf
        <input type="text" class="form-control" id="exampleInputNama" name="id" value="{{$data->id}}" hidden>
        <div class="mb-3">
          <label for="exampleInputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputNama" name="name" value="{{$data->name}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputNis" class="form-label">NIS</label>
          <input type="number" class="form-control" id="exampleInputNis" name="nis" value="{{$data->nis}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputKelas" class="form-label">KELAS</label>
          <input type="text" class="form-control" id="exampleInputKelas" name="kelas" value="{{$data->kelas}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputAlamat" class="form-label">ALAMAT</label>
          <input type="text" class="form-control" id="exampleInputAlamat" name="alamat" value="{{$data->alamat}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputNoHandphone" class="form-label">NO HANDPHONE</label>
          <input type="number" class="form-control" id="exampleInputNoHandphone" name="no_handphone" value="{{$data->no_handphone}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputHobi" class="form-label">HOBI</label>
          <input type="text" class="form-control" id="exampleInputHobi" name="hobi" value="{{$data->hobi}}">
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        <a href="/dashboard" button type="button" class="btn btn-outline-primary"></button><i class="bi bi-box-arrow-left"></i></a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
