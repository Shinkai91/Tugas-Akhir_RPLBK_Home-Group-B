<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Welcome Page</title>
</head>

<body style="height:100%">
    @include('components.navbaradmin')

    <div class="container mt-5">
        <form method="POST" action="/admin/laptop">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" name="nama_laptop" class="form-control" placeholder="Nama Laptop" required>
                </div>
                <div class="col">
                    <input type="text" name="price" class="form-control" placeholder="Price" pattern="[0-9]+" title="Hanya boleh angka" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-custom1 mr-1 mt-2 mb-4"
                        style="width:70px;height:35px;">Add</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-12">
                <h1 class="heading mb-3">Data Laptop</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Laptop</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Note</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($data_laptop as $key => $data)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->nama_laptop }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->note }}</td>
                        <td>
                            <a class="btn btn-warning" href="/admin/laptop/edit/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" style="width:70px"
                                href="/admin/laptop/delete/{{ $data->id }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <script>
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                nav.classList.add("add-shadow");
            } else {
                nav.classList.remove("add-shadow");
            }
        });
    </script>
    @include('sweetalert::alert')
</body>

</html>
