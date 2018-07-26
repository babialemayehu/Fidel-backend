<div class="continer-fluid">
    <h3>Question</h3>
    <span class="small">Compose your Question</span>
        <div class="alert fade in">
            <i class="fa" aria-hidden="true"></i> 
            <i></i>                
        </div>
    <form>
        {{ csrf_field()}}
        <div class="form-group">
            <textarea class="form-control"></textarea>
        </div>
        <button class='btn btn-success pull-right'>Ask</button>
    </form>
    <p style="padding:1em 0 0 0;">
        <center><a href="#questions/{{$courseId}}" >View all Questions</a></center>
    </p>
</div>
<script>
    var questionAlert = $('#question .alert').hide();
    $(document).on('submit','#question form',function(e){
        try{
           askQuestionRequest(questionAlert);
        }catch(err){
            console.log(err);
        }
        return false;
    });
</script>