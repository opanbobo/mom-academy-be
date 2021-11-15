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
                        <li class="breadcrumb-item active">Gadget</li>
                    </div>
                    <h1>Category Gadget</h1>
                </div>
            </div>
        </section>

        <section class="categories">
            <div class="row">
                <div id="sidebar" class="col col-lg-3 col-md-4">
                    <div class="card sub-categories">
                        <div class="card-header">All Gadget</div>
                        <ul class="list-group list-group-flush">
                            <a href="#">
                                <li class="list-group-item">
                                    Asus
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Evercoss
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Galaxy
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Huawei
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    iPhone
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Lenovo
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    LG
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Motorola
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Nokia
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    OPPO
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Realme
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Samsung
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Vivo
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">
                                    Xiaomi
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-9 col-md-8 col-sm-12">
                    <div class="list-category">
                        <div class="row sort-title">
                            <div class="col col-6">
                                <p>Menampilkan 999 produk untuk "Gadget" </p>
                                <div class="form-group">
                                    <i class="fas fa-chevron-down"></i>
                                    <select class="form-control selection" id="menu-category" name="menu-category">
                                        <option></option>
                                        <option>Asus</option>
                                        <option>Evercoss</option>
                                        <option>Galaxy</option>
                                        <option>Huawei</option>
                                        <option>iPhone</option>
                                        <option>Lenovo</option>
                                        <option>LG</option>
                                        <option>Motorola</option>
                                        <option>Nokia</option>
                                        <option>OPPO</option>
                                        <option>Realme</option>
                                        <option>Samsung</option>
                                        <option>Vivo</option>
                                        <option>Xiaomi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-6">
                                <p id="srt">Sorting</p>
                                <div class="form-group">
                                    <i class="fas fa-chevron-down"></i>
                                    <select class="form-control selection" id="sorting" name="sorting">
                                        <option>Relevant</option>
                                        <option>Terendah</option>
                                        <option>Tertinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-12">
                                <p>Menampilkan 999 produk untuk "Gadget"</p>
                            </div>
                        </div>
                        <div class="row content-category">
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp1.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp2.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp3.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-xl-3 col-lg-4  col-6">
                                <div class="card">
                                    <a href="{{ url('product/detail') }}">
                                        <img src="{{ asset('images/product/all/hp4.png') }}" class="card-img-top" alt="samsung">
                                        <div class="card-body">
                                            <p class="card-text">Handphone Samsung Galaxy J8</p>
                                            <p class="card-text price">Rp 5.000.000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row load-more">
                            <div class="col col-12">
                                <div class="btn btn-success btn-block">Load More</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@stop