@extends('cpanel.layout.index')
@section('content')

    <link href="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet"
          type="text/css"/>

    <link href="{{url('admin/')}}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{url('admin/')}}/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{url('admin/')}}/assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('admin/')}}/assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{url('admin/')}}/assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <script src="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
            type="text/javascript"></script>
    <script src="{{url('admin/')}}/assets/pages/scripts/profile.min.js" type="text/javascript"></script>


    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->

        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet ">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="{{ asset('uploads/' .$admin->image) }}" class="img-responsive" alt=""></div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> {{$admin->name}}</div>
                            <div class="profile-usertitle-job"> {{$admin->occupaion}} </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->

                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->

                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                    <!-- PORTLET MAIN -->

                    <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span
                                            class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/Changesettingadmin'] ,'method' => 'POST','files' => true]) !!}
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" placeholder="John" class="form-control"
                                                       value="{{$admin->name}}" name="name"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" placeholder="Doe" class="form-control"
                                                       value="{{$admin->email}}" name="email"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Mobile Number</label>
                                                <input type="text" placeholder="+1 646 580 DEMO (6284)"
                                                       class="form-control" value="{{$admin->Mobile_no}}"
                                                       name="Mobile_no"/></div>

                                            <div class="form-group">
                                                <label class="control-label">Occupation</label>
                                                <input type="text" placeholder="Web Developer" class="form-control"
                                                       value="{{$admin->occupaion}}" name="occupaion"/></div>
                                            <div class="form-group">
                                                <label class="control-label">About</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="about">{{$admin->about}} </textarea>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="control-label">Website Url</label>
                                                <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div> -->
                                            <div class="margiv-top-10">

                                                <button type="submit" class="btn green"
                                                >save Changes
                                                </button>


                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <!-- END PERSONAL INFO TAB -->
                                        <!-- CHANGE AVATAR TAB -->
                                        <div class="tab-pane" id="tab_1_2">
                                            <p></p>
                                            {!!  Form::open(['url' => ['admin/Changesettingadminimage'] ,'method' => 'POST','files' => true]) !!}
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$admin->image) }}" alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image"> </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists"
                                                           data-dismiss="fileinput"> Remove </a>
                                                    </div>
                                                </div>
                                                <div class="clearfix margin-top-10">
                                                    <span class="label label-danger">NOTE! </span>
                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">


                                                <button type="submit" class="btn green"
                                                >Submit
                                                </button>

                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <!-- END CHANGE AVATAR TAB -->
                                        <!-- CHANGE PASSWORD TAB -->
                                        <div class="tab-pane" id="tab_1_3">
                                            {!!  Form::open(['url' => ['admin/Changesettingadminpass'] ,'method' => 'POST','files' => true]) !!}

                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="form-control" name="password"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="form-control" required=""/></div>
                                            <div class="margin-top-10">

                                                <button type="submit" class="btn green"> Change Password</button>

                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <!-- END CHANGE PASSWORD TAB -->
                                        <!-- PRIVACY SETTINGS TAB -->

                                        <!-- END PRIVACY SETTINGS TAB -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    </div>
@endsection