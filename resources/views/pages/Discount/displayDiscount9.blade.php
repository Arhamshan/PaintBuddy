@extends('layout.layout')
@section('content')





<div class="form-group">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form role="form" >
                    <div class="form-group" class="col-xs-3">
                        <h2 style="color:green">Discount Offers </h2><hr/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


                            <div class="container-fluid">
            				<div class="row">
							
                            <div class="col-sm-4">
			                    <img src="images/d4.jpg" style="height: 250px;width: 1000px; margin-left:350px, alignment: center"/>
			                
                			</div>
                            </div>
                            </div>
                            

                            <div class="form-group" class="col-xs-3">

                                <label for="InputItem" style="color:red">
                                    <b><b>Latest Discounts</b></b>
                                </label>
                             </div>
                             <div class="row">
                                @foreach($diplaydisc as $dpds1)
                                    <div  class="col-sm-4">
                                        <img  src="{{ $dpds1->imgpath }}" style="height: 200px; width: 180px; alignment: right" class="img-rounded"/>
                                        <div style="color:#009933"><b>{{ $dpds1->ipersentage }} <t/>% OFF</b></div>
                                        <div style="color:#00cc99"><b>price : <del style="color:red">${{ $dpds1->price }}</del> ${{ $dpds1->iprice }}</b></div>
                                        <div style="color:#009933 "><b>Up To : {{ $dpds1->edate }}</b></div><br/>
                                    </div>
                                 @endforeach

                       		</div>
            
@stop