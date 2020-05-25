<!-- Title Field -->
<div class="form-group col-md-12">
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->sub_title }}</p>
    <div class="text-muted col-md-6">
        @if($course->subscriber_count > 0)
            | Студенты : {{ number_format($course->subscriber_count) }}
        @endif
        @if($course->view_count > 0)
            | Просмотры : {{ number_format($course->view_count) }}
    @endif

    <!-- Created At Field -->
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'Создано:') !!}
            <p>{{ $course->created_at->format('h:i a - D d M Y') }}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'Обновлено:') !!}
            <p>{{ $course->updated_at->format('h:i a - D d M Y') }}</p>
        </div>

        <!-- User Id Field -->
        <div class="form-group col-md-6">
            {!! Form::label('user_id', 'Автор:') !!}
            <p><a href="/users/{{ $course->user['id'] }}">{{ $course->user['name'] }}</a></p>
        </div>

        <!-- Category Id Field -->
        <div class="form-group col-md-6">
            {!! Form::label('category_id', 'Категория:') !!}
            <p><a href="/categories/{{ $course->category['id'] }}">{{ $course->category['name'] }}</a></p>
        </div>

    </div>

    <!-- Discount Price Field -->
    <div class="form-group col-md-6">
        <span style="font-size: 38px">{{ $course->discount_price }} ₸</span>
        <br/>
        <span style="font-size: 18px; text-decoration: line-through">{{ $course->actual_price }} ₸</span>
        <br>
        <a href="#" class="btn btn-lg btn-success"> Купить курс {{ $course->discount_price }} ₸</a>

    </div>


</div>

@if(Auth::check() AND (\Illuminate\Support\Facades\Auth::user()->role_id < 3 || \Illuminate\Support\Facades\Auth::user()-> id == $course->user_id))

    <!-- Creator Status Field -->
    <div class="form-group col-md-6">
        {!! Form::label('creator_status', 'Статус создателя:') !!}
        <p>
            @if($course->creator_status == 1)
                Published
                {!! Form::open(['route' => ['courses.unpublishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value=" {{ $course->id }} ">

                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Click to unpublish', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to unpublish?')"]) !!}
                {!! Form::close() !!}
            @else
                Unpublished
                {!! Form::open(['route' => ['courses.publishCourse', $course->id], 'method' => 'post']) !!}
                <input type="hidden" name="course_id" value=" {{ $course->id }} ">
                {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to publish', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to publish?')"]) !!}
                {!! Form::close() !!}
            @endif
        </p>
    </div>

    <!-- Admin Status Field -->
    <div class="form-group col-md-6">
        {!! Form::label('admin_status', 'Статус админа:') !!}
        <p>
            @if($course->admin_status == 1)
                Approved
                @if(\Illuminate\Support\Facades\Auth::user()->role_id < 3)
                    |
                    {!! Form::open(['route' => ['courses.disapprove', $course->id], 'method' => 'post']) !!}
                    <input type="hidden" name="course_id" value=" {{ $course->id }} ">

                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Click to disapprove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to disapprove?')"]) !!}
                    {!! Form::close() !!}
                @endif
            @else
                Disapproved
                @if(\Illuminate\Support\Facades\Auth::user()->role_id < 3)
                    |
                    {!! Form::open(['route' => ['courses.approve', $course->id], 'method' => 'post']) !!}
                    <input type="hidden" name="course_id" value=" {{ $course->id }} ">
                    {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i> Click to approve', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to approve?')"]) !!}
                    {!! Form::close() !!}
                @endif
            @endif
        </p>
    </div>

@endif
{{--@if(!isset($getSubscription->created_at)) for button buy now --}}
{{-- Correct CODE --}}
<!-- Description Field -->
<div class="form-group col-md-8">
    {!! Form::label('description', 'Описание:') !!}
    <p>{{ $course->description }}</p>
</div>

<!-- About Instructor Field -->
<div class="form-group col-md-8">
    {!! Form::label('about_instructor', 'Инофрмация про учителя:') !!}
    <p>{{ $course->about_instructor }}</p>
</div>

<!-- Tags Field -->
<div class="form-group col-md-8">
    {!! Form::label('tags', 'Теги:') !!}
    <p>{{ $course->tags }}</p>
</div>

<!-- Promo Video Url Field -->
{{-- <div class="form-group">
    {!! Form::label('promo_video_url', 'Promo Video Url:') !!}
    <p>{{ $course->promo_video_url }}</p>
</div>
<!-- Playlist Url Field -->
<div class="form-group">
    {!! Form::label('playlist_url', 'Playlist Url:') !!}
    <p>{{ $course->playlist_url }}</p>
</div>
--}}

<!-- What Will Students Learn Field -->
<div class="form-group col-md-8">
    {!! Form::label('what_will_students_learn', 'Что ученики будут изучать:') !!}
    <p>{{ $course->what_will_students_learn }}</p>
</div>

<!-- Target Students Field -->
<div class="form-group col-md-8">
    {!! Form::label('target_students', 'Целевые студенты:') !!}
    <p>{{ $course->target_students }}</p>
</div>

<!-- Requirements Field -->
<div class="form-group col-md-8">
    {!! Form::label('requirements', 'Рекомендации:') !!}
    <p>{{ $course->requirements }}</p>
</div>





