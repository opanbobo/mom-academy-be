@extends('layouts.app')
@section('content')
        <!-- End Navbar Section -->
        <!-- Main Content -->
        <main class="content">
            <div class="main-area">
                <img src="{{ asset('images/condition/empty-shopping-cart.png') }}" alt="page-not-found">
                <h2>Your Shopping Cart is empty</h2>
                {{-- <p>No Order Status</p> --}}
            </div>
        </main>
@stop