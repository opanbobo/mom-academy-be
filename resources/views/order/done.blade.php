@extends('layouts.app')
@section('content')
        <!-- End Navbar Section -->
        <!-- Main Content -->
        <main class="content">
            <div class="main-area">
                <img class="mr-3" src="{{ asset('images/condition/request-done.png') }}" alt="order-done">
                <h2>Thank You!</h2>
                <p>Please wait for your order.</p>

                <a href="{{ url('order/tracking') }}" class="btn btn-outline-success">Track Order</a>
            </div>
        </main>
@stop