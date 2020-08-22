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
                                        <i class="fa fa-cogs"></i> Category
                                        <a class="btn btn-circle btn-sm green" style="border-color: #e9f2f3;width: 90px;" data-toggle="modal" data-target="#centralModalSmedeladd"> NEW+</a>

                                      </div>

                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                      
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                            <tr>
                                                <th width="3%"> # </th>
                                                <th class="numeric"> Name Germany </th>
                                                       <th class="numeric"> Name English </th>

                                
                                                 <th class="numeric"> Action </th>

                                              
                                            </tr>
                                        </thead>
                                        <tbody>


                                              @foreach($Category  as $Categor)

                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                            
                                                <td> {{ $Categor->name_ge}} </td>

                                                    <td> {{ $Categor->name_en}}</td>
                                            
                                            <td>
                                                    <div class="btn-group">

                                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSmedite{{ $Categor->id }}">
<i class="fa fa-edit"></i>
                                                             </button> 

                                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSmedel{{ $Categor->id }}">
                                                           <i class="fa fa-trash" aria-hidden="true"></i>
                                                             </button>

                                                         





                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            













     <div class="modal fade" id="centralModalSmedite{{ $Categor->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm " role="document">


    <div class="modal-content"   style="width: 500px;" >
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel"> Edite  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="container">
              {!!  Form::open(['url' => ['admin/editeCategor',$Categor->id] ,'method' => 'POST','files' => true]) !!}
 
    <div class="row">
      <div class="col-25">
        <label for="lname"> name ge   </label>
      </div>
      <div class="col-75">


        <input type="text" name="name_ge" required="" value="{{ $Categor->name_ge}}" style=" width: 30%;
  padding: 12px 20px; display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;">
      </div>
    </div>
    


    <div class="row">
      <div class="col-25">
        <label for="fname">name eng   </label>
      </div>
      <div class="col-75">
        <input type="text"  name="name_en" required="" value=" {{ $Categor->name_en}}" style=" width: 30%;
  padding: 12px 20px; display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;">
      </div>
    </div>
    <br>
      
         </div>
      <div class="modal-footer">


<!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
 -->

        <button type="submit" class="btn btn-primary btn-lg" style="float: left;">save  </button>
         {!! Form::close() !!}

      </div> 

    </div>
  </div>
</div>      </div>
                                            
                                            
   



   <div class="modal fade" id="centralModalSmedel{{ $Categor->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Delete </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
are you sure to remove it ?
      </div>
      <div class="modal-footer">


<!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
 -->
              {!!  Form::open(['url' => ['admin/removeCategor',$Categor->id] ,'method' => 'POST','files' => true]) !!}

        <button type="submit" class="btn btn-primary btn-lg">yes  </button>
         {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>


                                            
        @endforeach




        <div class="modal fade" id="centralModalSmedeladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm " role="document">


    <div class="modal-content"   style="width: 500px;" >
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel"> Insert  </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="container">
              {!!  Form::open(['url' => ['admin/addCategory'] ,'method' => 'POST','files' => true]) !!}
 
    <div class="row">
      <div class="col-25">
        <label for="lname"> name ge   </label>
      </div>
      <div class="col-lg-12 col-sm-12">

        <input type="text" name="name_ge" required="" value="{{ $Categor->name_ge}}"  style=" width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
 "   required="">




      </div>
    </div>


<div class="row">
      <div class="col-25">
        <label for="fname">name eng   </label>
      </div>
      <div class="col-lg-12 col-sm-12">



          <input type="text"  name="name_en" required="" value=" {{ $Categor->name_en}}" style=" width: 30%;
  padding: 12px 20px; display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;" required="">



      </div>
    </div>


    
    <br>
      
         </div>
      <div class="modal-footer">


<!--         <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">اعلاق</button>
 -->

        <button type="submit" class="btn btn-primary btn-lg" style="float: left;">save  </button>
         {!! Form::close() !!}

      </div> 

    </div>
  </div>
</div>      </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                @endsection