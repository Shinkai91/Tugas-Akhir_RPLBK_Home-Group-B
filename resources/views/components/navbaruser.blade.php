<nav class="navbar navbar-light sticky-top justify-content-between" id="navbar">
    <a class="navbar-brand font-weight-bold" style="color:#3C4858;">Rental <span class="text-info">Laptop</span></a>
    <form class="form-inline">
        <a class="nav-link" href="/user" style="font-size: 20px; color: #3C4858; margin-right: 15px">Home</a>
        <a class="nav-link" href="/user/order" style="font-size: 20px; color: #3C4858; margin-right: 15px">Order</a>
        <a class="nav-link" href="/user/history" style="font-size: 20px; color: #3C4858; margin-right: 15px">History</a>
        <a class="nav-link" href="/logout" style="font-size: 20px; color: #3C4858; margin-right: 15px">Logout</a>
        <a class="nav-link"
            style="color:#0e56b6; text-decoration:none; font-size: 20px">{{ session()->get('nama') }}</a>
    </form>
</nav>
