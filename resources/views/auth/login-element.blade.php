<div class="login-box-body">

    <div class="social-auth-links text-center">
        {{--<a href="/login/facebook" class="btn btn-block btn-social btn-facebook btn-flat">
            <i class="fa fa-facebook"></i> Sign in with
            Facebook</a>--}}

        <a href="/login/google" class="btn btn-block btn-social btn-google btn-flat">
            <i class="fa fa-google"></i> Войти через Google</a>
    </div>


    <p class="login-box-msg">Или введите  ваши данные:</p>

    <form method="post" action="{{ url('/login') }}">
        {!! csrf_field() !!}

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
             </span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Пароль" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
             </span>
            @endif

        </div>
        <div class="form-group">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Запомнить меня
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-danger btn-block btn-flat">Войти</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <a href="{{ url('/password/reset') }}">Забыл пароль</a> |
    <a href="{{ url('/register') }}" class="text-center">Зарегистрироваться</a>

</div>
