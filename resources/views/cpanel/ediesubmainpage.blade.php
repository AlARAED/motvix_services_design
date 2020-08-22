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
        <h1 class="page-title"> Edite SubMain Page
            <small> Edite SubMain Page </small>
        </h1>
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
                                        <span class="caption-subject font-blue-madison bold uppercase"> Edite SubMain Page </span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            {!!  Form::open(['url' => ['admin/editesubmainpage/'.$Pages->id] ,'method' => 'POST','files' => true]) !!}


                                            <div class="form-group">
                                                <label class="control-label">title germany</label>
                                                <input type="text" class="form-control"
                                                       name="title_ge" required=""
                                                       value="{{ $Pages->title_ge }}"/></div>

                                            <div class="form-group">
                                                <label class="control-label">title english</label>
                                                <input type="text" class="form-control"
                                                       name="title_en" required=""
                                                       value="{{ $Pages->title_en }}"/></div>


                                            <div class="form-group">
                                                <label class="control-label">Content germany</label>
                                                <textarea class="form-control" rows="30" name="content_ge">
                                                                    
                                                                    {{ $Pages->content_ge }}
                                                                </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Content english
                                                </label>
                                                <textarea class="form-control" rows="30" placeholder=""
                                                          name="content_en"> 
                                                                    {{ $Pages->content_en }}
                                                                 </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">display</label>

                                                <select id="country" name="publish" class="form-control">

                                                    <option value="{{ $Pages->publish }}">
                                                        @if($Pages->publish==1)publish  @else
                                                            unpublish @endif  </option>
                                                    <option value="1"> Publish</option>
                                                    <option value="0"> unpublish</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label">Main Menu</label>


                                                <select id="country" name="page_id" class="form-control">

                                                    <option
                                                        value="{{$Pages->pageName()->id}}">  {{$Pages->pageName()->title_en }} </option>

                                                    @foreach($mainPage  as $mainPa)

                                                        <option
                                                            value="{{$mainPa->id}}">  {{$mainPa->title_en}} </option>
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