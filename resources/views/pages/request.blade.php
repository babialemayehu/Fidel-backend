<div class="container" id="request">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <h3>Requests</h3>
                <div class="panel-group" id='list'>                
                </div>
            </div>
        </div>
    </div>
</div>
{!!"<script>var id = $id</script>"!!}
<script>
    loadLists("/requestList/"+id); 
</script>