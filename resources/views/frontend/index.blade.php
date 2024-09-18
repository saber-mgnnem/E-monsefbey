@extends('layouts.front')

@section('title')
Welcome to E-chop
@endsection

@section('content')

    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <h3>Featured Products</h3>
            <div class="row">
                <div class="owl-carousel products-carousel owl-theme">
                    @foreach($featured_products as $prod)
                    <div class="items position-relative">
                        <span class="discount_percentage">- {{ $prod->discount_percentage }}%</span>
                        <div class="card">
                            <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="" class="card-img-top">
                        </div>
                        <div class="card_body">
                            <h5>{{ $prod->name }}</h5>
                                <small class="float-start">{{ $prod->selling_price }} $</small>
                                <small class="float-end"><s>{{ $prod->original_price }} $</s></small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script>
        $('.products-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@stop

@stop

<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover; /* Adjusts the image to cover the entire area */
    }

    .card_body h5 {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }

    .discount_percentage {
        position: absolute;
        top: 10px;
        left: 10px;
        background: rgb(239, 133, 52); /* Red background for better visibility */
        color: #fff; /* White text color */
        padding: 5px 10px;
        border-radius: 50%;
        font-size: 14px;
        font-weight: bold;
        z-index: 10; /* Ensure it appears in front */
    }

    .items {
        position: relative; /* Ensure .items is positioned relatively to position the discount percentage */
        margin: 10px;
    }
</style>
