





@extends('Admin.app')

@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title">
                <h2>Orders</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="breadcrumb-wrapper">
                <nav aria-label="breadcrumb">
                    <a href="{{url('order-history')}}" class="btn btn-secondary float-right">Order History</a>

                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ========== tables-wrapper start ========== -->
<div class="tables-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">Orders Table</h6>
                <p class="text-sm mb-20">
                    Displaying a list of Orders with their basic information.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="lead-info">
                                    <h6>Orders Date</h6>
                                </th>
                                <th class="lead-info">
                                    <h6> Tranking Number</h6>
                                </th>
                                <th class="lead-email">
                                    <h6>Total Price</h6>
                                </th>
                                <th class="lead-phone">
                                    <h6>Status </h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                            <tr>
                                <td class="min-width">
                                    <a href="">
                                        <div class="lead">

                                                <p>{{ date('d-m-y',strtotime($item->created_at )) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="min-width">
                                    <p>{{ $item->trancking_no }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $item->total_price }}</p>
                                </td>
                                <td class="min-width">
                                   <p> {{ $item->status == '0'?'Pending' :  'Completed'}}</p>
                                </td>
                                <td>
                                    <div class="">
                                        <a href="{{url('admin/view-order/'.$item->id)}}"  class="btn btn-secondary ">view</a>

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






