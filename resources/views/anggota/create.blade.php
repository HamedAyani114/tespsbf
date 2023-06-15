<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    {{-- form nama, alamat using bootstrap--}}
    
    <div class="container">
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf
            <div class="mb-3 mt-5">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" aria-describedby="nama">
              {{-- <div id="nama" class="form-text"></div> --}}
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat">
            </div>

            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}


            {{-- submit button to store form--}}
            <button type="submit" class="btn btn-primary">Submit</button>

          </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>