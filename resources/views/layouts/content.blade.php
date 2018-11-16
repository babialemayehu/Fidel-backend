@extends('layouts.app')
@section("content")
   
        <div class="ng-view" id=content >
            {!!'<script>'!!}
                {{"var today ="}}{!!$today!!}{!!';'!!}
                {{"var userId ="}}{{Auth::id()}}{!!';'!!}
            {!!'</script>'!!}
        </div>

        @if(Auth::user()->setup_state == 0)
            <div id="setup" class="modal fade" role="dialog" onSubmit="return changePassword(this)">
                <div class="modal-dialog ">

                    <!-- Modal content-->
                    <div class="modal-content">
                        
                        <div class="modal-body ">
                            <h4 class="modal-title" style="margin-bottom: 24px">Change password</h4>
                            <div class="container" style="width: 90%; margin: auto">
                                <form action="">
                                    <div class="alert fade in" hidden>
                                        <i class="fa" aria-hidden="true"></i> 
                                        <i></i>                
                                    </div>

                                    <div class="row" style="margin-bottom: 24px">
                                        <label for="password">New password</label>
                                        <input required min="6" max="50" type='password' autofocus class="form-control" name="password"/>
                                    </div>
                                    <div class="row" style="margin-bottom: 24px">
                                        <label for="confirm">Confirm password</label>
                                        <input required min="6" max="50" type='password' class="form-control" name="confirm"/>
                                    </div>
                            
                                    <div class="row" style="margin-bottom: 24px">
                                        <input type="submit" class="btn btn-success" style="float:right" value="Change"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <script>
            $(document).ready(function(){
                $('body').on('click',function(e){
                    if(e.target.classList[0] != 'navbar-toggle'&&e.target.classList[0] != 'dropdown-toggle')
                        $('#sm-collapse').removeClass('in');
                });
                $('#setup').modal({
                    backdrop: 'static', 
                    keyboard: false, 
                    show: true
                }); 
            });
        </script>
@endsection

@section('logout')
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <p class="text-center lg-hide" style="padding:1em"><span style="color:white"><i class="fa fa-sign-out"></i>Log out</span></p>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
@endsection
 