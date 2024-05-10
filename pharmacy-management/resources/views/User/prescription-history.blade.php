@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Prescription History</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="font-weight-bold">Prescription History</span>
            <a href="{{ url('user-dashboard') }}" class="btn btn-primary">Back</a>
        </div>


        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Note</th>
                        <th>Delivery Address</th>
                        <th colspan="5" class="text-center">Images</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sample Note 1</td>
                        <td>Sample Address 1</td>
                        <td class="text-center"><img src="" alt="Image 1" width="50px" height="50px"
                                class="rounded-circle"></td>
                        <td class="text-center"><img src="" alt="Image 2" width="50px" height="50px"
                                class="rounded-circle"></td>
                        <td class="text-center"><img src="" alt="Image 3" width="50px" height="50px"
                                class="rounded-circle"></td>
                        <td class="text-center"><img src="" alt="Image 4" width="50px" height="50px"
                                class="rounded-circle"></td>
                        <td class="text-center"><img src="" alt="Image 5" width="50px" height="50px"
                                class="rounded-circle"></td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
