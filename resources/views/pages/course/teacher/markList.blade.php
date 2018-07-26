<div class="continer-fluid" hidden style="hight:5em;margin-bottom:1.2em;border-bottom:1px solid #ccc;padding:1em;">
    <form class="form form-vertical" > 
        <p><label class="label" style="font-size:1em;mark">Upload students mark list: </label></p>
        <span class="small" style="display:block">Your file must be uploaded in <b>CSV</b> format (<a href="#" style='padding:0px' class="btn btn-link">if you need help click hear</a>)
        <input type="file" class="form-control"  name="mark-list" id='mark-list-upload' style="margin-bottom: 1em;"/>
        <input type="submit" class="btn btn-success form-control" value="Upload" style="background-color: rgba(27,157,116,0.8);"/>
    </form>
</div>
<div class="container-fluid" style="margin-bottom: 1.5em" >
    <form class="form-inline pull-right clearfix" id="add-col"> 
        <table>
            <tr>
                <td>
                    <div class='form-group'>
                        {{ csrf_field() }}
                        <input type='number' name="outOf" class="form-control" style="width: 6em" max=100 min=1 placeholder="out of" required/> 
                    </div>
                </td>
                <td>
                    <div class='form-group'>
                            <button class="btn btn-success pull-right clearfix form-control" type="submit">
                                <i class="fa fa-plus"></i>
                                <span> Column</span>
                            </button> 
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="responcive-table text-center" id='mark-list-table-container' style="height:600px;overflow:auto;" >
</div>
{!!'<script> var $rowHaders='.$students.';</script>'!!}
{!!'<script> var $colHeaders='.$markCol.';</script>'!!}
{!!'<script> var $colHeaderIds='.$markColIds.';</script>'!!}
{!!'<script> var $values='.$values.';</script>'!!}
{!!'<script> var $token="'.csrf_token().'";</script>'!!}
<script>
    table($colHeaders,$rowHaders);
    $(document).ready(function(){
        $(document).on('submit','#add-col',function(e){
            e.preventDefault();
            addCol($(this).find('[name="outOf"]').val(),session_id,$(this).find('[name=_token]').val());
            return false;
        });
    });
</script>