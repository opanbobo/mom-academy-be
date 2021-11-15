@extends('layouts.app')
@section('content')
        <!-- End Navbar Section -->
        <!-- Main Content -->
        <main class="content">
            <section class="title">
                <div class="card">
                    <div class="card-body">
                        <h1>Status Order</h1>
                    </div>
                </div>
            </section>

            <section class="detail-order">
                <div class="card">
                    <div class="card-body">
                        <div class="section item-info">
                            <div class="row">
                                <div id="m-id" class="col col-12 d-sm-none">
                                    <div class="order">
                                        <p>ID: <span id="order-id">100018990</span></p>
                                    </div>
                                    <div class="status">
                                        <p><span id="status-id">Admin Confirmation</span></p>
                                    </div>
                                </div>
                                <div class="col col-12 col-sm-8">
                                    <div class="media">
                                        <img class="mr-3" src="{{ asset('images/product/recommendation/samsung.png') }}" alt="samsung">
                                        <div class="media-body">
                                            <h5 class="mt-0">Samsung Galaxy J8 SM-J810FZKATUR 32GB Black</h5>
                                            <p>Rp 5.000.000</p>
                                            <p>Item 1x</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-4 d-none d-sm-block">
                                    <div class="order">
                                        <p>Order ID: <span id="order-id">100018990</span></p>
                                    </div>
                                    <div class="status">
                                        <p>Status: <span id="status-id">Admin Confirmation</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="section track-order">
                            <ul id="track-list" class="text-center row">
                                <li class="track active step-1 col-2">
                                    <img src="{{ asset('images/icon/status_order/active/request.png') }}" alt="request">
                                    <div class="description">
                                        <p>Order Request</p>
                                        <p>2-9-2020 11:20</p>
                                    </div>
                                </li>
                                <li class="track active step-2 col-2">
                                    <img src="{{ asset('images/icon/status_order/active/confirm.png') }}" alt="confirm">
                                    <div class="description">
                                        <p>Admin Confirmation</p>
                                        <p>2-9-2020 14:50</p>
                                    </div>
                                </li>
                                <li class="track step-3 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/approval.png') }}" alt="approval">
                                    <div class="description">
                                        <p>Leader Approval</p>
                                    </div>
                                </li>
                                <li class="track step-4 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/prepare.png') }}" alt="prepare">
                                    <div class="description">
                                        <p>Preparing Asset</p>
                                    </div>
                                </li>
                                <li class="track step-5 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/pickup.png') }}" alt="pickup">
                                    <div class="description">
                                        <p>Pick Up</p>
                                    </div>
                                </li>
                                <li class="track step-6 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/completed.png') }}" alt="completed">
                                    <div class="description">
                                        <p>Order Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="divider"></div>
                        <div id="detail-status" class="section detail-status collapse">
                            <p class="order-title-status">Detail Status</p>
                            <div class="row">
                                <div class="col col-md-3 col-sm-4 col-6">
                                    <p>Rabu, 2 - 9 - 2020</p>
                                    <p>14.00 WIB</p>
                                </div>
                                <div class="col col-md-9 col-sm-8 col-6">
                                    <p>Admin Confirmation [a/n Joseph Kurnia]</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-3 col-sm-4 col-6">
                                    <p>Rabu, 2 - 9 - 2020</p>
                                    <p>12.40 WIB</p>
                                </div>
                                <div class="col col-md-9 col-sm-8 col-6">
                                    <p>Order Request [a/n Jessy Mary]</p>
                                </div>
                            </div>
                        </div>

                        <div class="trigger-status">
                            <div class="btn btn-outline-secondary" data-toggle="collapse" data-target="#detail-status">
                                Show Detail
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="section item-info">
                            <div class="row">
                                <div id="m-id" class="col col-12 d-sm-none">
                                    <div class="order">
                                        <p>ID: <span id="order-id">100018990</span></p>
                                    </div>
                                    <div class="status">
                                        <p><span id="status-id">Admin Confirmation</span></p>
                                    </div>
                                </div>
                                <div class="col col-12 col-sm-8">
                                    <div class="media">
                                        <img class="mr-3" src="{{ asset('images/product/recommendation/macbook.png') }}" alt="macbook">
                                        <div class="media-body">
                                            <h5 class="mt-0">Macbook Pro 2020 - Space Grey </h5>
                                            <p>Rp 20.000.000</p>
                                            <p>Item 1x</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-4 d-none d-sm-block">
                                    <div class="order">
                                        <p>Order ID: <span id="order-id">100015771</span></p>
                                    </div>
                                    <div class="status">
                                        <p>Status: <span id="status-id">Leader Approval</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="section track-order">
                            <ul id="track-list" class="text-center row">
                                <li class="track active step-1 col-2">
                                    <img src="{{ asset('images/icon/status_order/active/request.png') }}" alt="request">
                                    <div class="description">
                                        <p>Order Request</p>
                                        <p>2-9-2020 11:20</p>
                                    </div>
                                </li>
                                <li class="track active step-2 col-2">
                                    <img src="{{ asset('images/icon/status_order/active/confirm.png') }}" alt="confirm">
                                    <div class="description">
                                        <p>Admin Confirmation</p>
                                        <p>2-9-2020 14:50</p>
                                    </div>
                                </li>
                                <li class="track step-3 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/approval.png') }}" alt="approval">
                                    <div class="description">
                                        <p>Leader Approval</p>
                                    </div>
                                </li>
                                <li class="track step-4 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/prepare.png') }}" alt="prepare">
                                    <div class="description">
                                        <p>Preparing Asset</p>
                                    </div>
                                </li>
                                <li class="track step-5 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/pickup.png') }}" alt="pickup">
                                    <div class="description">
                                        <p>Pick Up</p>
                                    </div>
                                </li>
                                <li class="track step-6 col-2">
                                    <img src="{{ asset('images/icon/status_order/deactive/completed.png') }}" alt="completed">
                                    <div class="description">
                                        <p>Order Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="divider"></div>
                        <div id="detail-status-macbook" class="section detail-status collapse">
                            <p class="order-title-status">Detail Status</p>
                            <div class="row">
                                <div class="col col-md-3 col-sm-4 col-6">
                                    <p>Rabu, 2 - 9 - 2020</p>
                                    <p>14.00 WIB</p>
                                </div>
                                <div class="col col-md-9 col-sm-8 col-6">
                                    <p>Admin Confirmation [a/n Ahmad Bejo]</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-3 col-sm-4 col-6">
                                    <p>Rabu, 2 - 9 - 2020</p>
                                    <p>12.40 WIB</p>
                                </div>
                                <div class="col col-md-9 col-sm-8 col-6">
                                    <p>Order Request [a/n Martin Sinaga]</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-3 col-sm-4 col-6">
                                    <p>Kamis, 2 - 9 - 2020</p>
                                    <p>09.40 WIB</p>
                                </div>
                                <div class="col col-md-9 col-sm-8 col-6">
                                    <p>Item Approval [a/n Reza Maulana]</p>
                                </div>
                            </div>
                        </div>

                        <div class="trigger-status">
                            <div class="btn btn-outline-secondary" data-toggle="collapse" data-target="#detail-status-macbook">
                                Show Detail
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>

@stop