@extends('cpanel.layout.index')
@section('content')


    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->


        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">

                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Services
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>

                        </div>
                    </div>
                    <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <thead class="flip-content">
                            <tr>
                                <th width="3%"> #</th>

                                <th class="numeric"> Address Germany</th>
                                <th class="numeric"> Address English</th>
                                <th class="numeric"> Content Germany</th>

                                <th class="numeric"> Content ew English</th>

                                <th class="numeric"> Action</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($Service  as $Servic)

                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $Servic->addess1_ge}} </td>

                                    <td> {{ $Servic->addess1_en}}</td>

                                    <td> {{ $Servic->content_ge}} </td>

                                    <td> {{ $Servic->content_en}}</td>

                                    <td>
                                        <div class="btn-group">

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedite{{ $Servic->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>



                                <div class="modal fade" id="centralModalSmedite{{ $Servic->id }}" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel"
                                     aria-hidden="true">

                                    <!-- Change class .modal-sm to change the size of the modal -->
                                    <div class="modal-dialog modal-sm " role="document">


                                        <div class="modal-content" style="width: 500px;">
                                            <div class="modal-header">
                                                <h4 class="modal-title w-100" id="myModalLabel"> Edite </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    {!!  Form::open(['url' => ['admin/editeservice',$Servic->id] ,'method' => 'POST','files' => true]) !!}


                                                    <div class="row" class="col_lg_4 col-md-4 col-sm-4">
                                                        <div class="col_lg_4 col-md-4 col-sm-4">
                                                            <textarea
                                                                name="addess1_ge">{{ $Servic->addess1_ge}} </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row" class="col_lg_4 col-md-4 col-sm-4">

                                                        <div class="col_lg_4 col-md-4 col-sm-4">
                                                            <textarea
                                                                name="addess1_en">{{ $Servic->addess1_en}} </textarea>
                                                        </div>
                                                    </div>


                                                    <div class="row" class="col_lg_4 col-md-4 col-sm-4">

                                                        <div class="col_lg_4 col-md-4 col-sm-4">
                                                            <textarea
                                                                name="content_ge">{{ $Servic->content_ge}} </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row" class="col_lg_4 col-md-4 col-sm-4">

                                                        <div class="col_lg_4 col-md-4 col-sm-4">
                                                            <textarea
                                                                name="content_en">{{ $Servic->content_en}} </textarea>
                                                        </div>
                                                    </div>


                                                    <br>

                                                </div>
                                                <div class="modal-footer">


                                                    <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                     -->

                                                    <button type="submit" class="btn btn-primary btn-lg"
                                                            style="float: left;">save
                                                    </button>
                                                    {!! Form::close() !!}

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection