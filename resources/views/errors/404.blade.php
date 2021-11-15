<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
    {{-- <div class="container"> --}}
        <!-- Navbar Section -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand d-flex">
                    <div class="mob-category d-lg-none" onclick="openNav()">
                        <img src="{{ asset('images/category/category.png') }}" alt="ic-category">
                    </div>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo/gojek.png') }}" alt="logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="category dropdown">
                                <div class="dropdown-toggle" id="dropdown-category" data-toggle="dropdown">
                                    <img src="{{ asset('images/category/category.png') }}" alt="ic-category">
                                    <span>Category</span>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="item-title d-flex">
                                        <p>Category</p>
                                    </div>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Accessories
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Gadget
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Laptop / Desktop
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Monitor
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Network
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Peripheral Equipment
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Rack System
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Printer
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Storage External
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Storage Internal
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Voices
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        RAM
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Software
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        IT Services
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="{{ url('product/list') }}">
                                        Monitoring
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item mr-auto d-none d-sm-block d-md-block">
                            <form class="form-inline">
                                <div class="input-group">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Find Gadget">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </li>

                    </ul>
                </div>

                <div id="rightnav">
                    <div class="nav-item">
    
                        <div class="notification dropdown">
                            <i class="fas fa-bell dropdown-toggle" id="dropdown-notif" data-toggle="dropdown"></i>
                            <div class="dropdown-menu">
                                <div class="item-title d-flex">
                                    <p>Notification</p>
                                </div>
                                <a class="dropdown-item" href="{{ url('order/tracking') }}">
                                    <p class="title">
                                        <span>Order Arrived</span>
                                        <span>&bull;</span>
                                        <span>10.00</span>
                                    </p>
                                    <p class="content">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur.
                                    </p>
                                </a>
                                <a class="dropdown-item" href="{{ url('order/tracking') }}">
                                    <p class="title">
                                        <span>Order Completed</span>
                                        <span>&bull;</span>
                                        <span>13.25</span>
                                    </p>
                                    <p class="content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptate assumenda voluptas aut magni.
                                    </p>
                                </a>
                                <a class="dropdown-item" href="{{ url('order/tracking') }}">
                                    <p class="title">
                                        <span>Order Decline</span>
                                        <span>&bull;</span>
                                        <span>17.40</span>
                                    </p>
                                    <p class="content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptate assumenda voluptas aut magni.
                                    </p>
                                </a>
                            </div>
                        </div>
    
                        <div class="cart dropdown">
                            <i class="fas fa-shopping-cart dropdown-toggle" id="dropdown-cart" data-toggle="dropdown"></i>
                            <div class="dropdown-menu">
                                <div class="item-title d-flex">
                                    <p>Cart</p>
                                    <a href="../order/cart/index.html">
                                        <span>Detail</span> 
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                                <a class="dropdown-item" href="{{ url('order/cart') }}">
                                    <div class="media">
                                        <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="img-cart">
                                        <div class="media-body">
                                            <h5 class="mt-0">Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</h5>
                                            <p class="item-price">Rp 5.000.000</p>
                                            <p class="item-total">(Item 1x)</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="{{ url('order/cart') }}">
                                    <div class="media">
                                        <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="img-cart">
                                        <div class="media-body">
                                            <h5 class="mt-0">Macbook Pro 2020 - Space Grey </h5>
                                            <p class="item-price">Rp 20.000.000</p>
                                            <p class="item-total">(Item 1x)</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
    
                        <div class="separator"></div>
    
                        <div class="profile dropdown">
                            <div class="profile-trigger dropdown-toggle" id="dropdown-profile" data-toggle="dropdown">
                            <img src="{{ asset('images/icon/user.png') }}" alt="user">
                                <button class="btn btn-secondary" type="button">
                                    Jessy
                                </button>
                            </div>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../profile/main/index.html">
                                    Profile
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                                <a class="dropdown-item" href="../login2/login2.html">
                                    Log Out
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>

            <!-- Sidebar on Mobile Screen -->
            <div id="mySidenav" class="sidenav">
                <div class="sidebar-title">
                    <img src="{{ asset('images/category/category.png') }}" alt="category">
                    <h3>Category</h3>
                </div>
                <div class="divider"></div>
                <div class="menu-content">
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/accessories.png') }}" alt="ic-accessories">
                        </div>
                        <span>Accessories</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/gadget.png') }}" alt="ic-gadget">
                        </div>
                        <span>Gadget</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/laptop.png') }}" alt="ic-category">
                        </div>
                        <span>Laptop/Desktop</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/monitor.png') }}" alt="ic-category">
                        </div>
                        <span>Monitor</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/network.png') }}" alt="ic-category">
                        </div>
                        <span>Network</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/peripherals.png') }}" alt="ic-category">
                        </div>
                        <span>Peripheral Equipment</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/rack.png') }}" alt="ic-category">
                        </div>
                        <span>Rack System</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/printer.png') }}" alt="ic-category">
                        </div>
                        <span>Printer</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/storage-external.png') }}" alt="ic-category">
                        </div>
                        <span>Storage External</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/storage-internal.png') }}" alt="ic-category">
                        </div>
                        <span>Storage Internal</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/voices.png') }}" alt="ic-category">
                        </div>
                        <span>Voice</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/ram.png') }}" alt="ic-category">
                        </div>
                        <span>RAM</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/software.png') }}" alt="ic-category">
                        </div>
                        <span>Software</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/services.png') }}" alt="ic-services">
                        </div>
                        <span>IT Services</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <a href="../product/list/specific_category/index.html">
                        <div class="img-box">
                            <img src="{{ asset('images/category/monitoring.png') }}" alt="ic-monitoring">
                        </div>
                        <span>Monitoring</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- End Navbar Section -->
    {{-- </div> --}}
        <!-- Main Content -->
        <main class="content">
            <div class="main-area">
                <img src="{{ asset('images/condition/page-not-found.png') }}" alt="page-not-found">
                <h2>Error 404</h2>
                <p>Page Not Found</p>
            </div>
        </main>

        
    

    <footer>
        <p><strong>© 2020 Gojek</strong></p>
        <p>
            Gojek is a trademark of PT Aplikasi Karya Anak Bangsa. 
            Registered in the Directorate General of Intellectual Property of the Republic of Indonesia.
        </p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</body>

</html>