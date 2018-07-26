<div class="container">
    <div class='row'>
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <h3>App Store</h3>
                <center>
                <div class="container" style="padding:0px;margin:0px" >
                    <ul id="app">
                        @for($i=0; $i<12;$i++)
                            <li>
                                <img src="/img/icons/avatar-male.png" style="width:100px" />
                                <p>title</p>
                                <p>type</p>
                                <p>size</p>
                                <p class="fa fa-download"> Download</p>
                            </li>
                        @endfor
                    </ul>
                </div>
                </center>
            </div>
        </div>
    </div>
</div>