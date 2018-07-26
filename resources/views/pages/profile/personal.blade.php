<div class="jumbotron text-center" id="personal-profile">
    <h3>personal profile</h3>
    <img class='img-circle' src="/img/icons/avatar-male.png" 
    style='width: 100px;margin: 1em;'/>                
    <div class="container">
        <ul class="list-group" style="list-style:none" >
            <li><strong class='text-capitalize'>{{Auth::user()->firstName}} {{Auth::user()->middleName}} {{Auth::user()->lastName}}</strong></li>
            <li>{{Auth::user()->department()->first()->name}}</li>
            <li>{{Auth::user()->regId}}</li>
        </ul>
        <hr>
        <ul id="more-view" class="list-group text-left " style="list-style:none" >
            <li><strong>Birth Day:</strong>{{Auth::user()->birthDate}}</li>
            <li><strong>Gender:</strong> {{(Auth::user()->gender == 'M')?'Male':'Female'}}</li>
            <li><strong>Nationality:</strong> {{Auth::user()->nationality}} </li>
            <hr>
            <li><strong>Phone:</strong> {{Auth::user()->phone}} </li>
            <li><strong>Email:</strong> {{Auth::user()->email}} </li>
            <li><strong>Dorm;</strong> 719,26</li>
            <hr>
            <li><strong>Univeristy:</strong> Debre Markos </li>
            <li><strong>Collage:</strong> {{Auth::user()->collage()->first()->name}} </li>
            <li><strong>Year of entrance:</strong> 2009 </li>
            <hr>
            <li><strong>Food:</strong> Cash </li>
            <li><strong>Bording:</strong> Service </li>
        </ul>
    </div>
</div>