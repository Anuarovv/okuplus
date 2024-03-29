@extends('layouts.app',['title'=>'Edit course:'.$course->title])

@section('content')
    <section class="content-header">
        <h1>
            Курсы
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->id], 'method' => 'patch']) !!}

                        @include('courses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
