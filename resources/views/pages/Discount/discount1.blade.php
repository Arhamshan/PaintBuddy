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
                                    <a href="#"> Assign New<br/> Promotions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

</div>
                    <div class="col-md-4 col-md-offset-0">
<div>
                        {{ Form::open(array('url'=>'addDiscount' ,'method' => 'PUT')) }}
    </div>                        <div class="form-group" class="col-md-6">
                           <div class="form-group">
                                <p class="help-block" style="font-size:30px">
                                    <b>ASSIGN DISCOUNT </b>
                                </p>
                                <hr/>
                            </div>        

                                <label for="InputItem">
                                    Item Category
                                </label>

                            </div>
                            <select name="itmcat" class="form-control">
                            @foreach($item as $user) 
                            <option>{{ $user->itName }}</option>
                            @endforeach
                            </select> 
                            <div>
                                <br/>
                            </div>
                             <div class="form-group" class="col-xs-3">
                                <label for="InputItem">
                                    Discount Type
                                </label>
                            
                            <div class="form-group">
                                <select name="disctyp"  class="form-control">
                                    <option> Seasonal discount </option>
                                    <option> Festival discount </option>
                                    <option> New year discount</option>
                                    <option> Year end discount</option>
                                    <option> Other types </option>
                                </select>
                            </div></div>
                            <div>
                                <br/>
                            </div>
                            <div class="form-group" class="col-xs-3">
                                           <div >
                                    <label for="InputPercentage">
                                        Percentage
                                    </label>
                                    <input type="text" name="Percentage" class="form-control" placeholder="%" id="InputPrice"/> <!-- required pattern="\d{1,2}"/> -->
                                    <P style="color:red">{{$errors->first('Percentage')}} </P>
                            
                                 
                                   

                            <div >
                                <label for="startDate"> 
                                    Start Date
                                </label>
                            </div>
                            <div class='input-group date' id="dp1">
                             <!--  class='onchange'
                            sweetalert website
                             -->
                              <input type="date" name="start_date" class="form-control"/>
                              <P style="color:red">{{$errors->first('start_date')}}</P>
                            </div>
                            <div><br/></div>
                            <div>
                                <label for="endDate" >
                                    End Date
                                </label>
                            </div>
                            <div class='input-group date'  id="dp2">
                                <input type="date" name="end_date" class="form-control"/>
                                <P style="color:red">{{$errors->first('end_date')}}</P>
                            </div>





                            <div class="form-group" class="col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />Check me out
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" onclick="function1()">Add Discount</button><br/> 
                            </div><br/>
                            </div>




                            {{ Form::close() }}






                
                            </div>
                       
                            <div>
                                <button class="btn btn-primary" onclick="testalert()"> Alert</button><br/> 
                            </div><br/>



        <div class="row"> 
            <form role="form" action="/viewDiscount" method="POST">   
                <div class="form-group" class="col-md-12">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">View Discount</button>   
                    </div> <br/>    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <br/>
                                <table class="table table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th class="col-md-2 text-center">
                                                Discount ID
                                            </th>
                                            <th class="col-md-2 text-center">
                                                 Item Name
                                            </th>
                                            <th class="col-md-2 text-center">
                                                Discount Type
                                            </th>
                                            <th class="col-md-2 text-center">
                                                Percentage
                                            </th>                                            
                                            <th class="col-md-2 text-center">
                                                Last Price
                                            </th>
                                            <th class="col-md-2 text-center">
                                                Start Date
                                            </th>
                                            <th class="col-md-2 text-center">
                                                End Date
                                            </th>  
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if (isset($table2)) {
                                               foreach( $table2 as $row ){
                                        ?>
                                        <tr>
                                            <td><?php echo $row->did; ?>  </td>
                                            <td><?php echo $row->iname; ?> </td>
                                            <td><?php echo $row->dtype; ?></td>
                                            <td><?php echo $row->ipersentage; ?></td>
                                            <td><?php echo $row->iprice; ?></td>
                                            <td><?php echo $row->sdate; ?></td>
                                            <td><?php echo $row->edate; ?></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>



function testalert(){
    sweetAlert("Oooops....", "Wel come bro", "error");
}


</script>


@stop