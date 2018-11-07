@extends('layouts.login')
@section("content")
    <div id="login" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption" style="margin-top: -5%">
                    <h1 class='text-center' style="font-family: 'Cookie', cursive; font-size: 6em" > {!! $websiteTitle !!}</h1>
                    <p class='text-center'>Make your life easier with</p>
                    <P><a href="#login"><button class="btn btn-success btn-lg" >Log in</button></a>
                        <!-- <button class='btn btn-default btn-lg' data-toggle='modal' data-target='#signup-modal'>Sign up</button> -->
                    </p>
                </div>
            </div>
         </div>
    </div>
    @include('layouts.footer')
    @include('auth.loginModal')
    @include('auth.signupModal')

    <script>
       (function(){
            var w = $(window).width();
            var h = $(window).height();
            var _img;
            if(w>h)
                _img = $('<img/>',{src: '/img/landscape/5.jpg'}).appendTo('.active');
            else
                _img = $('<img/>',{src: '/img/portrait/4.jpg'}).appendTo('.active');   
            $(window).on('resize',function(){
                _img.remove();
                w = $(window).width();
                h = $(window).height();
                console.log(w + ' -> ' + h);
                if((w-100)>h)
                    _img = $('<img/>',{src: '/img/landscape/5.jpg'}).appendTo('.active');
                else
                    _img = $('<img/>',{src: '/img/portrait/4.jpg'}).appendTo('.active');           
            });
           
           var inst = $('[data-remodal-id=login]').remodal();
           if(typeof hasError !== 'undefined'){
                if(hasError == 1){
                    inst.open();
                }
                console.log('haserror ' + hasError);
           }
       })();       
       
    </script>
@endsection