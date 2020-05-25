<div class="col-md-12">
<ul class="nav nav-pills text-bold">
    <li role="presentation">
        <a href="{{ route('courses.show', ['id' => $course->id]) }}"><i class="glyphicon glyphicon-home"></i>Описание курса</a></li>
    <li role="presentation">
        <a href="{{ route('courses.contents', ['course_id' => $course->id]) }}">Уроки</a></li>
    @if(Auth::check() AND (Auth::user()->id == $course->user_id || Auth::user()->role_id < 3 ))
    <li role="presentation">
        <a href="{{ route('courses.subscribers',['course_id' => $course->id]) }}">Подписчики ({{$course->users_count}})</a></li>
    @endif
</ul>
</div>
