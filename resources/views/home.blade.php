@extends('layouts.app')

@section('title', 'Fluffs')
@section('content')
    <section class="nav-sec">
        <div class="d-flex justify-content-between">
            <div class="p-2 nav-icon-lg mint-green">
                <a class="nav-icon" href="#"><em class="fa fa-home"></em>
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
                <a class="nav-icon" href="#"><em class="fa fa-align-left"></em>
                    <span>{{ __('Stories') }}</span>
                </a>
            </div>
            <div class="p-2 nav-icon-lg dark-black">
                <a class="nav-icon" href="#"><em class="fa fa-user"></em>
                    <span>{{ __('Profile') }}</span>
                </a>
            </div>
        </div>
    </section>
    <section class="newsfeed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#">
                        <div class="storybox">
                            <div class="story-body text-center">
                                <div class=""><img class="img-circle" src="assets/img/users/10.jpg" alt="user"></div>
                                <h4>Clifford Graham</h4>
                                <p>2 hours ago</p>
                            </div>		  
                        </div>
                    </a>
                
                    <a href="#">
                        <div class="storybox">
                            <div class="story-body text-center">
                                <div class=""><img class="img-circle" src="assets/img/users/13.jpeg" alt="user"></div>
                                <h4>Eleanor Harper</h4>
                                <p>4 hours ago</p>
                            </div>		  
                        </div>
                    </a>
                
                    <a href="#">
                        <div class="storybox">
                            <div class="story-body text-center">
                                <div class=""><img class="img-circle" src="assets/img/users/12.jpg" alt="user"></div>
                                <h4>Sean Coleman</h4>
                                <p>5 hours ago</p>
                            </div>		  
                        </div>
                    </a>
                
                    <a href="#">
                        <div class="storybox">
                            <div class="story-body text-center">
                                <div class=""><img class="img-circle" src="assets/img/users/15.jpg" alt="user"></div>
                                <h4>Vanessa Wells</h4>
                                <p>5 hours ago</p>
                            </div>		  
                        </div>
                    </a>

                    <div class="trending-box hidden-xs hidden-md">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="photo_stories.html"><h4>More stories</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control no-border" rows="3" name="title" placeholder="Type something...">
                            <div class="box-footer clearfix">
                                <ul class="nav nav-pills nav-sm">
                                    <li class="nav-item">
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="@lang('ADD PHOTOS')">
                                            <label for="upload-image" class="display-inline">
                                                <i class="fa fa-camera text-muted"></i>
                                            </label>
                                            <input class="input-image form-control @error('image') is-invalid @enderror" type="file" id="upload-image" name="image[]" accept="image/*" multiple>
                                        </a>
                                    </li>
                                </ul>
                                <button type="submit" class="kafe-btn kafe-btn-mint-small pull-right btn-sm">{{ __('Upload') }}</button>
                            </div>
                            <div id="dvPreview">
                            </div>
                        </form>
                    </div>
                    <div class="cardbox">
                        <div class="cardbox-heading">
                            <div class="dropdown pull-right">
                                <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <em class="fa fa-ellipsis-h"></em>
                                </button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right drop-right" role="menu">
                                    <a class="dropdown-item" href="#">{{ __('Hide post') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('Stop following') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('Report') }}</a>
                                </div>
                            </div>
                            <div class="media m-0">
                                <div class="d-flex mr-3">
                                    <a href="#"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="User"></a>
                                </div>
                                <div class="media-body">
                                    <p class="m-0">Benjamin Robinson</p>
                                    <small><span>10 hours ago</span></small>
                                </div>
                            </div>
                        </div>
                        <div class="cardbox-item">
                            <a href="#myModal" data-toggle="modal">
                                <img class="img-responsive" src="assets/img/posts/1.jpg" alt="MaterialImg">
                            </a> 
                        </div>
                        <div class="cardbox-base">
                            <ul>
                                <li><a href="#"><img src="assets/img/users/1.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/2.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/4.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/5.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/6.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/7.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/8.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/9.jpg" class="img-responsive img-circle" alt="User"></a></li>
                                <li><a href="#"><img src="assets/img/users/10.jpg" class="img-responsive img-circle" alt="User"></a></li>
                            </ul>
                        </div>
                        <div class="cardbox-like">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i></a><span> 786,286</span></li>
                                <li><a href="#" title="" class="com"><i class="fa fa-comments"></i></a> <span class="span-last"> 126,400</span></li>
                            </ul>
                        </div>		
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="suggestion-box full-width">
                        <div class="suggestions-list">
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/17.jpeg" alt="Image">
                                <div class="name-box">
                                    <h4>Anthony McCartney</h4>
                                    <span>@antony</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/16.jpg" alt="Image">
                                <div class="name-box">
                                    <h4>Sean Coleman</h4>
                                    <span>@sean</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/14.jpg" alt="Image">
                                <div class="name-box">
                                    <h4>Francis Long</h4>
                                    <span>@francis</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/11.jpg" alt="Image">
                                <div class="name-box">
                                    <h4>Vanessa Wells</h4>
                                    <span>@vannessa</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/9.jpg" alt="Image">
                                <div class="name-box">
                                    <h4>Anna Morgan</h4>
                                    <span>@anna</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                            <div class="suggestion-body">
                                <img class="img-responsive img-circle" src="assets/img/users/8.jpg" alt="Image">
                                <div class="name-box">
                                    <h4>Clifford Graham</h4>
                                    <span>@clifford</span>
                                </div>
                                <span><i class="fa fa-plus"></i></span>
                            </div>
                        </div><!--suggestions-list end-->
                    </div>	

                    <div class="trending-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Trending Photos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="trending-box">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/17.jpg" class="img-responsive" alt="Image"/></a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/12.jpg" class="img-responsive" alt="Image"/></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/21.gif" class="img-responsive" alt="Image"/></a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/23.gif" class="img-responsive" alt="Image"/></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/11.jpg" class="img-responsive" alt="Image"/></a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#"><img src="assets/img/posts/20.jpg" class="img-responsive" alt="Image"/></a>
                            </div>
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
                            <img class="img-responsive" src="assets/img/posts/1.jpg" alt="Image"/>
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
                                    <li>
                                        <div class="comment-img">
                                            <img src="assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Vanessa Wells</a></strong>
                                            <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-img">
                                            <img src="assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Sean Coleman</a></strong>
                                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-img">
                                            <img src="assets/img/users/13.jpeg" class="img-responsive img-circle" alt="Image"/>
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Anna Morgan</a></strong>
                                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-img">
                                            <img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Allison Fowler</a></strong>
                                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="modal-meta-bottom">
                                    <ul>
                                        <li>
                                            <a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
                                            <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> 
                                        </li>
                                        <li>
                                            <span class="thumb-xs">
                                                <img class="img-responsive img-circle" src="assets/img/users/13.jpeg" alt="Image">
                                            </span>
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
@section('script')
<script language="javascript" type="text/javascript">
    $(function () {
        $("#upload-image").change(function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = $("#dvPreview");
                dvPreview.html("");
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                $($(this)[0].files).each(function () {
                    var file = $(this);
                    if (regex.test(file[0].name.toLowerCase())) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = $("<img />");
                            img.attr("style", "height:100px;width: 100px");
                            img.attr("src", e.target.result);
                            dvPreview.append(img);
                        }
                        reader.readAsDataURL(file[0]);
                    } else {
                        alert(file[0].name + " is not a valid image file.");
                        dvPreview.html("");
                        return false;
                    }
                });
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        });
    });
    </script>
@endsection