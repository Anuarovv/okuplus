
<!-- View Count Field -->
<div class="form-group w-100 small text-muted text-right">
    {!! Form::label('view_count', 'Просмотры:') !!} {{ $category->view_count }}
</div>

<h1>{{ $category->name }}</h1>
<!-- Description Field -->
<div class="form-group w-100">
    <p>{{ $category->description }}</p>
</div>
<br>

<br/>
<!-- Created At Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('created_at', 'Создано:') !!}
    <p>{{ $category->created_at->format('h:m a - D d M Y') }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('updated_at', 'Обновлено:') !!}
    <p>{{ $category->updated_at->format('h:m a - D d M Y') }}</p>
</div>


