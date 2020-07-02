@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center text-white align-self-center">
                <img src="{{asset('logo.png')}}" height="auto" width="500" class="img-fluid" alt="">
                <h6 class="font-weight-light text-white mt-0">
                        {!! strtoupper("Project Time Tracker") !!}
                </h6>
            </div>
            <div class="col-md-4 pt-5 mt-5 align-self-center text-center">
                <div class="card  shadow-sm" style="background: rgba(0,0,0,0.2)">
                    <i class="fa fa-user-circle text-white mt-3" style="font-size: 50px"></i>
                    <h6 class="text-white mt-2 mb-0 font-weight-bold">A &nbsp; R &nbsp; M &nbsp; S</h6>
                    <div class="card-body">
                        <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white bg-transparent" id="addon-wrapping"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" id="email" class="form-control  text-white bg-transparent @error('email') is-invalid @enderror" name="email" placeholder="Email Address"  required autocomplete="email" autofocus  value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-white bg-transparent" id="addon-wrapping"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input id="password" placeholder="Password" type="password" class="form-control  bg-transparent text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-block btn-outline-light">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-transparent text-white">
                        <small>&copy {{date('Y')}} PTT</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
