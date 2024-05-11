@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Reject Quotation</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header">
            <span class="font-weight-bold">Reject Quotation</span>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Item Orders</th>
                        <th>Note</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="btn btn-warning rounded-pill px-4">
                                Pending
                            </div>
                            <div class="btn btn-success rounded-pill px-4">
                                Accept
                            </div>
                            <div class="btn btn-danger rounded-pill px-4">
                                Reject
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-danger text-center">No Data Records</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
