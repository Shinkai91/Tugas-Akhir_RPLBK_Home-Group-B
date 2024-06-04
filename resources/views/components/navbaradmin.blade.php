<nav class="navbar navbar-light sticky-top justify-content-between" id="navbar">
    <a class="navbar-brand font-weight-bold" style="color:#3C4858; font-size: 20px" data-aos="fade-right" data-aos-duration="3000">Rental
        <span class="text-info">Laptop</span></a>
    <form class="form-inline">
        <a class="nav-link" href="/admin" style="font-size: 17px; color: #3C4858; margin-right: 15px">Home</a>
        <a class="nav-link" href="/admin/user" style="font-size: 17px; color: #3C4858; margin-right: 15px">Data
            Users</a>
        <a class="nav-link" href="/admin/order" style="font-size: 17px; color: #3C4858; margin-right: 15px">Data
            Orders</a>
        <a class="nav-link" href="/admin/laptop" style="font-size: 17px; color: #3C4858; margin-right: 15px">Data
            Laptops</a>
        <a class="nav-link" href="/logout" style="font-size: 17px; color: #3C4858; margin-right: 15px">Logout</a>
        <a class="nav-link"
            style="color:#0e56b6; text-decoration:none; font-size: 17px">{{ session()->get('nama') }}</a>
    </form>
</nav>
