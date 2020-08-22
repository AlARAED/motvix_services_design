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
                            <i class="fa fa-cogs"></i> Brands
                            <a class="btn btn-circle btn-sm green" style="border-color: #e9f2f3;width: 90px;"
                               data-toggle="modal" data-target="#centralModalSmedeladd"> NEW+</a>

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
                                <th class="numeric"> Image</th>


                                <th class="numeric"> Action</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($brands  as $brand)

                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td>
                                        <img src="{{ asset('uploads/' .$brand->image) }}" style="height: 155px;">
                                    </td>


                                    <td>
                                        <div class="btn-group">


                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedel{{ $brand->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>










                                <div class="modal fade" id="centralModalSmedel{{ $brand->id }}" tabindex="-1"
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
                                                {!!  Form::open(['url' => ['admin/removebrands',$brand->id] ,'method' => 'POST','files' => true]) !!}

                                                <button type="submit" class="btn btn-primary btn-lg">yes</button>
                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            @endforeach


                            <div class="modal fade" id="centralModalSmedeladd" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel"
                                 aria-hidden="true">

                                <!-- Change class .modal-sm to change the size of the modal -->
                                <div class="modal-dialog modal-sm " role="document">


                                    <div class="modal-content" style="width: 500px;">
                                        <div class="modal-header">
                                            <h4 class="modal-title w-100" id="myModalLabel"> Create </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                {!!  Form::open(['url' => ['admin/brands'] ,'method' => 'POST','files' => true]) !!}
                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="fname">Image Brand </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">


                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new"
                                                                 data-provides="fileinput">


                                                                <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Select image </span>
                                                                            <span
                                                                                class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="image" required=""> </span>

                                                                </div>
                                                            </div>

                                                        </div>


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
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
