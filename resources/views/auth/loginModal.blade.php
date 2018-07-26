 <div class="remodal text-left" id=login-modal data-remodal-id="login" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <div class="modal-header">
                    <h4 class="modal-title" >Login
                    <button data-remodal-action="close" class="remodal-close pull-right" aria-label="Close"></button>
                    </h4>
                </div>
                <div class="modal-body">
                    @if ($errors->has('regId'))
                        <div class="alert alert-danger">
                            <span class="help-block">
                                <i class='small'><span style="">&times;</span>{{ $errors->first('regId') }}</i>
                            </span>
                        </div>
                    @endif
                    <form class="form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('regId')|| $errors->has('password') ? ' has-error' : '' }}">
                            <label for="regId" class="label">Id or Username</label>
                                <input id="regId" type="text" class="form-control" name="regId" value="{{ old('regId') }}" required autofocus>
                        </div>

                        <div class="form-group{{ $errors->has('password')|| $errors->has('regId') ? ' has-error' : '' }}">
                            <label for="password" class="label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password') )
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    
                </div>
                <div class="modal-footer">
                        <input type='submit' class="btn btn-success" value="Log in" />
                    </form>
                        <button type="button" class="btn btn-default" data-remodal-action="cancel">Close</button>
                    </form>
                </div>
</div>
@if ($errors->has('regId') || $errors->has('password'))
    <script>
        var hasError = 1;
    </script>
@else
    <script>
        var hasError = 0;
    </script>
@endif