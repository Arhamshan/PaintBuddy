@extends('layout.layout')
@section('content')


    <div class="form-group">
    <div class="row">


        

            <div class="container-fluid">

                
                <div class="col-md-2 col-md-offset-0">
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align:center"> Tasks </h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="/discount"> Assign New <br/> Discounts</a>
                                </li>
                                <li>
                                    <a href="assigndiscount"> Assign New<br/> Promotions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

</div>
<div class="panel panel-default, col-md-10 col-md-offset-0 ">
                    <div class="col-md-6 col-md-offset-0">
                        
                        {{ Form::open(array('url'=>'setpromotion' ,'method' => 'PUT')) }}


    <div class="form-group" class="col-md-6">
                           <div class="form-group col-md-offset-1">
                           <div class="form-group col-md-offset-1">
                                <p class="help-block" style="font-size:30px">
                                    <b>ASSIGN PROMOTION </b>
                                </p>
                                <hr/>
                            </div> 
                            
                            <div class="form-group" >
                                <div >
                                    <label class="control-label">Select an image asadaf</label>
                                    <input id="input-1" type="file" >
                                </div><br/><br/>

                                <div >
                                    {{ Form::label('body', 'Title')}}
                                    <div class="form-group">
                                        {{ Form::text('title', null, ['class'=>'form-control']) }}
                                    </div>
                                </div>    
                                <div >
                                    {{ Form::label('body', 'Body')}}
                                    <div class="form-group">
                                        {{ Form::textarea('body', null, ['class'=>'form-control']) }}
                                    </div>
                                    <!-- </div>
                                    <textarea name="boddy" class="form-control"></textarea>
                                </div> -->
                                </div>
                               
                                   

                                <div >
                                    <label for="startDate"> 
                                        Start Date
                                    </label>
                                </div>
                            <div class='input-group date' id="dp1">
                              <input type="date" name="start_date" class="form-control"/>
                            </div>
                            <div><br/></div>
                            <div>
                                <label for="endDate" >
                                    End Date
                                </label>
                            </div>
                            <div class='input-group date'  id="dp2">
                                <input type="date" name="end_date" class="form-control"/>
                            </div>

                          




                            <div class="form-group" class="col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />Check me out frst
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" >Asign Promotion</button><br/> 
                            </div><br/>
                            </div>

                            </div>

                        </div>
                        </div>

                          {{ Form::close() }}
                      
                            <div>
                                <button class="btn btn-primary" onclick="testalert()" > Alert</button><br/> 
                            </div><br/>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
function testalert(){
    sweetAlert("Oooops....", "Wel come bro", "success");
}

</script>


@stop