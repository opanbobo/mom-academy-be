@extends('layouts.app')
@section('content')
        <!-- End Navbar Section -->
        <!-- Main Content -->
        <main class="content">
            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <h1>Check Out</h1>
                    </div>
                </div>
            </section>

            <section class="detail-order">
                <div class="row">
                    <div class="col col-md-8 col-12">
                        <div class="item-description">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <p>Office Location</p>
                                        <span data-toggle="modal" data-target="#location-edit">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="location">
                                        <p>
                                            Gojek Head Office. Pasaraya Blok M Gedung B Lt. 6, Jl. Iskandarsyah II No.7, RT.3/RW.1, 
                                            Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row product-detail">
                                        <div class="col col-12 product-info">
                                            <div class="row">
                                                <div class="col col-lg-2 col-3">
                                                    <div class="box-product">
                                                        <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="gadget">
                                                    </div>
                                                </div>
                                                <div class="col col-lg-10 col-9">
                                                    <p class="product-name">Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</p>
                                                    <p class="product-price">Rp 5.000.000</p>
                                                    <p class="product-total">Item 1x</p>
                                                </div>
                                                <div class="col col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, minima.
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, itaque.
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus illo quo minus!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row product-detail">
                                        <div class="col col-12 product-info">
                                            <div class="row">
                                                <div class="col col-lg-2 col-3">
                                                    <div class="box-product">
                                                        <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="laptop">
                                                    </div>
                                                </div>
                                                <div class="col col-lg-10 col-9">
                                                    <p class="product-name">Macbook Pro 2020 - Space Grey</p>
                                                    <p class="product-price">Rp 20.000.000</p>
                                                    <p class="product-total">Item 1x</p>
                                                </div>
                                                <div class="col col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-12">
                        <div class="card" id="proceed">
                            <div class="card-body">
                                <div class="approval">
                                    <p>Approval : </p>
                                    <p>VP</p>
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                    <div class="col col-4">
                                        <p>Subtotal</p>
                                        <p>2 Order</p>
                                    </div>
                                    <div class="col col-8">
                                        <p>Rp 25.000.000</p>
                                    </div>
                                </div>
                                <a href="{{ url('order/done')}}" class="btn btn-success">Request Order</a>
                                <div class="btn btn-outline-success" data-toggle="modal" data-target="#checkout-cancel">Cancel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="big-divider"></div>

            {{-- recomendation section --}}
            @include('layouts/recomendation')
            {{-- end recomendation section --}}
        </main>


        <div class="modal fade" id="checkout-cancel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Are you sure want to <strong>cancel</strong> this Request Order?</p>
                        <a href="{{ url('order/cancel') }}" class="btn btn-outline-success">Yes</a>
                        <div class="btn btn-success" data-dismiss="modal">No</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="location-edit" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Change Office Location</p>
                        <div class="form-group">
                            <i class="fas fa-chevron-down"></i>
                            <select class="form-control selection" id="office-location" name="office-location">
                                <option>Jakarta - Pasaraya</option>
                                <option>Surabaya - MERR</option>
                                <option>Yogyakarta - Sleman</option>
                            </select>
                        </div>
                        <div class="btn btn-success btn-block" data-dismiss="modal">Submit</div>
                    </div>
                </div>
            </div>
        </div>
@stop