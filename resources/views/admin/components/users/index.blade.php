


@extends('Admin.app')

@section('content')
<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title">
                <h2>Users</h2>
            </div>
        </div>

    </div>
</div>

<!-- ========== tables-wrapper start ========== -->
<div class="tables-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">Users Table</h6>
                <p class="text-sm mb-20">
                    Displaying a list of users with their basic information.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="lead-info">
                                    <h6>Profile</h6>
                                </th>
                                <th class="lead-info">
                                    <h6>User name</h6>
                                </th>
                                <th class="lead-email">
                                    <h6>Email</h6>
                                </th>
                                <th class="lead-phone">
                                    <h6>Phone Number</h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="min-width">
                                    <a href="">
                                        <div class="lead">
                                            <div class="lead-image">

                                                <img src="{{ asset('assets/images/defaultimage.jpg') }}" >                                            </div>
                                            <div class="lead-text">
                                                <p>{{ $user->id }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->email }}</p>
                                </td>
                                <td class="min-width">
                                    <p>{{ $user->phone }}</p>
                                </td>
                                <td>
                                    <div class="">
                                        <a href="{{url('view-users/'.$user->id)}}"  class="btn btn-secondary ">view</a>

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

<script>
    function confirmDelete(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this user!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + userId).submit();
            }
        });
    }
    function confirmDeleteAll() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this action! All users will be deleted.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete all users!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-all-form').submit();
            }
        })
    }
</script>
@endsection


