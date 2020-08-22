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
                                        <span class="caption-subject font-blue-madison bold uppercase">About us</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab">About us Info</a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab">Change images</a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/Changeseaboutussection'] ,'method' => 'POST','files' => true]) !!}


                                            <div class="form-group">
                                                <label class="control-label">Address Germany</label>
                                                <textarea class="form-control" rows="1"
                                                          name="addess1_ge">{{$AboutSection->addess1_ge}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Address English</label>
                                                <textarea class="form-control" rows="1"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess1_en">{{$AboutSection->addess1_en}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">content Germany</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="content_ge">{{$AboutSection->content_ge}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Content English</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="content_en">{{$AboutSection->content_en}} </textarea>
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
                                            {!!  Form::open(['url' => ['admin/Changeseaboutussection'] ,'method' => 'POST','files' => true]) !!}
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$AboutSection->image1) }}"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image1"> </span>

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$AboutSection->image2) }}"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image2"> </span>

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$AboutSection->image3) }}"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image3"> </span>

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$AboutSection->image4) }}"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image4"> </span>

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$AboutSection->image5) }}"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image5"> </span>

                                                    </div>
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