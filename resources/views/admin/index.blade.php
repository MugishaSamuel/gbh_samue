@extends('layouts.base')

@section('content')
<!-- STATISTIC-->
<section class="statistic">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h2 class="number">{{count($users)}}</h2>
                    <span class="desc">Clients Registered</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h2 class="number">{{count($agents)}}</h2>
                    <span class="desc">Property Agents</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h2 class="number">{{count($posts)}}</h2>
                    <span class="desc">All Property</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h2 class="number">$0</h2>
                    <span class="desc">total earnings</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END STATISTIC-->
<section>
<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8">
            <!-- RECENT REPORT 2-->
            <div class="recent-report2">
                <h3 class="title-3">recent reports</h3>
                <div class="chart-info">
                    <div class="chart-info__left">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>products</span>
                        </div>
                        <div class="chart-note">
                            <span class="dot dot--green"></span>
                            <span>Services</span>
                        </div>
                    </div>
                    <div class="chart-info-right">
                        <div class="rs-select2--dark rs-select2--md m-r-10">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Products</option>
                                <option value="">Services</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--dark rs-select2--sm">
                            <select class="js-select2 au-select-dark" name="time">
                                <option selected="selected">All Time</option>
                                <option value="">By Month</option>
                                <option value="">By Day</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                <div class="recent-report__chart">
                    <canvas id="recent-rep2-chart"></canvas>
                </div>
            </div>
            <!-- END RECENT REPORT 2             -->
        </div>
        <div class="col-xl-4">
            <!-- TASK PROGRESS-->
            <div class="task-progress">
                <h3 class="title-3">task progress</h3>
                <div class="au-skill-container">
                    <div class="au-progress">
                        <span class="au-progress__title">Web Design</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="90">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">HTML5/CSS3</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="85">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">WordPress</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                    <div class="au-progress">
                        <span class="au-progress__title">Support</span>
                        <div class="au-progress__bar">
                            <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                                <span class="au-progress__value js-value"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TASK PROGRESS-->
        </div>
    </div>
</div>
</div>
</section>

<section>
<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- USER DATA-->
            <div class="user-data m-b-40">
                <h3 class="title-3 m-b-30">
                    user records</h3>
                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>name</td>
                                <td>role</td>
                                <td>created on</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($all_users) > 0)
                            @foreach($all_users as $user)
                            <tr>
                                <td>
                                    <div class="table-data__info">
                                        <h6>{{$user->name}}</h6>
                                        <span>
                                            <a href="#">{{$user->email}}</a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    @if($user->user_type === "0")
                                    <span class="role admin">client</span>
                                    @elseif($user->user_type === "1")
                                    <span class="role admin">agent</span>
                                    @else
                                    <span class="role admin">admin</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-data__info">
                                        <h6>{{$user->created_at}}</h6>
                                    </div>
                                </td>
                                {{-- <td>
                                    <span class="more">
                                        <i class="zmdi zmdi-more"></i>
                                    </span>
                                </td> --}}
                            </tr>
                            @endforeach
                            @else
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="user-data__footer">
                    <a href="/manage-users" class="au-btn au-btn-load">load more</a>
                </div>
            </div>
            <!-- END USER DATA-->
        </div>
    </div>
</div>
</div>
</section>
@endsection