@forelse($submits as $submit)
   
    <tr>
        {!!csrf_field()!!}
        <input id="markstruct" value="{{$submit->markStructureId}}" type="hidden" />
        <td title="Name: {{$submit->user}}" id="regId">{{$submit->regId}}</td>
        <td>{{$submit->note}}</td>
        <td><a href="{{$submit->url}}"><i class="fa fa-download"></i>  Download</a></td>
        @if(!$isLive)
            <td style="width:90px;padding:0px"><input class='form-control mark' type='number' value="{{$submit->mark}}" ></td>
        @endif
    </tr>
@empty
    <tr class=text-center > 
    <td colspan='3' class='text-danger'><b>NO submit is submited</b></td colspan='3'>
    </tr>
@endforelse