<nav class="navbar navbar-default navbar-static-top navbar-custom" >
    <div class="container" id="nav-container">
        <button type="button" class="navbar-toggle toggle-custom" data-toggle="collapse" data-target=".navbar-collapse" 
        style="border:none;margin: 0px; padding: 0px;color:white" >
            <span class="sr-only">toggle button</span>
            {{--  <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>   --}}
            <i class='fa fa-book fa-2x' style="padding-bottom:0px"></i><span class='caret' style="display:block;margin-left:15px"></span>
        </button>
        <a href="#notification" class="pull-right lg-hide" style="color:rgba(255,255,255,0.95);margin: 1em 1em 0px 0px;" >
            <i class="fa fa-bell" style="font-size: 1.6em;margin-top:-0.3em" >
                <sup class="counter badge" style='font-size:0.6em;margin-left:-12px;margin-top:-9px;' id='noti-counter' ></sup>
            </i>
        </a>
        <a href="#profile" class="lg-hide pull-right" style="color:rgba(255,255,255,0.95);margin: 1em 1em 0px 0px;" >
            <i class='fa fa-user' style="padding:0px;font-size:1.8em"></i>
        </a>
        <a href="#/" class="lg-hide pull-right" style="color:rgba(255,255,255,0.95);margin: 1em 1em 0px 0px;">
            <i class='fa fa-home' style="padding:0px;font-size:1.8em"></i>
        </a>
        <a href="#/" class="navbar-brand" style="color:white;font-size:1.6em;padding:6px" >
            <img src='/img/logo-inverse.png' style="width:25px;display:inline"> 
            <span>{{str_replace('S','',$websiteTitle)}}
            <span class="badge" style="margin: 0px 0px;font-size: 9px; margin-bottom: 10px; background: white; color:  rgba(27,157,116,0.8)">BETA</span>
        </a>
        <div class="navbar-collapse collapse collapse-custom" id='sm-collapse' >
            <ul class="nav navbar-nav navbar-right nav-custom">
                <li style="display:none"    ><form class="navbar-form navbar-right navbar-search-custom" action='' method='GET'>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" >
                            <span class="input-group-addon">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </li>
                <li id="nav-notification" class="dropdown custom-dropdown sm-hide">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown" style="padding-bottom:0.1em;color:rgba(255,255,255,0.95)" >
                        <i class="fa fa-bell" style="font-size:1.3em;">
                            <sup class=" counter badge small" style='margin-left:-10px;margin-top:-9px;' id='noti-counter'></sup>
                        </i>
                    </a>
                    <ul class="dropdown-menu" id='noti-dropdown'>
                        <li class="dropdown-header">Notifications</li>
                        <li class="divider" style="margin:0px"></li>
                        <div class="container">
                            <div class="alert fade in">
                                    <i class="fa" aria-hidden="true"></i> 
                                    <i></i>                
                            </div>
                        </div>
                        <li><a id=all-noti href="#notification" class="color"><center>See All</center></a></li>
                    </ul>
                </li>
                {{--  <li id=nav-home class="active" ><a href="#/"><i class='fa fa-home' style="padding:0px;font-size:1.2em"></i></a></li>  --}}
                {{--  <li id=nav-message ><a href="#message" >Message</a></li>  --}}
               
                @if($role ==  '3' || $role == '23')
                    <li id=nav-manege ><a href="#manege" >Manege</a></li>
                @endif
                {{--  <li id=nav-grade class="lg-hide" ><a href="#grade report">Grade report</a></p>  --}}

                @if($role == '1' || $role== '2' || $role=='12')
                   
                        <li id=nav-cource class="dropdown custom-dropdown sm-hide">
                            <a class="dropdown-toggle" href="" data-toggle="dropdown" style="color:rgba(255,255,255,0.95)" > Cources<span class='caret'></span></a>
                            <ul class="dropdown-menu" id='cources-dropdown'>
                                <li class="dropdown-header">Current Cources</li>
                                <li class="divider"></li>
                                @forelse($current_sessions as $c)
                                    <li><a href="#courses/{{$c->id}}">{{$c->course_name}}</a></li>
                                @empty
                                    <li class="text-center text-danger" ><p>No sessions</p></li>
                                @endforelse
                            </ul>
                        </li>
                        @forelse($current_sessions as $c)
                            <li class="lg-hide"><a href="#courses/{{$c->id}}">{{$c->course_name}}</a></li>
                        @empty
                            <li class="text-center text-danger lg-hide" ><p>No sessions</p></li>
                        @endforelse
                @endif
                <li class="dropdown custom-dropdown sm-hide" id="user-icon">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown" style="padding:2px;margin:0.1em auto 0 1.4em;" >
                        <img src="img/icons/avatar-{{(Auth::user()->gender== 'M')?'male':'female'}}.png" class="img-circle sm-hide user-circle" alt='user' 
                        style="max-width=45px;max-height: 45px;" />
                    </a>
                    <ul class="dropdown-menu" id='user-icon-dropdown'>
                       <li class="dropdown-header">
                            <img src="img/icons/avatar-{{(Auth::user()->gender== 'M')?'male':'female'}}.png" class="img-circle sm-hide user-circle" alt='user' 
                            style="max-width=100px;max-height:100px;" />
                        </li>
                        <b class='lead text-capitalize' >{{Auth::user()->firstName}} {{Auth::user()->middleName}}</b>
                        <p class='small text-capitalize'>{{Auth::user()->regId}}<br>
                        <i class='text-capitalize' >{{Auth::user()->department()->first()->name}}</i></p>
                        <a href="#profile" class="btn btn-success pull-left"  style="margin:1em"><i class="fa fa-user" ></i>Profile</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <button class="btn btn-default  pull-right" style="margin:1em"><i class="fa fa-sign-out"></i>Log out</button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        @if($role == '1')
                            <p class='text-center'><a href="#grade report">Grade report</a></p>
                        @endif
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>

</nav>
{!!"<script> var role = $role; </script>"!!}
<script>
    $(document).ready(function(){
        function defaultLodingStyle(){
            $('#loading-bar .peg').removeClass('lb-shadow-inverse');
            $('#loading-bar .bar').removeClass('load-inverse');
            $('#loading-bar .peg').addClass('lb-shadow');
            $('#loading-bar .bar').addClass('load-defalt');
        }
        function inverseLodingStyle(){
            $('#loading-bar .peg').removeClass('lb-shadow');
            $('#loading-bar .bar').removeClass('load-defalt');
            $('#loading-bar .peg').addClass('lb-shadow-inverse');
            $('#loading-bar .bar').addClass('load-inverse');
        }
        setInterval(function(){
            if($(window).scrollTop()>48)
                defaultLodingStyle();
            else
                inverseLodingStyle();
        },10);
        //notification
        var a = $('#noti-dropdown').find('.alert').hide();
        $('#nav-notification').on('click',function(){
            requestRenderRecentNoti(a);
        });
    
        setInterval(function(){
            $.get('/api/json/get/noti/unseen count')
            .done(function(responce){
                responce = (responce > 0)? responce: "";  
                $(".counter").text(''+responce); 
            });
        }, 1000); 
        
        
    });
</script>