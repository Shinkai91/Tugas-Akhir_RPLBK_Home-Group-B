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

    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-12 mt-5">
                <h1 class="heading mb-3">Data User</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($data_user as $key => $data)
                    <tr class="text-center">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->nama_user }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>
                            <a class="btn btn-warning" href="/admin/user/edit/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" style="width:70px;"
                                href="/admin/user/delete/{{ $data->id }}">Hapus</a>
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
