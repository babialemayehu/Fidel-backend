<div class="container-fluid" id="mark-list" >
<h4>Mark List</h4>
    @if($role == '2')
        @include("pages.course.teacher.markList")
    @else($role = '1')
        @include("pages.course.student.markList")
    @endif
</div>