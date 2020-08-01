@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Ticket') }}</div>
                <div class="row"></div>
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ref ID') }}</label>

                            <div class="col-md-5">

                                <input id="ref" type="text" class="form-control @error('ref') is-invalid @enderror" name="ref" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary view-ticket-guest">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                <div class="card-body">

                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Customer Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Problem Discription') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="pname" type="text" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" required autocomplete="name" autofocus> -->
                                <textarea class="form-control @error('pname') is-invalid @enderror" id="pname" rows="3" name="pname"
                                required autocomplete="pname" autofocus></textarea>

                                @error('pname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required >

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ticket Reply') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="pname" type="text" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" required autocomplete="name" autofocus> -->
                                <textarea class="form-control @error('pname') is-invalid @enderror" id="rname" rows="3" name="rname"
                                required autocomplete="rname" autofocus></textarea>

                                @error('pname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
