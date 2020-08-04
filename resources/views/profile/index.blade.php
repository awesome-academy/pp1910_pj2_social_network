@extends('layouts.app')

@section('title', 'Fluffs')
@section('content')
    <section class="nav-sec">
        <div class="d-flex justify-content-between">
            <div class="p-2 nav-icon-lg dark-black">
                <a class="nav-icon" href="{{ route('home') }}"><em class="fa fa-home"></em>
                    <span>{{ __('Home') }}</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg clean-black">
                <a class="nav-icon" href="#"><em class="fa fa-crosshairs"></em>
                    <span>{{ __('Explore') }}</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg dark-black">
                <a class="nav-icon" href="#"><em class="fab fa-instagram"></em>
                    <span>{{ __('Upload') }}</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg clean-black">
                <a class="nav-icon" href="{{ route('user.profile', auth()->user()->username) }}"><em class="fa fa-align-left"></em>
                    <span>{{ __('Stories') }}</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg mint-green">
                <a class="nav-icon" href="#"><em class="fa fa-user"></em>
                    <span>{{ __('Profile') }}</span>
                </a>
            </div>
        </div>
    </section>
    <section class="profile-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <aside id="leftsidebar" class="sidebar">
                        <ul class="list">
                            <li>
                                <div class="user-info">
                                    <div class="image">
                                        <a href="#">
                                            <img src="#" class="img-responsive img-circle" alt="User" onerror="this.src='{{ asset('assets/img/avatar.png') }}'">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h4>{{ auth()->user()->name }}</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <small class="text-muted"><a href="#">320 Posts <em class="fa fa-angle-right pull-right"></em></a> </small><br/>
                                <small class="text-muted"><a href="#">2456 Followers <em class="fa fa-angle-right pull-right"></em></a> </small><br/>
                                <small class="text-muted"><a href="#">456 Following <em class="fa fa-angle-right pull-right"></em></a> </small>
                                <hr>
                                <small class="text-muted">Birthday: </small>
                                <p>{{ auth()->user()->birthday }}</p>
                                <hr>
                                <small class="text-muted">Address: </small>
                                <p>{{ auth()->user()->address }}</p>
                                <hr>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <a href="#myModal" data-toggle="modal">
                            <div class="explorebox" >
                                <img class="img-profile" src="assets/img/posts/6.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="suggestion-box full-width">
                        <div class="suggestions-list">
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/1.jpg" alt="">
                                <div class="name-box">
                                    <h4>Vanessa Wells</h4>
                                    <span>@vannessa</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/2.jpg" alt="">
                                <div class="name-box">
                                    <h4>Anthony McCartney</h4>
                                    <span>@antony</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/3.jpg" alt="">
                                <div class="name-box">
                                    <h4>Anna Morgan</h4>
                                    <span>@anna</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/4.jpg" alt="">
                                <div class="name-box">
                                    <h4>Sean Coleman</h4>
                                    <span>@sean</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/5.jpg" alt="">
                                <div class="name-box">
                                    <h4>Grace Karen</h4>
                                    <span>@grace</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/6.jpg" alt="">
                                <div class="name-box">
                                    <h4>Clifford Graham</h4>
                                    <span>@clifford</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="trending-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>{{ __('Photos') }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="trending-box">
                        <div class="col-lg-6">
                            <a href="#"><img src="assets/img/posts/17.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#"><img src="assets/img/posts/12.jpg" class="img-responsive" alt="Image"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 modal-image">
                            <img class="img-responsive" src="assets/img/posts/9.jpg" alt="Image"/>
                        </div>
                        <div class="col-md-4 modal-meta">
                            <div class="modal-meta-top">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                                <div class="img-poster clearfix">
                                    <a href=""><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="Image"/></a>
                                    <strong><a href="">Benjamin</a></strong>
                                    <span>12 minutes ago</span><br/>
                                    <a href="" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
                                </div>

                                <ul class="img-comment-list">
                                    <li>
                                        <div class="comment-img">
                                            <img src="assets/img/users/17.jpeg" class="img-responsive img-circle" alt="Image"/>
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Anthony McCartney</a></strong>
                                            <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="modal-meta-bottom">
                                    <ul>
                                        <li><a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> |
                                            <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
                                        <li>
			                                <span class="thumb-xs"><img class="img-responsive img-circle" src="assets/img/users/13.jpeg" alt="Image"></span>
                                            <div class="comment-body">
                                                <input class="form-control input-sm" type="text" placeholder="Write your comment...">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
