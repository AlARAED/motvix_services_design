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
                            <i class="fa fa-cogs"></i>Contact
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>

                        </div>
                    </div>
                    <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <thead class="flip-content">
                            <tr>
                                <th width="2%"> #</th>
                                <th class="numeric"> Name</th>
                                <th class="numeric"> Email</th>
                                <th class="numeric"> Message</th>

                                <th class="numeric"> Action</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($Conactus  as $Conactus)

                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $Conactus->name}}</td>
                                    <td> {{ $Conactus->email}} </td>
                                    <td> {{ $Conactus->message}}</td>
                                    <td>
                                        <div class="btn-group">

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedite{{ $Conactus->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>


                                <div class="modal fade" id="centralModalSmedite{{ $Conactus->id }}" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel"
                                     aria-hidden="true">

                                    <!-- Change class .modal-sm to change the size of the modal -->
                                    <div class="modal-dialog modal-sm" role="document">


                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title w-100" id="myModalLabel">Delete </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                are you sure to remove it ?
                                            </div>
                                            <div class="modal-footer">


                                                <!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
                                                 -->
                                                {!!  Form::open(['url' => ['admin/removeConactus',$Conactus->id] ,'method' => 'POST','files' => true]) !!}

                                                <button type="submit" class="btn btn-primary btn-lg">yes</button>
                                                {!! Form::close() !!}

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