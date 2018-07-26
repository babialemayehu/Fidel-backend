<div class="container" id="shelf">
    <h4>shelf</h4>
    <div class="container-fluid">
        <div class="row">
            <form class="form">
                {!!'<script>var $self_token="'.csrf_token().'";</script>'!!}
                <div class="input-group" style="margin-left:5%;margin-right:2%">
                    <span class="input-group-addon" style="padding:0px;background-color:transparent;border:none;border-radius:0px" >
                        <input type="text" class="form-control" placeholder="Search file" oninput="search(this)">
                        <button type="submit" class="btn btn-default" onclick="search($(parents('div>input')))" 
                        style="padding:inherit;border:none;right:10px;bottom:3px;position:absolute" >
                            <i class="fa fa-search" style="padding: 0.6em;positition:absolute"></i>
                        </button>
                    </span>
                    {{--  <select class="form-control" style="margin-left:0.3em;border-radius: 2px" >
                        <option placeholder="Filter" hidden>Filter</option>
                        <option value="#">type</option>
                        <option value="#">date</option>
                        <option value="#">name</option>
                        <option value="#">size</option>
                    </select>  --}}
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class='container-fluid' style="padding:0px"> 
        <ul class="list-group text-center" >
            <div class='container-fluid  text-center' id="self-files" ></div> 
        </ul>
    </div>
    @if(false)
        @include('pages.course.teacher.shelf')
    @endif
</div>
<script>
//
$(document).ready(function(){
   if(role = 1)
        $(".ajax-upload-dragdrop").find(".ajax-file-upload").remove(); 

});
    
    $('#shelf #self-files').uploadFile({
       url:"course/shelf",
       formData:{_token: $self_token,
                session: window.location.href.split('/').pop()
                },
       onSuccess: function(files,data,xhr,pd){
           console.log(data);
       },
       dragDropStr:'',
       uploadStr: "<i class='fa fa-upload fa-2x'></i>"
    });
    $(".ajax-upload-dragdrop").addClass('container-fluid')
        .find(".ajax-file-upload").addClass('btn btn-default pull-right clearfix')
            .find('input').css('top', '2.4em');
    var files = requestFileData();
    
</script>