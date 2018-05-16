<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php

     
    echo $title;
    ?></title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link href="<?php echo base_url().'assets/slick/slick.css';?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/slick/slick-theme.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/menu.css';?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/chart.css';?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/animate.css';?>" rel="stylesheet">
      
    
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/slick.min.js';?>"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">

function lookup(inputString) {
if(inputString.length == 0) {
    $('#suggestions').hide();
} else {
    $.post("<?php echo base_url() ?>search_engine/autocomplete/"+inputString, function(data){
        if(data.length > 0) {
            $('#suggestions').show();
            $('#autoSuggestionsList').html(data);
        }
    });
}
}

function fill(thisValue) {
$('#searching').val(thisValue);
  setTimeout("$('#suggestions').hide();", 200);
}







</script>
   
    
  </head>
   <body data-spy="scroll" data-target="#myNavbar" data-offset="70" >

<!-- start navbar -->