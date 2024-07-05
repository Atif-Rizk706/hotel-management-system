@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Add Booking</h3> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lscrfg-12">
                    <form action="{{route("save_booking")}}" method="post">
                        @csrf
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Booking ID</label>
                                    <input class="form-control" type="text" value="BKG-0001"> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select class="form-control" id="sel1"  name="name" value="{{ old('name') }}">
                                        <option disabled selected>--Select name--</option>
                                        <option>Jennifer Robinson</option>
                                        <option>Terry Baker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    @error('room_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select class="form-control" id="sel2" name="room_type" value="{{ old('room_type') }}">
                                        <option>Select</option>
                                        <option>Single</option>
                                        <option>Double</option>
                                        <option>Quad</option>
                                        <option>King</option>
                                        <option>Suite</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Members</label>
                                    @error('total_member')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select class="form-control" id="sel3" name="total_member"  value="{{ old('total_member') }}">
                                        <option>Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="cal-icon">
                                        @error('date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" class="form-control datetimepicker" name="date" value="{{ old('date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    @error('time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="time" value="{{ old('time') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label>Arrival Date</label>
                                    @error('arrival_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="arrival_date" value="{{ old('arrival_date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label>Depature Date</label>
                                    @error('depature_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="depature_date" value="{{ old('depature_date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    @error('email_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" id="usr" name="email_id" value="{{ old('email_id') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="photo">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Message</label>
                                    @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea class="form-control" rows="5" id="comment" name="message" value="{{ old('message') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{--<script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/popper.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/moment.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/script.js')}}"></script>--}}
    <script src="{{ \Illuminate\Support\Facades\URL::to('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script>
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'

            });
        });
    </script>

@endsection
