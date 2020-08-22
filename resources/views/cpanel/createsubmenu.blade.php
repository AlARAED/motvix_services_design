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
                                        <span class="caption-subject font-blue-madison bold uppercase">New  SubMenue Section</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/NewsubMenuPage'] ,'method' => 'POST','files' => true]) !!}


                                            <div class="form-group">
                                                <label class="control-label">Title
                                                    Germany</label>
                                                <input type="text" class="form-control" name="title_ge" required=""/>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Title English</label>
                                                <input type="text" class="form-control"
                                                       name="title_en" required=""/></div>


                                            <div class="form-group">
                                                <label class="control-label">Content Germany</label>
                                                <textarea class="form-control" rows="30" name="content_ge"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Content English
                                                </label>
                                                <textarea class="form-control" rows="30" placeholder=""
                                                          name="content_en"> </textarea>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Display</label>

                                                <select id="country" name="publish" class="form-control">
                                                    <option value="1"> Publish</option>
                                                    <option value="0"> unpublish</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Main Menu</label>


                                                <select id="country" name="page_id" class="form-control">
                                                    @foreach($Pages  as $Page)

                                                        <option value="{{$Page->id}}">  {{$Page->title_en}} </option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="margiv-top-10">

                                                <button type="submit" class="btn green"
                                                >save
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