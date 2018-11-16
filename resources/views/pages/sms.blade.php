
@extends('layouts.app')
@section("content")
<div class='container'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <form method="post" onSubmit="sendSms(this)"> 
                    <h3>Message to all <i id="spinner" class="fa fa-refresh fa-spin"></i></h3>
                    <textarea class="form-control">
                    </textarea>
                    <button type="submit" class="btn btn-success form-control">SEND</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#spinner').hide(); 
    function sendSms(form){
        $request = {
            message: $(form).find("textarea").val()
        }
        $('#spinner').show();
        $.post('/sms', $request)
        .done(function(){
            successDialog(" sent sms message"); 
            $(form).find("textarea").val("");
            $('#spinner').hide(); 
        })
        .fail(function(){
            faildDialog(" send the message"); 
            $('#spinner').show(); 
        }); 
    }; 
</script>
@endsection