<style type="text/css">
        body{
					padding-top: 70px;
				}

	  .first{
			
	  }
	

/* .sliderWrapper {
	max-width: 100%;
	overflow: hidden;
	position: relative;
	margin: 10px auto;
	border: 5px solid #fff;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.15),0 2px 10px 0 rgba(0,0,0,0.11);
}
h1 { margin:150px auto 50px auto; text-align:center; color:#fff;} */


	</style>


<div class="container-fluid" id="bubbles">
	 <div class="row">
      <div class="col-lg-3" >
      </div>
	 	  <div class="col-lg-7" >
	 	  
        		
        	  	<div class="one"> 
        					<h4 class="first">About Us</h4>
        	        <p>Keeping you Informed with analytics</p>
        			</div>
        	  	<div class=" two"> 

        					<h4 class="first">Download App</h4>
        	         <p class="first-class">  <a href="https://www.apple.com/itunes/download/"><i class="fa fa-apple fa-4x" style="color:grey;"></i></a><a href="https://play.google.com/store"><i class="fa fa-android fa-4x" style="color:#4b7d2f;"></i></a></p>
        			</div>
        	  	<div class=" three"> 
        					<h5 class="first">Chart of The day</h5>
                    	  		<button class="btn btn-success btn-modal"
                            data-toggle="modal"
                            data-target="#fsModal">
                      VIEW CHART 
                    </button>
        			</div>
        	  	<div class=" four"> 
        					  <h4 class="first">Request Data</h4>
                      <button class="btn btn-success btn-modal"
                            data-toggle="modal"
                            data-target="#data_request">
                      REQUEST DATA
                    </button>
        			</div>
	            
	 	  </div>

       <div class="col-lg-1" >
      </div>

	 </div>
</div>
  

    <!-- Modal -->
  <div class="modal fade" id="data" role="dialog"
       data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        
              <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header" style="padding:35px 50px;">
            	    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon glyphicon-lock"></span>KNBS </h4> <p>All fields required</p>
               </div>
               <div class="modal-body" style="padding:40px 50px;">
                      <form name="myForm" role="form" method="post"
                        action="processdatarequest.php" onsubmit="return validateForm()">  
                			
                				<div class="form-group"  >  
                				     <label for="usrname"><span class="glyphicon glyphicon-user"></span>Name</label>
                					   <input class="form-control" placeholder="Name" name="name" type="text" required>  
                				</div>
                				<div class="form-group"  >  
                				     <label for="usrname"><span class="glyphicon glyphicon-envelope"></span>Email</label>
                					    <input class="form-control" placeholder="E-mail" name="email" type="email" required>  
                				</div>
                				<div class="form-group"  >  
                				     <label for="usrname"><span class="glyphicon glyphicon-list"></span>Dataset</label>
                					   <textarea rows="4" cols="60" class="form-control" name="dataset" required></textarea>					
                				</div>
                				<div class="form-group"  >  
                				     <label for="usrname"><span class="glyphicon glyphicon-tags"></span>Year</label>
                					   <input class="form-control" placeholder="Year" name="year" type="number" required>  
                				</div>
                      </form>
              			  <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="datarequest" >		
               </div>
        	  
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
               </div>
              
            </div>
      </div> 
  </div>
   <!-- End Modal -->