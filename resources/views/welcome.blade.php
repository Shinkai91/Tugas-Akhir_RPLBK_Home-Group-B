<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Welcome Page</title>
</head>

<body style="height:100%">
    <nav class="navbar navbar-light sticky-top justify-content-between" id="navbar">
        <a class="navbar-brand font-weight-bold" style="color:#3C4858;">Rental <span class="text-info">Laptop</span></a>
        <form class="form-inline">
            <a href="/admin/login"><button type="button" class="btn btn-primary btn-custom1 mr-1">Admin</button></a>
            <a href="/user/login"><button type="button" class="btn btn-primary btn-custom1 mr-1">User</button></a>
            <a href="/user/register"><button type="button" class="btn btn-primary btn-custom2">Register</button></a>
        </form>
    </nav>
    
    @include('components.home')

    <script>
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                nav.classList.add("add-shadow");
            } else {
                nav.classList.remove("add-shadow");
            }
        });
        AOS.init();
    </script>
    @include('sweetalert::alert')
</body>

</html>
