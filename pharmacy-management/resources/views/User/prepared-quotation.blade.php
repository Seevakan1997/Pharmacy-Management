@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Prepared Quotation</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="font-weight-bold">Prepared Quotation</span>
            <a href="{{ url('user-dashboard') }}" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Item Orders</th>
                        <th>Note</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="btn btn-warning rounded-pill px-4">Pending</div>
                        </td>
                        <td>
                            <a href="{{}}" class="btn btn-primary">View</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
