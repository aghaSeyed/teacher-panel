@extends('layouts.login')

@section('content')

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}wrap-input100 validate-input" data-validate = "Enter username">

                        <input id="email" class="form-control input100" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}wrap-input100 validate-input" data-validate="Enter password">
                        <input id="password" class="form-control input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <div class="btn-outline-dark" style="text-align: center; ">
                    <a href="{{route('register')}}" class="lead">Register now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
