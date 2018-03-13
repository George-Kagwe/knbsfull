<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PUBLIC FINANCE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />
<!-- <link rel="stylesheet" href="css/common.css" type="text/css" /> -->


  <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>
   " rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/menu.css';?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/chart.css';?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/animate.css';?>" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style type="text/css">

</style>

<!-- jQuery 1.7+, IE 7+ -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.event.drag-1.5.1.min.js';?>"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.touchSlider.js';?>"></script>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	
	$("#touchSlider").touchSlider({
		/*
		autoplay : {
			enable : true,
			pauseHover : true,
			addHoverTarget : "", // 다른 오버영역 추가 ex) ".someBtn, .someContainer"
			interval : 3500
		},
		*/
		btn_prev : $("#touchSlider").next().find(".btn_prev"),
		btn_next : $("#touchSlider").next().find(".btn_next"),
		counter : function (e) {
            $("#count").html(" " + e.current + "  CHART OF " + e.total+"  CHART(S) of  "+document.title +" Sector");
          
		}
	});
	
	
	
});
//]]>
</script>
</head>

<body>
 
  <div id="touchSlider">
 
            <ul>
          
                 
                <?php foreach ($embed as $list):?>
              
                <li><div class="container-fluid">
                        <div class="row wow fadeIn" data-wow-delay="0.2s" id="">
                                
                                    <div class="col-lg-12" id="chart">
                                        <!-- <h2 id="chart_title"><center>MONEY AND BANKING FINANCIAL INSTITUTIONS</center></h2> -->
                                        <?php echo $list->embed_script;?>
                                    </div>
                        </div>
                    <div class="container">    
                </li>
                 <?php endforeach; ?>
                
             
                    
            </ul>
      </div>
        
<div class="btn_area">
    <!-- <button type="button" class="btn btn_prev"><i class="fa fa-arrow-left"></i></button>
    <button type="button" class="btn_next"><i class="fa fa-arrow-right"></i></button> -->
    <button type="button" class="btn navi btn_prev"><i class="fa fa-arrow-left"></i></button>
    <button type="button" class="btn navi btn_next"><i class="fa fa-arrow-right"></i></button>

    
    <div id="count" style="height:36px; font-size:16px; line-height:36px; text-align:center;">
          
    </div>
</div>
