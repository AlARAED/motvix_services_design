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
                            <i class="fa fa-cogs"></i> Refrences
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
                                <th width="2%">#</th>

                                <th class="numeric"> name Germany</th>
                                <th class="numeric"> name English</th>
                                <th class="numeric"> link</th>
                                <th class="numeric"> category</th>
                                <th class="numeric"> display as</th>
                                <th class="numeric"> image</th>

                                <th class="numeric"> action</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($Refrence  as $Refrenc)

                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $Refrenc->name_ge}} </td>
                                    <td> {{ $Refrenc->name_en}}</td>

                                    <td> {{ Str::limit($Refrenc->link,10) }} </td>
                                    <td> {{ $Refrenc->CatName()->name_en}} </td>
                                    <td><?php if ($Refrenc->frame_tab == 1)
                                            echo "iframe";
                                        else {
                                            echo "new tab";
                                        }
                                        ?>

                                    </td>
                                    <td><img src="{{ asset('uploads/' .$Refrenc->image) }}" style="height: 155px;"></td>


                                    <td>
                                        <div class="btn-group">

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedite{{ $Refrenc->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#centralModalSmedel{{ $Refrenc->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>














                                <div class="modal fade" id="centralModalSmedite{{ $Refrenc->id }}" tabindex="-1"
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
                                                    {!!  Form::open(['url' => ['admin/editRefrenc',$Refrenc->id] ,'method' => 'POST','files' => true]) !!}
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <label for="fname">name eng </label>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <input type="text" name="name_en" required=""
                                                                   value=" {{ $Refrenc->name_en}}" style=" width: 30%;
  padding: 12px 20px; display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-25">
                                                            <label for="lname"> name ge </label>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <input type="text" name="name_ge" required=""
                                                                   value="{{ $Refrenc->name_ge}}" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-25">
                                                            <label for="lname"> link </label>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <input type="text" name="link" required=""
                                                                   value="{{ $Refrenc->link}}" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-25">
                                                            <label for="lname"> Category </label>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <select id="country" name="category_id" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">


                                                                <option
                                                                    value="{{$Refrenc->category_id}}">{{ $Refrenc->CatName()->name_en}} </option>
                                                                @foreach($Category  as $Categor)
                                                                    <option
                                                                        value="{{$Categor->id}}">{{$Categor->name_en}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-25">
                                                            <label for="lname"> display as </label>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <select id="country" name="frame_tab" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">

                                                                <option
                                                                    value="{{$Refrenc->frame_tab}}"><?php if ($Refrenc->frame_tab == 1)
                                                                        echo "iframe";
                                                                    else {
                                                                        echo "new tab";
                                                                    }
                                                                    ?> </option>

                                                                <option value="1">iframe</option>
                                                                <option value="2"> new tab</option>

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="fileinput fileinput-new" data-provides="fileinput">

                                                        <div class="fileinput-new thumbnail"
                                                             style="width: 200px; height: 150px;">
                                                            <img src="{{ asset('uploads/'.$Refrenc->image) }}" alt=""
                                                                 style="height: 155px;"/></div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                             style="max-width: 200px; max-height: 150px;"></div>
                                                        <div>
                                                            <span class="btn default btn-file"><input type="file"
                                                                                                      name="image"> </span>

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






                                <div class="modal fade" id="centralModalSmedel{{ $Refrenc->id }}" tabindex="-1"
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
                                                {!!  Form::open(['url' => ['admin/removeRefrenc',$Refrenc->id] ,'method' => 'POST','files' => true]) !!}

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
                                            <h4 class="modal-title w-100" id="myModalLabel"> Creare N </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                {!!  Form::open(['url' => ['admin/addRefrenc'] ,'method' => 'POST','files' => true]) !!}
                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="fname">name eng </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <input type="text" name="name_en" required="" style=" width: 30%;
  padding: 12px 20px; display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="lname"> name ge </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <input type="text" name="name_ge" required="" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="lname"> link </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <input type="text" name="link" required="" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="lname"> Category </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <select id="country" name="category_id" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 " required="">


                                                            @foreach($Category  as $Categor)
                                                                <option
                                                                    value="{{$Categor->id}}">{{$Categor->name_en}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-25">
                                                        <label for="lname"> display as </label>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <select id="country" name="frame_tab" required="" style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 ">


                                                            <option value="1">iframe</option>
                                                            <option value="2"> new tab</option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">


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
