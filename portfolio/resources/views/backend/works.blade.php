@extends('backend.layouts.main')
@section('sitetitle', 'Works')
@section('main-container')
    <div class="content-body">
        <div class="mt-3 d-md-flex justify-content-md-end">
            <a href="{{ route('works_add.show') }}">
                <button class="btn me-md-2 w-20 rounded" style="background: #f25521; color: white;" type="button">Add
                    Works</button>
            </a>
        </div>
        <div class="row container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Works List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Project Type</th>
                                        <th scope="col">Project Link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($works as $work)
                                        <tr>
                                            <th scope="row" class="d-flex justify-content-center align-items-center">
                                                {{ $work->workid }}</th>
                                            <td>{{ $work->name }}</td>
                                            <td>{{ $work->type }}</td>
                                            <td><a href="{{ $work->link }}" target="_blank">Click Me to preview</a></td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('works_edit.show', ['id' => $work->workid]) }}"
                                                        class="btn btn-primary btn-sm d-flex align-items-center justify-content-center m-1"
                                                        style="width: 80px; height: 50px;">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('works.destroy', ['id' => $work->workid]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm d-flex align-items-center justify-content-center m-1"
                                                            style="width: 80px; height: 50px;">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
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
