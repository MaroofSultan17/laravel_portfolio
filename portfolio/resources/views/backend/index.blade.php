@extends('backend.layouts.main')
@section('sitetitle', 'Dasboard')
@section('main-container')
    <div class="content-body">
        <div class="mt-4 d-md-flex justify-content-md-center">
        </div>
        <div class="row container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Peoples contact us list</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr #</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $id = 1;
                                    ?>
                                    @foreach ($contactus as $ContactsData)
                                        <tr>
                                            <th>{{ $id++ }}</th>
                                            <th scope="row" class="d-flex justify-content-center align-items-center">
                                                {{ $ContactsData->id }}</th>
                                            <td>{{ $ContactsData->name }}</td>
                                            <td>{{ $ContactsData->email }}</td>
                                            <td>{{ $ContactsData->message }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
