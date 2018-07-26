<div class="table-responsive" id='mark' >
    <table class="table table-bordered ">
        <tr id='head'>
            @forelse($mark_header as $outOf)
                <td>{{$outOf}}</td>
            @empty
                <p class='text-danger'>No marsk yet</p>
            @endforelse
        </tr>
        <tr>
             @forelse($studentMarks as $mark)
                <td>{{$mark}}</td>
            @empty
                <p class='text-danger'>No marsk yet</p>
            @endforelse
        
        </tr>
    </table>
</div>