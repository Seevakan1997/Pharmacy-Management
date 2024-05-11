@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Uploaded Prescriptions</span>
@endsection

@section('connect')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="font-weight-bold">Uploaded Prescriptions</span>
            <a href="{{ url('precribtion-list') }}" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-5 border">
                    <table class="mx-auto">
                        <tr>
                            <td colspan="5" class="text-center"><a href="" target="_blank"><img src=""
                                        alt="" width="250" height="250" class="borderd"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="" target="_blank"><img src="" alt="" width="120"
                                        height="110"></a>
                            </td>
                            <td>
                                <a href="" target="_blank"><img src="" alt="" width="120"
                                        height="110"></a>
                            </td>
                            <td>
                                <a href="" target="_blank"><img src="" alt="" width="120"
                                        height="110"></a>
                            </td>
                            <td>
                                <a href="" target="_blank"><img src="" alt="" width="120"
                                        height="110"></a>
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="col-12 col-lg-7">

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Drugs</th>
                                <th>Quanity</th>
                                <th>Amount</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td class="text-right"></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-danger text-center">No Data Records</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="text-center">
                                    Total
                                </td>
                                <td class="text-right">.00
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <form action="{{ url('quation-add') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-6 col-form-label text-right">Drug</label>
                            <div class="col-6">
                                <select class="form-control drug_name" name="drug_name">
                                    <option value="" selected disabled>-Select Drugs Name-</option>
                                    <option value=""></option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-6 col-form-label text-right">Quantity</label>
                            <div class="col-6">
                                <input type="number" class="form-control" id="inputPassword3" placeholder="Quantity"
                                    name="quanity">

                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="number" name="drug_price" id="price" class="form-control drug_price" hidden>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-controlr" value="" name="prescription_id" hidden>

                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" value="" name="user_id" hidden>
                        </div>

                        <input type="text" value="1" name="order" hidden>
                        <input type="text" value="}" name="id" hidden>

                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Add</button>
                        </div>

                        <hr>
                    </form>
                    <div class="text-right">
                        <button class="btn btn-primary">Send Quotation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
