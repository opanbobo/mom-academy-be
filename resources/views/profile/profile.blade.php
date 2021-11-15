@extends('layouts.app')
@section('content')
        <main class="content">
            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <h1>Profile</h1>
                    </div>
                </div>
            </section>

            <section class="profile">
                <div class="row">
                    <div class="col col-lg-4 col-md-4">
                        <div class="card side-profile">
                            <div class="card-header">
                                <a href="{{ url('profile/edit') }}" class="edit-profile">
                                    <i class="far fa-edit"></i>
                                    <span>Edit</span>
                                </a>
                                <div class="media">
                                    <img src="{{ asset('images/icon/user.png') }}" alt="img-profile">
                                    <div class="media-body">
                                        <h5>Jessy Milenia</h5>
                                        <div class="job">UX Researcher</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body biodata">
                                <div class="bio">
                                    <p>Email</p>
                                    <p>jessy.milenia@mail.com</p>
                                </div>
                                <div class="bio">
                                    <p>Division / Business Section</p>
                                    <p>Digital Product</p>
                                </div>
                                <div class="bio">
                                    <p>Company / Entity</p>
                                    <p>Aplikasi Karya Anak Bangsa</p>
                                </div>
                                <div class="bio">
                                    <p>Status Employee</p>
                                    <p>Permanent</p>
                                </div>
                                <div class="more-info collapse" id="more-info">
                                    <div class="bio">
                                        <p>Office Location</p>
                                        <p>Jakarta - Pasaraya</p>
                                    </div>
                                    <div class="bio">
                                        <p>Position</p>
                                        <p>Staff</p>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="bio">
                                        <p>SVP E-mail</p>
                                        <p> - </p>
                                    </div>
                                    <div class="bio">
                                        <p>Manager E-mail</p>
                                        <p> - </p>
                                    </div>
                                    <div class="bio">
                                        <p>VP E-mail</p>
                                        <p> - </p>
                                    </div>
                                    <div class="bio">
                                        <p>Supervisor E-mail</p>
                                        <p> - </p>
                                    </div>

                                </div>
                                <div class="btn btn-outline-secondary" data-toggle="collapse" data-target="#more-info">Show Detail</div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-8 col-md-8 col-sm-12 order-status">
                        <div class="card tab-order">
                            <div class="card-body">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <p>Your Order</p>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-request-tab" data-toggle="pill" href="#pills-request" role="tab">Request</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-complete-tab" data-toggle="pill" href="#pills-complete" role="tab">Complete</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-decline-tab" data-toggle="pill" href="#pills-decline" role="tab">Decline</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Order Content Info -->
                        <div class="tab-content" id="order-status-content">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
                                <div class="order-info">
                                    <div class="card track-info">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="item-order">
                                                <div class="media-body">
                                                    <h5>Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</h5>
                                                    <p class="price">Rp 5.000.000</p>
                                                    <p class="total">Item 1x</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dicta!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card track-info">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="item-order">
                                                <div class="media-body">
                                                    <h5>Macbook Pro 2020 - Space Grey </h5>
                                                    <p class="price">Rp 20.000.000</p>
                                                    <p class="total">Item 1x</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dicta!
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-request" role="tabpanel">
                                <div class="order-info">
                                    <div class="card track-info">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{ asset('images/product/recommendation/macbook.png') }}" alt="item-order">
                                                <div class="media-body">
                                                    <h5>Macbook Pro 2020 - Space Grey </h5>
                                                    <p class="price">Rp 20.000.000</p>
                                                    <p class="total">Item 1x</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dicta!
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-complete" role="tabpanel">
                                <div class="order-info">
                                    <div class="card track-info">
                                        <div class="card-body">
                                            <div class="media">
                                                <img src="{{ asset('images/product/recommendation/samsung.png') }}" alt="item-order">
                                                <div class="media-body">
                                                    <h5>Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</h5>
                                                    <p class="price">Rp 5.000.000</p>
                                                    <p class="total">Item 1x</p>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dicta!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-decline" role="tabpanel">
                                <div class="order-info empty">
                                    <img src="{{ asset('images/condition/empty-shopping-cart.png') }}" alt="item-order">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

        </main>

@stop