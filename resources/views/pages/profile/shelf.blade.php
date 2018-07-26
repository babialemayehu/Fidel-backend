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