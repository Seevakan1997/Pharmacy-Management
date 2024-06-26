@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Prescription</span>
@endsection

@section('connect')
    <div class="col-8 mt-3 mx-auto">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Prescription</span>
                <a href="{{ url('user-dashboard') }}" class="btn btn-primary float-right">Back</a>
            </div>

            <div class="card-body">
                <form action="precription-store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ Auth()->user()->id }}" name="user_id" hidden>
                    </div>

                    <div class="form-group">
                        <label for="">Note</label>
                        <input type="text" class="form-control @error('note') is-invalid @enderror" name="note"
                            value="{{ old('note') }}">

                        @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Delivery Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="delivery_time"
                            class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time Slot') }}</label>

                        <div class="col-md-6">
                            <select id="delivery_time" class="form-control @error('delivery_time') is-invalid @enderror"
                                name="delivery_time" required>
                                <option value="">Select a time slot</option>
                                <option value="8AM-10AM">8:00 AM - 10:00 AM</option>
                                <option value="10AM-12PM">10:00 AM - 12:00 PM</option>
                                <option value="12PM-2PM">12:00 PM - 2:00 PM</option>
                                <option value="2PM-4PM">2:00 PM - 4:00 PM</option>
                                <option value="4PM-6PM">4:00 PM - 6:00 PM</option>
                            </select>

                            @error('delivery_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Upload Image - 01</label>
                                    <input type="file" class="form-control @error('image1') is-invalid @enderror"
                                        name="image1">
                                    @error('image1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Upload Image - 02</label>
                                    <input type="file" class="form-control @error('image2') is-invalid @enderror"
                                        name="image2">
                                    @error('image2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Upload Image - 03</label>
                                    <input type="file" class="form-control @error('image3') is-invalid @enderror"
                                        name="image3">
                                    @error('image3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="">Upload Image - 04</label>
                                    <input type="file" class="form-control @error('image4') is-invalid @enderror"
                                        name="image4">
                                    @error('image4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="">Upload Image - 05</label>
                                    <input type="file" class="form-control @error('image5') is-invalid @enderror"
                                        name="image5">
                                    @error('image5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">submit</button>
                            <button type="reset" class="btn btn-danger">reset</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
