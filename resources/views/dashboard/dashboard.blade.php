@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Dashboard</h5>
                <h6 class="sub-heading">Selamat datang di Sistem Penanggulangan Bencana PMI Solo</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Row start -->
<div class="row gutters">
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <i class="icon-facebook"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h6 class="title">Facebook</h6>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">5,600</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <div class="stats-widget-header">
                        <i class="icon-twitter"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h6 class="title">Twitter</h6>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">3,500</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Followers">47</a>
                    <div class="stats-widget-header">
                        <i class="icon-googleplus"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h6 class="title">Google</h6>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">2,800</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="stats-widget">
                    <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Posts">12</a>
                    <div class="stats-widget-header">
                        <i class="icon-rss"></i>
                    </div>
                    <div class="stats-widget-body">
                        <!-- Row start -->
                        <ul class="row no-gutters">
                            <li class="col-sm-6 col">
                                <h6 class="title">Blog</h6>
                            </li>
                            <li class="col-sm-6 col">
                                <h4 class="total">7,000</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
<!-- Row start -->
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Overview<a href="widgets.html" class="link">More examples</a></div>
            <div class="card-body">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-md-5 col-sm-12">
                        <h6 class="card-title mt-0">Visitors</h6>
                        <div class="chartist custom-one">
                            <div class="line-chart"></div>
                        </div>
                        <div class="download-details">
                            <p>21<sup>%</sup> more visitors than last month</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="monthly-avg">
                            <h6>Monthly Average</h6>
                            <div class="avg-block">
                                <h4 class="avg-total text-secondary">9500</h4>
                                <h6 class="avg-label">
                                    Visitors
                                </h6>
                            </div>
                            <div class="avg-block">
                                <h4 class="avg-total text-primary">$510<sup>k</sup></h4>
                                <h6 class="avg-label">
                                    Sales
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <h6 class="card-title mt-0">Sales</h6>
                        <div class="chartist custom-two">
                            <div class="line-chart2"></div>
                        </div>
                        <div class="download-details">
                            <p>15<sup>%</sup> more sales than last month</p>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
<!-- Row start -->
<div class="row gutters">
    <div class="col-lg-8 col-md-7 col-sm-12">
        <div class="card">
            <div class="card-header">Team Activity</div>
            <div class="card-body">
                <ul class="team-activity">
                    <li class="product-list clearfix">
                        <div class="product-time">
                            <p class="date center-text">02:30 pm</p>
                            <span class="badge badge-primary">New</span>
                        </div>
                        <div class="product-info">
                            <div class="row gutter">
                                <div class="col-lg-8 col-md-7 col-sm-7">
                                    <h5>Unify - Admin Dashboard</h5>
                                    <p>by Luke Etheridge</p>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-5">
                                    <div class="progress sm no-margin">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                                            <span class="sr-only">49% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>(225 of 700gb)</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-list clearfix">
                        <div class="product-time">
                            <p class="date center-text">11:30 am</p>
                            <span class="badge badge-primary">Task</span>
                        </div>
                        <div class="product-info">
                            <div class="row gutter">
                                <div class="col-lg-8 col-md-7 col-sm-7">
                                    <h5>User_Profile.php</h5>
                                    <p>by Rovane Durso</p>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-5">
                                    <div class="progress sm no-margin">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>90% completed</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product-list clearfix">
                        <div class="product-time">
                            <p class="date center-text">12:50 pm</p>
                            <span class="badge badge-primary">Closed</span>
                        </div>
                        <div class="product-info">
                            <div class="row gutter">
                                <div class="col-lg-8 col-md-7 col-sm-7 col">
                                    <h5>Material Design Kit</h5>
                                    <p>by Cosmin Capitanu</p>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-5 col">
                                    <div class="chartist custom-one">
                                        <div class="team-act"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-5 col-sm-12">
        <div class="card">
            <div class="card-header">Tasks</div>
            <div class="card-body">
                <div class="chartist custom-one">
                    <div class="donut-chart"></div>
                </div>
                <div class="row gutters">
                    <div class="col-sm-4 col">
                        <div class="info-stats">
                            <span class="info-label"></span>
                            <h6 class="info-title">Pending</h6>
                            <h4 class="info-total">12</h4>
                        </div>
                    </div>
                    <div class="col-sm-4 col">
                        <div class="info-stats">
                            <span class="info-label red"></span>
                            <h6 class="info-title">Completed</h6>
                            <h4 class="info-total">7</h4>
                        </div>
                    </div>
                    <div class="col-sm-4 col">
                        <div class="info-stats">
                            <span class="info-label green"></span>
                            <h6 class="info-title">New</h6>
                            <h4 class="info-total">4</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
<!-- Row start -->
<div class="row gutters">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">Events</div>
            <div class="card-body p-0">
                <div class="events">
                    <div class="all-events clearfix">
                        <div id="today-date"></div>
                        <a href="#" class="btn btn-sm">9 Events</a>
                    </div>
                    <ul class="event-list">
                        <li>
                            <a href="#">
                                <div class="event-status-icon">
                                    <img src="img/checked.svg" alt="Admin Themes" class="completed" />
                                </div>
                                <div class="event-info">
                                    <span class="event-time">8:45</span>
                                    <p class="event-desc text-truncate">Coffee with Hayashi</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="event-status-icon">
                                    <img src="img/not-checked.svg" alt="Admin Themes" class="completed" />
                                </div>
                                <div class="event-info">
                                    <span class="event-time">10:30</span>
                                    <p class="event-desc text-truncate">Product meeting with dev team</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-header">Income</div>
            <div class="card-body p-0">
                <div class="row gutters">
                    <div class="col-lg-4 col-sm-6 col">
                        <div class="income-stats">
                            <h4 class="total">1465k</h4>
                            <p class="income-title"><span class="income-label"></span>Overall Income</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col">
                        <div class="income-stats">
                            <h4 class="total">1049k</h4>
                            <p class="income-title"><span class="income-label secondary"> </span>Overall Expenses</p>
                        </div>
                    </div>
                </div>
                <div class="chartist custom-two">
                    <div class="income-area-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
<!-- Row start -->
<div class="row gutters">
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="card-header">Chat</div>
            <div class="customScroll">
                <div class="card-body">
                    <ul class="chats">
                        <li class="chats-left">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">Wincy</div>
                            </div>
                            <div class="chats-text info">Hello, I'm Wincy.</div>
                            <div class="chats-hour">08:55 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-right">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">You</div>
                            </div>
                            <div class="chats-text danger">How can I help you today?</div>
                            <div class="chats-hour">08:56 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-left">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">James</div>
                            </div>
                            <div class="chats-text info">I need more information about Developer Plan.</div>
                            <div class="chats-hour">08:57 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-right">
                            <div class="chats-avatar">
                                <img src="img/avatar2.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">You</div>
                            </div>
                            <div class="chats-text danger">Are we meeting today?</div>
                            <div class="chats-hour">08:59 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-left">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">Wincy</div>
                            </div>
                            <div class="chats-text info">Maybe in an hour or so?</div>
                            <div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-right">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">You</div>
                            </div>
                            <div class="chats-text danger">I need more information about Developer Plan.</div>
                            <div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-left">
                            <div class="chats-avatar">
                                <img src="img/avatar1.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">Wincy</div>
                            </div>
                            <div class="chats-text info">Well I am not sure.</div>
                            <div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
                        </li>
                        <li class="chats-right">
                            <div class="chats-avatar">
                                <img src="img/avatar2.svg" alt="Bootstrap Gallery">
                                <div class="chats-name">You</div>
                            </div>
                            <div class="chats-text danger">The rest of the team is not here yet.</div>
                            <div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card">
            <div class="card-header">Activity</div>
            <div class="customScroll">
                <div class="card-body pt-0 pb-0">
                    <ul class="project-activity">
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl">N</span>
                                <p class="desc-info"><span>Novane Durso</span> server not found, connection problem.</p>
                                <a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl secondary">L</span>
                                <p class="desc-info"><span>Luke Etheridge</span> send email notifications of subscriptions
                                </p>
                                <a href="#" class="activity-status">Mark as read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl">C</span>
                                <p class="desc-info"><span>Cosmin Capitanu</span> required change logs activity reports</p>
                                <a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl">M</span>
                                <p class="desc-info"><span>Moneyas Olina</span> strategic partnership plan</p>
                                <a href="#" class="activity-status">Mark as read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl secondary">A</span>
                                <p class="desc-info"><span>Auurso Novane</span> server not found, connection problem.</p>
                                <a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl">J</span>
                                <p class="desc-info"><span>Jovin Xamire</span> send email notifications of subscriptions</p>
                                <a href="#" class="activity-status">Mark as read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl">C</span>
                                <p class="desc-info"><span>Cosmin Capitanu</span> required change logs activity reports</p>
                                <a href="#" class="activity-status"><i class="icon-done_all"></i>Read</a>
                            </div>
                        </li>
                        <li class="activity-list">
                            <div class="detail-info">
                                <span class="lbl secondary">M</span>
                                <p class="desc-info"><span>Moneyas Olina</span> strategic partnership plan</p>
                                <a href="#" class="activity-status">Mark as read</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="card-header">Orders</div>
            <div class="customScroll">
                <div class="card-body">
                    <ul class="order-list">
                        <li>
                            <p class="order-num placed">#45763 <span class="order-date">45 mins</span></p>
                            <p class="order-desc">Jessse <span>placed</span> new order</p>
                        </li>
                        <li>
                            <p class="order-num cancelled">#48239 <span class="order-date">38 mins</span></p>
                            <p class="order-desc">Alex <span>cancelled</span> an order</p>
                        </li>
                        <li>
                            <p class="order-num">#41470 <span class="order-date">24 mins</span></p>
                            <p class="order-desc">Sunny <span>processed</span> an order</p>
                        </li>
                        <li>
                            <p class="order-num placed">#46360 <span class="order-date">10 mins</span></p>
                            <p class="order-desc">Thompson <span>placed</span> an order</p>
                        </li>
                        <li>
                            <p class="order-num placed">#55242 <span class="order-date">45 mins</span></p>
                            <p class="order-desc">Jessse <span>placed</span> new order</p>
                        </li>
                        <li>
                            <p class="order-num cancelled">#33561 <span class="order-date">38 mins</span></p>
                            <p class="order-desc">Alex <span>cancelled</span> an order</p>
                        </li>
                        <li>
                            <p class="order-num">#12876 <span class="order-date">24 mins</span></p>
                            <p class="order-desc">Sunny <span>processed</span> an order</p>
                        </li>
                        <li>
                            <p class="order-num placed">#22536 <span class="order-date">10 mins</span></p>
                            <p class="order-desc">Thompson <span>placed</span> an order</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <v>
        <!-- Row end -->
</div>
@endsection