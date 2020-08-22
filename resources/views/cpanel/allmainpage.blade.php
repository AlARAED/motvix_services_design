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
                            <i class="fa fa-cogs"></i> Main Page
                            <a class="btn btn-circle btn-sm green" style="border-color: #e9f2f3;width: 90px;"
                               href="/admin/NewPage"> NEW+</a>

                        </div>


                    </div>
                    <div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <thead class="flip-content">
                            <tr>
                                <th width="2%"> #</th>

                                <th class="numeric"> Title Germany</th>

                                <th class="numeric">Title English</th>
                                <th class="numeric"> link</th>
                                <th class="numeric"> Content English</th>
                                <th class="numeric"> Content Germany</th>

                                <th class="numeric"> Publish</th>
                                <th class="numeric"> Position</th>


                                <th class="numeric"> action</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($Pages  as $Page)

                                <tr>
                                    <td> {{ $loop->iteration }} </td>

                                    <td> {{ $Page->title_ge}} </td>
                                    <td> {{ $Page->title_en}}</td>
                                    <td> {{$Page->url_category }} </td>
                                    <td>  {{ Str::limit(strip_tags($Page->content_ge),10) }}
                                    </td>
                                    <td> {{ Str::limit(strip_tags($Page->content_en),10) }}
                                    </td>
                                    <td>   @if($Page->publish==1)publish  @else  unpublish @endif
                                    </td>
                                    <td>  @if($Page->position==1)Header  @else  footer @endif   </td>

                                    <td>
                                        <div class="btn-group">

                                            <a class="btn btn-primary" href="editemainpage/{{ $Page->id }}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedel{{ $Page->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>












                                <div class="modal fade" id="centralModalSmedel{{ $Page->id }}" tabindex="-1"
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
                                                {!!  Form::open(['url' => ['admin/removePage',$Page->id] ,'method' => 'POST','files' => true]) !!}

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
