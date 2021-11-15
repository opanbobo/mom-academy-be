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
                        <li class="breadcrumb-item active">Library</li>
                    </div>
                    <h1>All Category</h1>
                </div>
            </div>
        </section>

        <section class="categories">
            <div class="row">
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/accessories.png') }}" alt="accessories">
                                <p>Accessories</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/gadget.png') }}" alt="gadget">
                                <p>Gadget</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/laptop.png') }}" alt="laptop">
                                <p>Laptop</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/monitor.png') }}" alt="monitor">
                                <p>Monitor</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/network.png') }}" alt="network">
                                <p>Network</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/equipment.png') }}" alt="equipment">
                                <p>Equipment</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/rack.png') }}" alt="rack">
                                <p>Rack System</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/printer.png') }}" alt="printer">
                                <p>Printer</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/storage-external.png') }}" alt="storage-external">
                                <p>Storage External</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/storage-internal.png') }}" alt="storage-internal">
                                <p>Storage Internal</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/voices.png') }}" alt="voices">
                                <p>Voices</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/ram.png') }}" alt="ram">
                                <p>RAM</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/software.png') }}" alt="software">
                                <p>Software</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/services.png') }}" alt="services">
                                <p>Services</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="{{ url('product/list') }}">
                        <div class="card category">
                            <div class="card-body">
                                <img src="{{ asset('images/category/monitoring.png') }}" alt="monitoring">
                                <p>Monitoring</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </main>
@stop