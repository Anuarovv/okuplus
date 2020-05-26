<!-- View Count Field -->
<div class="form-group col-md-12 text-muted text-right">
    <p>Profile viewed {{ $user->view_count }} times</p>
</div>

<!-- Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Никнейм:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-md-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- First Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('first_name', 'Имя:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('last_name', 'Фамилия:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Gender Field -->
<div class="form-group col-md-6">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $user->gender }}</p>
</div>



<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Joined:') !!}
    <p>{{ $user->created_at->format('h:i a - D d M Y') }}</p>
</div>



@if(Auth::check() AND (Auth::user()->user_id == $user->id || Auth::user()->role_id < 3))

<!-- Role Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('role_id', 'Role:') !!}
<p>{{ $user->role ['name'] }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-md-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $user->date_of_birth }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Last Updated:') !!}
    <p>{{ $user->updated_at }}</p>
</div>
@endif

@if(Auth::check() AND Auth::user()->role_id < 3)

    <!-- Is Subscribed Field -->
    <div class="form-group col-md-6">
        {!! Form::label('is_subscribed', 'Is Subscribed:') !!}
        <p>{{ $user->is_subscribed }}</p>
    </div>

    <!-- Email Verified At Field -->
    <div class="form-group col-md-6">
        {!! Form::label('email_verified_at', 'Email Verified At:') !!}
        <p>{{ $user->email_verified_at }}</p>
    </div>

<!-- Deleted At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->deleted_at }}</p>
</div>

@endif

    <h3>
        Статистика пользователя
    </h3>

<div class="col-md-12">
    <div class="nav-tabs-custom">

        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <!-- Statistic 1 -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Курсы</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body chart-responsive">
                        <div class="chart" id="sales-chart"
                             style="height: 300px;
                                             position: relative;">
                            <svg height="300"
                                 version="1.1"
                                 width="651.703"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 style="overflow: hidden;
                                                 position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                                </desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none"
                                      stroke="#3c8dbc"
                                      d="M325.8515,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,414.07925519497707,180.44625304313007"
                                      stroke-width="2"
                                      opacity="0"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                      opacity: 0;"></path>
                                <path fill="#3c8dbc"
                                      stroke="#ffffff"
                                      d="M325.8515,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,416.91514732624415,181.4248826052307L453.4666459070204,194.03833029452744A135,135,0,0,1,325.8515,285Z"
                                      stroke-width="3"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none"
                                      stroke="#f56954"
                                      d="M414.07925519497707,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,242.1363462783141,108.73398312817662"
                                      stroke-width="2"
                                      opacity="1"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                      opacity: 1;"></path>
                                <path fill="#f56954"
                                      stroke="#ffffff"
                                      d="M416.91514732624415,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,239.44550205154565,107.40757544301087L200.27876941747115,88.10097469226493A140,140,0,0,1,458.1931327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M242.1363462783141,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,325.8221784690488,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M239.44550205154565,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,325.8212359912682,246.3333285794739L325.8090884998742,284.9999933380171A135,135,0,0,1,204.7635097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="325.8515" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.6792,0,0,1.6792,-221.3226,-100.6933)" stroke-width="0.5955171130952381"><tspan dy="5.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Courses</tspan></text><text x="325.8515" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(2.0072,0,0,2.0072,-328.1874,-153.3414)" stroke-width="0.4982142857142858"><tspan dy="4.75" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3</tspan></text></svg></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!--End Statistic 1 -->
                <!--Statistic 2 -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Прогресс</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body chart-responsive">
                        <div class="chart" id="line-chart"
                             style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg height="300" version="1.1" width="602.766" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <text x="49.21875" y="261" text-anchor="end" font-family="sans-serif"
                                      font-size="12px" stroke="none" fill="#888888"
                                      style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                                      text-anchor: end; font-family: sans-serif; font-size: 12px;
                                                      font-weight: normal;" font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color:
                                                    rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,261H577.766" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lesson #1</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,202H577.766" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lesson #2</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,143H577.766" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lesson #3</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,84H577.766" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Lesson #3</tspan></text>
                                <path fill="none" stroke="#aaaaaa" d="M61.71875,25H577.766" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="483.0841837788578" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="253.59051002430132" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2020</tspan></text><path fill="none" stroke="#3c8dbc" d="M61.71875,229.5412C76.14048359659782,229.2108,104.98395078979343,231.53245,119.40568438639124,228.2196C133.82741798298906,224.90675000000002,162.67088517618467,204.50514644808743,177.0926187727825,203.0384C191.35759439550424,201.58759644808742,219.88754564094774,219.34895,234.15252126366948,216.5494C248.41749688639123,213.74984999999998,276.94744813183473,183.43358661202186,291.2124237545565,180.642C305.6341573511543,177.81973661202184,334.47762454434996,191.15875,348.89935814094775,194.094C363.32109173754554,197.02925,392.1645589307412,218.06921420765028,406.58629252733897,204.124C420.8512681500607,190.33036420765026,449.3812193955042,91.8402361878453,463.64619501822597,83.1386C477.7544126670716,74.5325861878453,505.97084796476304,125.20556758241757,520.0790656136087,134.89339999999999C534.5007992102065,144.79651758241758,563.3442664034021,154.85015,577.766,161.50240000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="229.5412" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="119.40568438639124" cy="228.2196" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="177.0926187727825" cy="203.0384" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="234.15252126366948" cy="216.5494" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="291.2124237545565" cy="180.642" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="348.89935814094775" cy="194.094" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="406.58629252733897" cy="204.124" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="463.64619501822597" cy="83.1386" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="520.0790656136087" cy="134.89339999999999" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="577.766" cy="161.50240000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 534.743px; top: 94px; display: none;"><div class="morris-hover-row-label">2013 Q2</div><div class="morris-hover-point" style="color: #3c8dbc">
                                    Item 1:
                                    8,432
                                </div></div></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!--End Statistic 2 -->


            </div>

        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
</div>
