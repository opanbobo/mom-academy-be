@extends('layouts.app')
@section('content')
        <!-- End Navbar Section -->
        <!-- Main Content -->
        <main class="content">
            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <h1>Order Cart</h1>
                    </div>
                </div>
            </section>

            <section class="detail-order">
                <div class="row">
                    <div class="col col-md-8 col-12">
                        <div class="item-description">
                            <div class="card">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="allproducts" checked>
                                        <label class="custom-control-label" for="allproducts"></label>
                                    </div>
                                    <p>Check All Products</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row product-detail">
                                        <div class="col col-md-9 col-12 product-info">
                                            <div class="row">
                                                <div class="col col-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="first-product" name="first-product" checked>
                                                        <label class="custom-control-label" for="first-product"></label>
                                                    </div>
                                                    <div class="box-product">
                                                        <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="gadget">
                                                    </div>
                                                </div>
                                                <div class="col col-9">
                                                    <p class="product-name">Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</p>
                                                    <p class="product-price">Rp 5.000.000</p>
                                                    <div id="m-total">
                                                        <div id="minus" class="btn btn-outline-success">-</div>
                                                        <span id="totalnum">1</span>
                                                        <div id="plus" class="btn btn-outline-success">+</div>
                                                        <div id="delete">
                                                            <i class="fas fa-trash"></i>
                                                            Delete
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, minima.
                                                                <span id="edit-description">edit</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-3 col-12 total-product">
                                            <div id="minus" class="btn btn-outline-success">-</div>
                                            <span id="totalnum" class="samsung">1</span>
                                            <div id="plus" class="btn btn-outline-success">+</div>
                                            <div id="delete">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="row product-detail">
                                        <div class="col col-md-9 col-12 product-info">
                                            <div class="row">
                                                <div class="col col-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="second-product" name="second-product" checked>
                                                        <label class="custom-control-label" for="second-product"></label>
                                                    </div>
                                                    <div class="box-product">
                                                        <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="gadget">
                                                        {{-- <img src="../../../assets/image/product/recommendation/macbook.png" alt="gadget"> --}}
                                                    </div>
                                                </div>
                                                <div class="col col-9">
                                                    <p class="product-name">Macbook Pro 2020 - Space Grey</p>
                                                    <p class="product-price">Rp 20.000.000</p>
                                                    <div id="m-total">
                                                        <div id="minus" class="btn btn-outline-success">-</div>
                                                        <span id="totalnum">1</span>
                                                        <div id="plus" class="btn btn-outline-success">+</div>
                                                        <div id="delete">
                                                            <i class="fas fa-trash"></i>
                                                            Delete
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, minima.
                                                                <span id="edit-description">edit</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-3 col-12 total-product">
                                            <div id="minus" class="btn btn-outline-success">-</div>
                                            <span id="totalnum">1</span>
                                            <div id="plus" class="btn btn-outline-success">+</div>
                                            <div id="delete">
                                                <i class="fas fa-trash"></i>
                                                Delete
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
                                <div class="row">
                                    <div class="col col-4">
                                        <p>Subtotal</p>
                                        <p>2 Order</p>
                                    </div>
                                    <div class="col col-8">
                                        <p>Rp 25.000.000</p>
                                    </div>
                                </div>
                                <a href="{{ url('order/checkout') }}" class="btn btn-success">Proceed to Checkout</a>
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

@stop