<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-graduation-cap"></i><span>Категория курсов</span></a>
</li>

<li class="{{ Request::is('courseUsers*') ? 'active' : '' }}">
    <a href="{{ route('courseUsers.index') }}"><i class="fa fa-users"></i><span>Подписки</span></a>
</li>

{{-- Moderator Section --}}
{{-- @if(\Illuminate\Support\Facades\Auth::user()->role_id < 4)

    <li class="{{ Request::is('courses*') ? 'active' : '' }}">
        <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>My Courses</span></a>
    </li>

@endif --}}

{{-- Admin Section --}}

@if(\Illuminate\Support\Facades\Auth::user()->role_id < 3)

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-leanpub"></i><span>Курсы</span></a>
</li>

<li class="{{ Request::is('comments*') ? 'active' : '' }}">
    <a href="{{ route('comments.index') }}"><i class="fa fa-comments"></i><span>Комментарии</span></a>
</li>

{{--<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-bookmark"></i><span>Items</span></a>
</li>--}}

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-credit-card"></i><span>Оплаты</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Пользователи</span></a>
</li>

{{--<li class="{{ Request::is('views*') ? 'active' : '' }}">
    <a href="{{ route('views.index') }}"><i class="fa fa-edit"></i><span>Views</span></a>
</li>--}}

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-cog"></i><span>Роли</span></a>
</li>

@endif

@if(\Illuminate\Support\Facades\Auth::user()->role_id > 3)
<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Курсы</span></a>
</li>
@endif

<li class="{{ Request::is('coupons*') ? 'active' : '' }}">
    <a href="{{ route('coupons.index') }}"><i class="fa fa-ticket"></i><span>Купоны</span></a>
</li>

<li class="#">
    <a href="/users/{{ Auth::user()->id }}"><i class="fa fa-bar-chart"></i><span>Статистика</span></a>
</li>

<li class="#">
    <a href="http://127.0.0.1:8000/calendar"><i class="fa fa-calendar"></i><span>Календарь</span></a>
</li>
