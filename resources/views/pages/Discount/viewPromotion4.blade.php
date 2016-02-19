@extends('layout.layout')
@section('content')


   	<div class="form-group">


        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="/enterpromotion"  method="POST">
                        <div class="form-group" class="col-md-6">
                        	<div class="col-md-20">
			                    <img src="images/p2.jpg" style="height: 250px;width: 600px; margin-left:280px"/>
			                
			                	<label class="col-md-12" style="color:green; font-size:30px; text-align:center " ><b>
                				New Promotion For You..!!!
                				</b>
                			</label>
                			<br/><br/>
                			<p style="font-size:20px; text-align:center">
                				A greate opportunity to win a price...!!!! <br/>
                				To register to promotion..<br/> click the Enter button...

                			</p>
                			</div>
                			<div class="form-group" class="col-md-6" style="text-align:center">
                			
                            <br/>
                			<button type="submit" class="btn btn-success" >Enter </button>

                            <!-- <div class="button-group"> 
                			<a href="/registerpromotion">Enter </a>
                            </div>
 -->

                            

                			<!--<script src="js/sweetalert.min.js"></script>

                			<script >
                				swal({
                					title:'Great Job',
                					type:'success'
                				});

                			</script>
                			-->







                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop