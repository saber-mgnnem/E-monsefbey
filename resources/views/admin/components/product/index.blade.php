




@extends('Admin.app')

@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title">
                <h2>Products</h2>
            </div>
        </div>

    </div>
</div>

<!-- ========== tables-wrapper start ========== -->
<div class="tables-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">Products Table</h6>
                <p class="text-sm mb-20">
                    Displaying a list of Products with their basic information.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th class="lead-info">
                                    <h6> Name</h6>
                                </th>
                                <th class="lead-email">
                                    <h6>selling Price</h6>
                                </th>
                                <th class="lead-phone">
                                    <h6>Image </h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $item)
                            <tr>

                                <td class="min-width">
                                    <p>{{ $item->name }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{$item->selling_price }}</p>
                                </td>
                                <td class="min-width">
                                    <img src="{{ asset('/assets/uploads/product/'.$item->image)}}" style="width: 50px !important; margin-left: 2.5rem !important;">
                                </td>
                                <td>
                                    <div class="">
                                        <a href="{{url('edit-product/'.$item->id)}}"  class="btn btn-secondary ">Edit</a>
                                        <a href="{{url('delete-product/'.$item->id)}}"  class="btn btn-danger btn-sm">Delete</a>

                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
</div>

@endsection


