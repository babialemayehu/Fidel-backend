<div class="container-fluid">
    <div class="row">
        <div class="col-md-">
            <div class="jumbotron text-center" id="personal-profile">
                <h3>personal profile</h3>
                <img class='img-circle' src="/img/icons/avatar-male.png" 
                style='width: 100px;margin: 1em;'/>                
                <div class="container">
                    <ul class="list-group" style="list-style:none" >
                        <li><strong>#User Name</strong></li>
                        <li>#II year,department</li>
                        <li>#TER_0075_09</li>
                    </ul>
                    <hr>
                    <ul class="list-group text-left sm-hide" style="list-style:none" >
                        <li><strong>Birth Day:</strong> April 14,2017</li>
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Nationality:</strong> Ethiopian </li>
                        <hr>
                        <li><strong>Phone:</strong> 0910867889 </li>
                        <li><strong>Email:</strong> Ebaalemayehu3@gmail.com </li>
                        <li><strong>Dorm;</strong> 719,26</li>
                        <hr>
                        <li><strong>Univeristy:</strong> Debre Markos </li>
                        <li><strong>Collage:</strong> Technology </li>
                        <li><strong>Year of entrance:</strong> 2009 </li>
                        <hr>
                        <li><strong>Food:</strong> Cash </li>
                        <li><strong>Bording:</strong> Service </li>
                    </ul>
                    <span>View more <span class='caret'></span></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <h3>Shelf</h3>
                <div class="container-fluid">
                    <div class="row">
                        <form class="form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search file" >
                                <span class="input-group-addon" style="padding:0px" >
                                    <button type="submit" class="btn btn-default" style="padding:inherit;border: 0px solid transparent;" >
                                        <i class="fa fa-search" style="padding: 0.6em;"></i>
                                    </button>
                                </span>
                                <select class="form-control" style="margin-left:0.3em;border-radius: 2px" >
                                    <option placeholder="Filter" hidden>Filter</option>
                                    <option value="#">type</option>
                                    <option value="#">date</option>
                                    <option value="#">name</option>
                                    <option value="#">size</option>
                                </select>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
                <div class="container-fluid">
                    <ul id="self-files" class="list-group text-center" >
                        @for($i = 0;$i < 16;$i++)
                            <li class="text-center" style="float: left;display:inline;padding:0.8em 0 0 1.4em;">
                                <a href=""> <i class="fa fa-file-powerpoint-o fa-4x" style="padding:0.1em 0.1em 0 0.1em;color: rgba(15,135,100,1);" ></i></a>
                                <span class="text-center" style="display:block;">file title<br>size: </span>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
             <div class="jumbotron">
                <h3>Acadamic profile</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="jumbotron" style="padding:2em;height:38em;overflow:auto">
                <h3>Frainds</h3>
                <div class="container">
                    <ul class="list-group" style="list-style:none;">
                        @for($i = 0;$i < 50;$i++)
                            <li style="margin:0.5em 0 0.5em 0" ><a href="">
                                <img src="img/icons/avatar-male.png" class='img-circle' style="width:30px">
                                <span style="padding: 0.2em 0 0.2em 1em" >Eba Alemayehu</span></a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>