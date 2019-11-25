@extends('layouts.login')

@section('content')

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Registration
				</span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{route('register')}}">
                    {{ csrf_field() }}
                    <div class="form-group wrap-input100 validate-input" data-validate = "Enter name">
                        <input type="hidden" class="form-control" value="student" name="role">
                        <input type="hidden" class="form-control" value="20" name="score">
                        <input id="name" class="form-control input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="form-group wrap-input100 validate-input" data-validate = "Enter username">
                        <input id="family" class="form-control input100" type="text" name="family" placeholder="Family" value="{{ old('family') }}" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="form-group wrap-input100 validate-input" data-validate = "Enter username">
                        <input id="family" class="form-control input100" type="number" name="stdNo" placeholder="Student number" value="{{ old('stdNo') }}"  autofocus>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

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
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}wrap-input100 validate-input" data-validate="Enter password">

                        <input id="password-confirm" type="password" class="form-control input100" name="password_confirmation" placeholder="Confirm password" required>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group container-login100-form-btn m-t-32">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
