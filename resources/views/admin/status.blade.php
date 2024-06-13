@extends('layout.template')

@section('content')

<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="h4">Device Status</h1>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-muted"><h6>ID</h6></th>
                            <th class="text-muted"><h6>Name</h6></th>
                            <th class="text-muted"><h6>Status</h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy data for illustration purposes -->
                        <tr>
                            <td>1</td>
                            <td>Device A</td>
                            <td><span class="badge badge-success">On</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Device B</td>
                            <td><span class="badge badge-danger">Off</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Device C</td>
                            <td><span class="badge badge-success">On</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection