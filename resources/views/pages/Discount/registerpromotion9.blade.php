@extends('layout.layout')
@section('content')




    <div class="form-group">

        

            <div class="container-fluid">
                <div class="row">
                <div class="panel panel-default, col-md-10 col-md-offset-0 ">
                    <div class="col-md-8">


                        <form role="form" action="regpromotion" method="POST">
                            <div class="form-group" class="col-md-8">
                                            
                                <div class="form-group">
                                    <p class="help-block" style="font-size:30px">
                                        <b>Registry Form for Promotion</b>
                                    </p>
                                    <p class="help-block" style="font-size:20px">
                                        Fill in all the fields to submit your entry...!!!
                                    </p><br/>

                                 </div>
                                <div>
                                    <label for="Inputfname">
                                        First Name 
                                    </label>
                                </div>
                                <input type="text" name="first_name" class="form-control" id="Inputfname"/>
                                <P style="color:red">{{$errors->first('first_name')}}</P><br/>
                                <div>
                                    <label for="Inputlname">
                                       Last Name
                                    </label>
                                </div>    
                                <input type="text" name="last_name" class="form-control" id="Inputlname" />
                                <P style="color:red">{{$errors->first('last_name')}}</P><br/>
                                <div>
                                    <label for="Inputfname">
                                        Email
                                    </label>
                                </div>                                
                                <input type="email" name="email" class="form-control" id="Inputemail1"/>
                                <P style="color:red">{{$errors->first('email')}}</P><br/>
                                <div>
                                    <label for="Inputfname">
                                        Contact number test
                                    </label>
                                </div>                                    
                                <input type="integer" name="contact_number" class="form-control" id="Inputno"  />
                                <P style="color:red">{{$errors->first('contact_number')}}</P><br/>
                                <div>
                                <label for="Inputfname">
                                    Address
                                </label>
                                </div>                                
                                <input type="address" name="address" class="form-control" id="Inputadd"/>
                                <P style="color:red">{{$errors->first('address')}}</P><br/>
                                <div class="checkbox">
                                <label>
                                    <input type="checkbox" />Check to accept the Terms and Conditions of this Promotion
                                </label>
                                </div>
                                       
                                       


                                <!-- 
                                <div class="form-group">
                                    <label for="exampleInputFile">
                                        File input
                                    </label>
                                    <input type="file" id="exampleInputFile" />
                                        <p class="help-block">
                                            Example block-level help text here.
                                        </p>
                                 </div>
                                        <div class="checkbox">
                                             
                                            <label>
                                                <input type="checkbox" /> Check me out
                                            </label>
                                             -->
                                        
                                        <button type="submit" class="btn btn-success">
                                            Submit My Entry
                                        </button>
                                        <br/>
                                    </div> 



<!-- 
                                <label for="InputItem">
                                    Item Category 
                                </label>
 -->
                            </div>









                        </form>
                    </div>
                </div>











            </div>
            </div>
            

        </div>

 

@stop