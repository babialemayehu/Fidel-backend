<div class="container">
    <h4>shelf</h4>
    <div class="container-fluid">
        <div class="row">
            <form class="form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search file" onchange="search(this)" >
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
        <ul id="self-files" class="list-group text-center" style="border: 1px solid red">
            
        </ul>
</div>