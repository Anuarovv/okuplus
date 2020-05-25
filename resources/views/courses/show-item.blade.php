<div class="col-md-12">
    <div class="col-md-8">
        @if(Auth::check() AND (Auth::user()->id == $item->user_id || Auth::user()->role_id < 3 ))
        <h2 class="text-right">
            <a href="{{ route('items.edit', ['course_id'=>$item->course_id,'item_id'=> $item->id]) }}" class="btn btn-lg btn-primary">
                <i class="glyphicon glyphicon-new-window"></i>Редактировать</a></h2>
        @endif
        <h2>{{ $item->title }}
            <br>
            <small>Просмотры: {{ $item->view_count }}</small>
        </h2>
        {{-- Main video --}}
<?php if(!empty($item->url)){ ?>
        <?php
        $matches = array();
        $url = $item->url;
        $ret = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);

        //"php regex for extract youtube video id"

        ?>
@if($ret > 0)
        <iframe
            width="100%"
            height="450"
            src="https://www.youtube.com/embed/<?php echo $matches[0]; ?>"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    @else

<a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a>

@endif
<?php } ?>

        <div class="mt-5 mb-5">
            <h3>Описание
            </h3>
            <div class="text-muted">
                {{ $item->created_at->format('h:i a - D d M Y') }}
            </div>
                {{ $item->description }}

        </div>

    </div>
    <div class="col-md-4">
        <!-- Title Field -->
            <h1>{!! $course->title !!} <br/>
                <small>{!! $course->sub_title !!}</small>
            </h1>
        {{-- List of other videos --}}
        <h3>Уроки:</h3>

        <div class="list-group">
        @foreach($course->items as $newItem)

                <a href="{{ route('courses.items', ['course_id'=> $course->id, 'item_id'=> $newItem->id]) }}"
                   class="list-group-item text-bold
                @if($item->id == $newItem->id)
                    active
                @endif()
                " style="font-size: 15px;"><i class="glyphicon glyphicon-play"></i>{{ $newItem->title }}</a>

        @endforeach

        </div>
    </div>
</div>
