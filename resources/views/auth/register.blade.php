@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('regId') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">RegId</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="regId" value="{{ old('name') }}" required>

                                @if ($errors->has('regId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regId') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">firstName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="firstName" value="{{ old('name') }}" required>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('middleName') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">middleName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="middleName" value="{{ old('name') }}" required>

                                @if ($errors->has('middleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">lastName</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="lastName" value="{{ old('name') }}" required>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Birth Date</label>

                            <div class="col-md-6">
                                <input id="name" type="date" class="form-control" name="birthDate" value="{{ old('name') }}" required>

                                @if ($errors->has('birthDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nationality" value="{{ old('name') }}" required>

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                         <div class="form-group{{ $errors->has('college_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">college id</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="college_id" value="{{ old('name') }}" required>

                                @if ($errors->has('college_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">department_id</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="department_id" value="{{ old('name') }}" required>

                                @if ($errors->has('department_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">gender</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required>
                                    <option value='M'>male</option>
                                    <option value='F'>female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="role" value="{{ old('role') }}" required>
                                    <option value='1'>Student</option>
                                    <option value='2'>Teacher</option>
                                    <option value='3'>department head</option>
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
