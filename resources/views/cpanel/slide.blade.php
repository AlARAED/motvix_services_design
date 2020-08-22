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
                                            class="caption-subject font-blue-madison bold uppercase">Slider Section</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/ChangeSliderSection'] ,'method' => 'POST','files' => true])  !!}


                                            <div class="form-group">
                                                <label class="control-label">The First Address Germany </label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess1_ge">{{$Slider->addess1_ge}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label"> The First Address English </label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess1_en">{{$Slider->addess1_en}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">The Second Address Germany</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess2_ge">{{$Slider->addess2_ge}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">The Second Address English</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess2_en">{{$Slider->addess2_en}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label"> The Third Address Germany </label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess3_ge">{{$Slider->addess3_ge}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">
                                                    The Third Address English</label>
                                                <textarea class="form-control" rows="3"
                                                          placeholder="We are KeenThemes!!!"
                                                          name="addess3_en">{{$Slider->addess3_en}} </textarea>
                                            </div>


                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/' .$Slider->image) }}" alt=""/>
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

                                            <div class="margiv-top-10">

                                                <button type="submit" class="btn green"
                                                >save Changes
                                                </button>


                                            </div>
                                            {!! Form::close() !!}
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
