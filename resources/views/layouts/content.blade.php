@extends('layouts.app')
@section("content")
   
        <div class="ng-view" id=content >
            {!!'<script>'!!}
                {{"var today ="}}{!!$today!!}{!!';'!!}
                {{"var userId ="}}{{Auth::id()}}{!!';'!!}
            {!!'</script>'!!}
        </div>
        
        <script>
            $(document).ready(function(){
                $('body').on('click',function(e){
                    if(e.target.classList[0] != 'navbar-toggle'&&e.target.classList[0] != 'dropdown-toggle')
                        $('#sm-collapse').removeClass('in');
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
 