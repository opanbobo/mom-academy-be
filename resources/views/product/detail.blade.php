@extends('layouts.app')
@section('content')
        <main class="content">

            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <div class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('product/category') }}">All Category</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('product/list') }}">Gadget</a>
                            </li>
                            <li class="breadcrumb-item active">Samsung Galaxy J8</li>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-detail">
                <div class="row">
                    <div class="col col-md-5 col-12">
                        <div class="product-preview sp-wrap">
                            <a href="{{ asset('images/product/all/hp1.png') }}">
                                <img src="{{ asset('images/product/all/hp1.png') }}" alt="samsung-j8">
                            </a>
                            <a href="{{ asset('images/product/all/hp2.png') }}">
                                <img src="{{ asset('images/product/all/hp2.png') }}" alt="samsung-j8">
                            </a>
                            <a href="{{ asset('images/product/all/hp3.png') }}">
                                <img src="{{ asset('images/product/all/hp3.png') }}" alt="samsung-j8">
                            </a>
                            <a href="{{ asset('images/product/all/hp4.png') }}">
                                <img src="{{ asset('images/product/all/hp4.png') }}" alt="samsung-j8">
                            </a>
                            <a href="{{ asset('images/product/all/hp1.png') }}">
                                <img src="{{ asset('images/product/all/hp1.png') }}" alt="samsung-j8">
                            </a>
                        </div>                            
                    </div>

                    <div class="col col-md-7 col-12">
                        <div class="product-title">
                            <h1>Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</h1>
                        </div>
                        <div class="product-rating">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="info">
                                <span>3.5</span>
                                <span>&bull;</span>
                                <span>Terjual 67 Produk</span>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="product-price row">
                            <div class="col col-3">
                                <h1>Harga</h1>
                            </div>
                            <div class="col col-9">
                                <h1>Rp. 5.000.000,-</h1>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="product-color row">
                            <div class="col col-3">
                                <h1>Warna</h1>
                            </div>
                            <div class="col col-9">
                                <div class="form-group">
                                    <i class="fas fa-chevron-down"></i>
                                    <select class="form-control selection" name="select-color">
                                        <option>Hitam</option>
                                        <option>Putih</option>
                                        <option>Navy</option>
                                        <option>Maroon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="product-total row">
                            <div class="col col-3">
                                <h1>Jumlah</h1>
                            </div>
                            <div class="col col-9">
                                <div id="minus" class="btn btn-outline-success">-</div>
                                <span id="totalnum">1</span>
                                <div id="plus" class="btn btn-outline-success">+</div>
                            </div>
                        </div>
                        <div class="product-spesification">
                            <div class="card">
                                <div class="card-header">Specification</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col col-4">Merk</div>
                                        <div class="col col-8">: Samsung</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Ukuran Layar</div>
                                        <div class="col col-8">: 15.2 cm (6")</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Tipe Layar</div>
                                        <div class="col col-8">: OLED</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Resolusi</div>
                                        <div class="col col-8">: 1920 x 1080 pixels</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Layar Sentuh</div>
                                        <div class="col col-8">: Iya</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Kamera Depan</div>
                                        <div class="col col-8">: 8 MP</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-4">Kamera Belakang</div>
                                        <div class="col col-8">: 16 MP</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="big-divider"></div>

            {{-- recomendation section --}}
            @include('layouts/recomendation')
            {{-- end recomendation section --}}
            <section class="sticky-order">
                <nav class="navbar fixed-bottom">
                    <div class="left-side">
                        <p>Total (1 item)</p>
                        <p>Rp 5.000.000</p>
                    </div>
                    <div class="right-side">
                        <div type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-order">Order Now</div>
                        <div type="button" class="btn btn-outline-success">
                            <a href="{{ url('order/cart') }}">Add to Cart</a>
                        </div>
                    </div>
                </nav>
            </section>

            <!-- Modal Order -->
            <div class="modal fade" id="modal-order" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                                <img src="{{ asset('images/icon/close.png') }}" alt="close">
                            </button>
                            <h5 class="modal-title" id="exampleModalLongTitle">Purpose Order</h5>
                            <textarea class="form-control" id="message-text" placeholder="Text your purpose order here"></textarea>
                            <div type="button" class="btn btn-primary btn-success">Continue</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@stop