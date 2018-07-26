<div class='container' id='calander' >
<div class="row">
    <div class="col-md-8">
        <div class='jumbotron'>
            <h2 style="border-bottom: 1px solid #ccc;padding: 0.6em;" >Calander</h2>
            <div class="table-responsive" id="calander-table" >
                
                <div id="months" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active text-center">
                            <p></p>
                            <span></span>
                        </div>
                    </div>
                    <a class="left carousel-control" href="" role="button" >
                        <span aria-hidden="true"> &#10094;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="" role="button">
                        <span aria-hidden="true"> &#10095;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <table class="table table-bordered"></table> 
                <center class="lead" style="padding:4.5em"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i><i> Loading...</i></center>
            </div>
            <button class='btn btn-default fa fa-refresh pull-right' onclick='refresh()'title='Refresh' ></button>
            <button class='btn btn-default fa fa-calendar-o pull-right' onclick='thisMonth()' title="This month"></button>
        </div>
    </div>
    @include('pages.calander.modal')
    @include('pages.calander.confirm')
    <div class="col-md-4">
        <div class="jumbotron">
            @include("pages.calander.student.sideBar")
        </div>
    </div>
</div>
</div>
{!!"<script>var _role=".$role."</script>"!!}
<script> 
    var alert = $('#Edit .alert').hide();
    var calander = $("#calander table").first();
        calander = $('<tbody></tbody>').appendTo(calander);
    var sideBar = $('#sideBarEvent');
        sideBar = $('<tbody></tbody>').appendTo(sideBar);

    var year = today.year;
    var month = today.month;
    var day = today.day;
    var ev =[];
</script>
<script>
$(document).ready(function(){
    setCarousle();
    loadCalenderWithEvent();
    bindEvents();
    renderSelect();
    renderHeader(calander);
    renderCalenderCarousel();
});
       
</script>