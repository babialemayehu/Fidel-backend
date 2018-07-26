<div class="jumbotron text-center" id='teacher-mini-profile' style="padding: 0.5em" >
    
    <h3>Course Instractrork</h3>
    <img class='img-circle' src="/img/icons/avatar-male.png" style='width: 100px;margin: 1em;'/>                
    <div class="container">
        <ul class="list-group" style="list-style:none" >
            <li><strong>{{ucfirst($instracter_profile->firstName)}} {{ucfirst($instracter_profile->middleName)}}</strong></li>
            <li>{{ucfirst($instracter_profile->department)}}</li>
            <li><i class="fa fa-id-card color text-uppercase"></i>{{ucfirst($instracter_profile->regId)}}</li>
        </ul>
        <hr>
        <ul id="more-view" class="list-group text-left text-capitalize" style="list-style:none" >
            <li><strong>Birth Day:</strong><span id=dob>{!!'<script>$("#dob").text(" "+dateString("'!!}{{($instracter_profile->birthDate)}}{!!'"));</script>'!!}</span></li>
            <li><strong>Gender:</strong> {{ucfirst($instracter_profile->gender)}}</li>
            <li><strong>Nationality:</strong> {{ucfirst($instracter_profile->nationality)}} </li>
            <hr>
            <li><strong class='fa fa-mobile-phone fa-lg'> </strong> {{$instracter_profile->phone}} </li>
            <li><strong>Email:</strong> {{$instracter_profile->email}}</li>
            <li><strong>Office</strong> 719,26</li>
            <hr>
            <li><strong>Univeristy:</strong> Debre Markos </li>
            <li><strong>Collage:</strong> {{ucfirst($instracter_profile->collage->name)}} </li>
            <li><strong>Year of entrance:</strong> 2009 </li>
            <hr>
            <li><strong>Expriance:</strong> {{$instracter_profile->expreience}} Year </li>
            <li><strong>Accadamic Status:</strong> Department head </li>
            <center>
                <hr>
                <span id="hide" >Hide <i class="fa fa-caret-up"></i></span>
            </center>
        </ul>
        <span id="view" >View more <span class='caret'></span></span>
    </div>
</div>