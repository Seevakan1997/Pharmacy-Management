@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / New Prescription</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            New Prescription
            <a href="{{ url('admin-dashboard') }}" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Note</th>
                    <th scope="col">Delivery address</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>
                    <tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-primary">Add medications</a>
                            <img src="https://sahussaintu.files.wordpress.com/2018/04/newgif5.gif" alt=""
                                width="60" height="60">
                            <a href="" class="btn btn-success">Update Medications</a>
                        </td>
                    </tr>
                    <td colspan="5" class="text-danger text-center font-weight-bold">No Data Record</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
