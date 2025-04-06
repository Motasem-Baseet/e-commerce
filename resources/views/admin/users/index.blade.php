@extends('layouts.master')

@section('title', 'Data Tables')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Data Table</h2>
                <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.</p>
                <div class="row my-4">
                    <div class="col-md-12">
                     <!-- Button to trigger the Create User Modal -->
                        <button type="button" class="btn btn-outline-primary mb-2" id="createUserBtn">
                            
                        Create New User
                        </button>
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- Table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <!-- <th>Phone</th>
                                            <th>Department</th>
                                            <th>Company</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Date</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label"></label>
                                                </div>
                                        
                                            </td>
                                        </tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label"></label>
                                                </div>
                                            </td>
                                           
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modals')
    @endsection
    @include('admin.users.modals._createUsersModal')
    @include('admin.users.modals._editUsersModal')
    
    <input type="hidden" id="dataSrc" value="{{ route('user.datatable') }}">
    <input type="hidden" id="dataSrc1" value="{{ route('user.create') }}">
    <input type="hidden" id="dataSrc2" value="{{ route('user.edit', ['id' => ':id']) }}">
    <input type="hidden" id="userUpdateUrl" value="{{ url('admin/users') }}">

@push('scripts')


<script src="{{ asset('backend/users.js') }}"></script>
@endpush