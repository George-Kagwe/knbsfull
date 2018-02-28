



<style type="text/css">
    #slicky .item{
 /* background: #42bdc2;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;*/
}
.slick-prev:before, .slick-next:before{
    color:#fff;
  
}
.slick-next ..slick-prev .slick-arrow{
    z-index: 99999999;
}

.slick-prev {
    left: 50px;
    color: #fff; /*to notice it, is white*/
}
.slick-next {
    right: 50px;
    color: #fff; /*to notice it, is white*/
}
</style>

<!-- sectors -->
    <div class="container-fluid wow fadeIn " data-wow-delay="0.6s" id="sectorss" >
                      <h4 id="sectors-heading"><center>SECTORS</center></h4>
       
        </div> 
 <div class="container-fluid "        id="sectorss" >
     <div class="row">
         
           <div id="slicky" class="slicky">
                      
                       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s">    
                    <span class="fa-stack fa-2x">
                <i class="fa fa-circle  fa-stack-2x icon-a" id="fa"></i>
                <a href="#health_sector" data-toggle="modal" data-target="#health_sector">
                <i class="fa fa-medkit fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="text-weight-strong">Health</a></h4>          
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s"> 
                <span class="fa-stack fa-2x">
                <i class="fa fa-circle  fa-stack-2x icon-a" id="fa"></i>
                 <a href="#education_sector" data-toggle="modal" data-target="#education_sector">
                <i class="fa fa-book fa-stack-1x fa-inverse"></i> 
                </span>
                <h4 class="text-weight-strong">Education</a></h4>       
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s"> 
                <span class="fa-stack fa-2x">
                <i class="fa fa-circle   fa-stack-2x icon-a" id="fa"></i>
                <a href="#public_finance_sector" data-toggle="modal" data-target="#public_finance_sector">
                <i class="fa fa-money fa-stack-1x fa-inverse"></i> </span>
                <h4 class="text-weight-strong">Public Finance</a></h4>    
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s"> 

                <span class="fa-stack fa-2x">
                <i class="fa fa-circle  fa-stack-2x icon-a" id="fa"></i>

                <a href="#agriculture_sector" data-toggle="modal" data-target="#agriculture_sector">
                <i class="fa fa-pagelines fa-stack-1x fa-inverse" ></i>
                   </span>
                   <h4 class="text-weight-strong">Agriculture</a> </h4>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s">

                <span class="fa-stack fa-2x">
                <i class="fa fa-circle  fa-stack-2x icon-a" id="fa"></i> 
                <a href="#population_sector" data-toggle="modal" data-target="#population_sector">
                 
                <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                <h4 class="text-weight-strong">Population</a></h4>    
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 text-center wow fadeIn item" data-wow-delay="0.3s"> 
                <span class="fa-stack fa-2x">
                <i class="fa fa-circle   fa-stack-2x icon-a" id="fa"></i>
                <a href="#governance_sector" data-toggle="modal" data-target="#governance_sector">
                <i class="fa fa-bank fa-stack-1x fa-inverse"></i> </span>
                <h4 class="text-weight-strong">Governance</a></h4>    
                </div>          

            </div> 
    
   </div>
</div>
 




<script type="text/javascript">
    $(document).ready(function(){
      $('.slicky').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          dots:true,
          arrows:true
      });
    });
  </script>
