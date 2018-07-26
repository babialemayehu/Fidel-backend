 <?php $gradeReport = ['Course code','Course title','Cradit hour','Grade','Grade point','Previous grade'];
                          $records=['EnLa1011','Communicative English',3,'A',12,""];?>
<div class='container-fluid'>
<div class="row">
    <div class="col-md-8" id='grade-col' >
        <div class="jumbotron" id='grade-jum'>
            <h3>Grade report</h3>
            @for($y = 1;$y <= 4;$y++)
                <div class='panel-group'>
                    <h4> {{$y}} Year </h4>
                    @for($j = 1;$j <= 2;$j++)
                        <div class='panel'>
                            <div class='panel-header'>{{$j}} semister</div>
                            <div class='panel-bodu'>
                                <div class='table-responsive'>
                                <table class='table table-hover table-striped'>
                                    <tr>
                                        @foreach($gradeReport as $g)
                                            <th>{{$g}}</th>
                                        @endforeach
                                    </tr>
                                    @for($i = 1;$i <= 5;$i++)
                                        <tr>
                                            @foreach($records as $record)
                                              <td>{{$record}}</td>
                                            @endforeach
                                        </tr>
                                    @endfor
                                    
                                </table>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <hr>
            @endfor
        </div>
    </div>
    <div class="col-md-4" >
        <div class="jumbotron text-center" style="padding: 1em;">
            <ul class='list-group'>
                <li class='list-group-item'><h4>Comulative GPA<br><span class='label label-success'>3.4</span></h4></li>
                <li class='list-group-item'><h4>Total cradit hour<br><span class='label label-success'>22</span></h4></li>
                <li class='list-group-item'><h4>Grade point<br><span class='label label-success'>60</span></h4></li>
                <li class='list-group-item'><h4>Comulative GPA<br><span class='label label-success'>3.4</span></h4></li>
            </ul>
           
        </div>
    </div>
</div>
</div>