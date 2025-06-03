@extends('website.master')

@section('body')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Thank You</h1>
                    <p class="text-center text-success">{{session('message')}}</p>
                    {{-- <p class="text-center text-success"> {{Cart::total()}} </p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->



    @include('website.includes')
@endsection
