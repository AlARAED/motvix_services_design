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

                <div class="profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span
                                            class="caption-subject font-blue-madison bold uppercase">Website setting</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">Website Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">Change logo</a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/Changesettingwebs'] ,'method' => 'POST','files' => true]) !!}
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" value="{{$setting->name}}"
                                                       name="name"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" class="form-control" value="{{$setting->email}}"
                                                       name="email"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Mobile Number</label>
                                                <input type="text" placeholder="+1 646 580 DEMO (6284)"
                                                       class="form-control" value="{{$setting->Mobile_no}}"
                                                       name="Mobile_no"/></div>


                                            <div class="form-group">
                                                <label class="control-label">short description Germany</label>
                                                <input type="text" placeholder="Web Developer" class="form-control"
                                                       value="{{$setting->shortdesc_ge}}" name="shortdesc_ge"/></div>

                                            <div class="form-group">
                                                <label class="control-label">short description English</label>
                                                <input type="text" placeholder="Web Developer" class="form-control"
                                                       value="{{$setting->shortdesc_en}}" name="shortdesc_en"/></div>


                                            <div class="form-group">
                                                <label class="control-label"> clients</label>
                                                <input type="text" class="form-control"
                                                       name="clients" value="{{$setting->clients}}"/></div>

                                            <div class="form-group">
                                                <label class="control-label">facebook Url</label>
                                                <input type="text" class="form-control"
                                                       name="fb" value="{{$setting->fb}}"/></div>


                                            <div class="form-group">
                                                <label class="control-label">twitter </label>
                                                <input type="text" class="form-control"
                                                       name="twitter" value="{{$setting->twitter}}"/></div>


                                            <div class="form-group">
                                                <label class="control-label">instegram Url</label>
                                                <input type="text" class="form-control"
                                                       name="instegram" value="{{$setting->instegram}}"/></div>


                                            <div class="form-group">
                                                <label class="control-label">linked in Url</label>
                                                <input type="text" class="form-control"
                                                       name="lin" value="{{$setting->lin}}"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Website Url</label>
                                                <input type="text" placeholder="http://www.mywebsite.com"
                                                       class="form-control" name="" value="{{$setting->WebsiteUrl}}"/>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">About Germany</label>
                                                <textarea class="form-control" rows="10"
                                                          name="about_ge">{{$setting->about_ge}} </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">About English</label>
                                                <textarea class="form-control" rows="10"
                                                          name="about_en">{{$setting->about_en}} </textarea>
                                            </div>


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
                                            {!!  Form::open(['url' => ['admin/Changesettingaweblogo'] ,'method' => 'POST','files' => true]) !!}
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$setting->image) }}" alt=""/>
                                                    </div>
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