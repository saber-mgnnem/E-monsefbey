@extends('layouts.front')

@section('title')
Category
@endsection

@section('content')
<div class="title-wrapper pt-30">
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h4 class="mb-0">
                <a href="{{url('/')}}"> Home</a>/
                <a href="{{url('cart')}}"> categories</a>

            </h4>
        </div>
    </div>

    <div class="cards-styles m-5">
        <div class="container-fluid"> <!-- Changed to fluid container for full width -->
            <div class="row">
                @if ($category->isNotEmpty())
                    @foreach($category as $category)
                        <div class="col-lg-3 col-md-4 col-sm-6"> <!-- Adjusted column sizes for better responsiveness -->
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="card-body d-flex align-items-start">
                                        <div>
                                            <h5 class="card-title">Name: {{ $category->name }}</h5>
                                            <p class="card-text">Description: {{ $category->description }}</p>
                                        </div>
                                        <img src="{{ asset('assets/uploads/category/'.$category->image)}}" alt="{{ $category->title }}" style="width: 100px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <a href="{{ url('category/'.$category->id) }}" class="btn btn-primary" style="margin-right: 10px;">View details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            No category exists. You can add from the top.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
