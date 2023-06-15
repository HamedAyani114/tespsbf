<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- cdn bootstrapt --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- table anggota, id, nama, alamat using bootstrapt --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Daftar Anggota</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>deskripsi</th>
                            <th>alamat</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            {{-- <th></th> --}}
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properti as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                {{-- <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                --}}
                                </form>
                            </td>
                            {{-- <td>
                                <form action="{{ route('anggota.destroy', $item->id) }}" method="POST"> --}}
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- button add --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('properti.create') }}" class="btn btn-primary">Tambah Anggota</a>
            </div>
        </div>
    </div>


    {{-- js bootstrapt --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- table anggota --}}