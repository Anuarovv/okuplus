{{--
    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
     {!! Form::close() !!}
--}}{{--

        <div class="card-columns">
        @foreach($categories as $category)

                <div class="card">
                    <img class="card-img-top" src="https://www.kt.kz/neofiles/serve-image/5db77a30d6a86c32c7e8f64b" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">
                            {{ str_limit($category->description, $limit = 150, $end = '...') }}
                        </p>
                        <ul class="list-group list-group-flush">
                            <small class="text-muted">Views: {{number_format($category->view_count)}} </small>
                        </ul>
                    </div>

                    <div class="card-footer">

                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('categories.show', [$category->id]) }}" class="btn btn-primary mr-5">View Category</a>

                            @if(\Illuminate\Support\Facades\Auth::user()->role_id < 3)
                            <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default mr-3'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            @endif
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
        @endforeach
        </div>
--}}

<table class="table table-responsive" id="users-table">
    <thead>
    <tr>
        <th></th>
        <th colspan="3"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>
                <h3 style="margin-bottom: 0px;">
                    <a href="{{ route('categories.show', [$category->id]) }}" >
                        {{ $category->name }}  ({{ $category->courses_count }})
                    </a>
                </h3>


                <div>          <small class="text-muted">
                        Просмотры: {{ number_format($category->view_count) }}</small>
                </div>
                <div>  {{ str_limit($category->description, $limit = 150, $end = '...') }} </div>

            </td>

            <td>
                @if (Auth::check() AND Auth::user()->role_id < 3)
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}

                @endif

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
