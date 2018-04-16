<!-- start navbar -->
  
    <div id ="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            <div class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=site_url('api/')?>"  class="btn-menu">API LIST</a></li>
                  
                </ul>
               
                <ul class="nav navbar-nav">
                   
                    <li class="dropdowndropdown">
                        <a href="#"  class="dropdown-toggle sectorslinks" data-toggle="dropdown" id="sectorslinks"> SECTORS <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-level" id="sectors-main">
                             <div class="square"></div>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Public Finance</a>
                                <ul class="dropdown-menu " id="finance">
                                    <li class="row " >
                                        <ul class="col-md-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($public_finance_county as $list):?>

                                             <?php
                                              

                                              echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                       
                                         
                                           <?php endforeach; ?>

                                              
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                                <?php foreach ($public_finance_national as $list):?>

                                             <?php
                                              

                                              echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                       
                                         
                                           <?php endforeach; ?>

                                           <br><br>
                                               <a href="<?=site_url('All/Public_Finance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li> 
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Education</a>
                                <ul class="dropdown-menu " id="education">
                                    <li class="row " >
                                        <ul class="col-md-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($education_county as $list):?>

                                             <?php
                                               echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                             
                                             
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($education_national as $list):?>
                                            <?php 
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                           <br><br>
                                             <a href="<?=site_url('All/Education')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Public Health</a>
                                <ul class="dropdown-menu " id="health">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($health_county as $list):?>

                                             <?php
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($health_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                           <br><br>
                                               <a href="<?=site_url('All/Health')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li> 
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Agriculture</a>
                                <ul class="dropdown-menu " id="agriculture">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                       <?php foreach ($agriculture_county as $list):?>
                                            
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";?>

                                          <?php endforeach; ?>
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($agriculture_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Population</a>
                                <ul class="dropdown-menu " id="population">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($population_county as $list):?>

                                             <?php
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               <a href="<?=site_url('All/Population')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($population_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Governance</a>
                                <ul class="dropdown-menu " id="governance">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($governance_county as $list):?>

                                             <?php
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              
                                               
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($governance_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                           <br>
                                           <a href="<?=site_url('All/Governance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a> 
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Environment and<br> Natural Resources</a>
                                <ul class="dropdown-menu " id="land">
                                    <li class="row " >
                                      <!--   <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($land_county as $list):?>

                                             <?php
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               
                                        </ul> -->

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($land_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                           <br>
                                            <a href="<?=site_url('All/land')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>

                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Manufacturing</a>
                                <ul class="dropdown-menu " id="manufacturing">
                                    <li class="row " >
                                        <!-- <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($manufacturing_county as $list):?>

                                             <?php
                                            echo "
                                          <li><a href='all/chart/$list->sector_id/$list->table_name/' tabindex='-1' class='menu-item'>$list->report</a></li>";

                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               <a href="<?=site_url('All/Public_Finance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul> -->

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($manufacturing_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>

                                           <?php endforeach; ?>
                                           <br><br>
                                            <a href="<?=site_url('All/manufacturing')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Energy</a>
                                <ul class="dropdown-menu " id="energy">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($energy_county as $list):?>

                                             <?php
                                          echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>
                                         
                                              
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($energy_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                             
                                            <a href="<?=site_url('All/energy')?>" id="bulb" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                              
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Labour</a>
                                <ul class="dropdown-menu " id="labour">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($labour_county as $list):?>

                                             <?php
                                            echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($labour_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                           <a href="<?=site_url('All/labour')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">CONSUMER PRICE INDEX</a>
                                <ul class="dropdown-menu " id="cpi">
                                    <li class="row " >
                                        <!-- <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($cpi_county as $list):?>

                                             <?php
                                            echo "
                                          <li><a href='$list->table_name/' tabindex='-1' class='menu-item'>$list->report</a></li>";

                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               <a href="<?=site_url('All/Public_Finance')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul> -->

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($cpi_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                            <br><br>
                                               <a href="<?=site_url('All/cpi')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Administrative and Political</a>
                                <ul class="dropdown-menu " id="admin">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($political_county as $list):?>

                                             <?php
                                              echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <!-- <br><br>
                                               <a href="<?=site_url('All/transport')?>" class="btn btn-success active">
                                                    View all charts
                                               </a> -->
                                        </ul>

                                       <!--  <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($transport_national as $list):?>
                                            <?php  echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                        </ul> -->
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Trade</a>
                                <ul class="dropdown-menu " id="trade">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($trade_county as $list):?>

                                             <?php
                                             echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";


                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               <a href="<?=site_url('All/trade')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($trade_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Tourism</a>
                                <ul class="dropdown-menu " id="tourism">
                                    <li class="row " >
                                       
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($tourism_national as $list):?>
                                            <?php echo "
                                         <li><a href='all/chart/$list->sector_id/$list->table_name/' tabindex='-1' class='menu-item'>$list->report</a></li>";
                                          ?>
                                           <?php endforeach; ?>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                          
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Building and Construction</a>
                                <ul class="dropdown-menu " id="building">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($building_county as $list):?>

                                             <?php
                                            echo "
                                           <li><a href='all/chart/$list->sector_id/$list->table_name/' tabindex='-1' class='menu-item'>$list->report</a></li>";

                                          ?>
                                         
                                           <?php endforeach; ?>

                                             
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($building_national as $list):?>
                                            <?php echo "
                                         <li><a href='all/chart/$list->sector_id/$list->table_name/' tabindex='-1' class='menu-item'>$list->report</a></li>";
                                          ?>
                                           <?php endforeach; ?>
                                            <br><br>
                                               <a href="<?=site_url('All/building')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle sub-head" data-toggle="dropdown">Finance Money and Banking</a>
                                <ul class="dropdown-menu " id="finance">
                                    <li class="row " >
                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                          <li class="dropdown-header">County Datasets</li>
                                         
                                         
                                           <?php foreach ($money_county as $list):?>

                                             <?php
                                             echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                         
                                           <?php endforeach; ?>

                                              <br><br>
                                               <a href="<?=site_url('All/money')?>" class="btn btn-success active">
                                                    View all charts
                                               </a>
                                        </ul>

                                        <ul class="col-xs-12 col-sm-6  col-md-6 col-lg-6 menus">
                                            <li class="dropdown-header">National Datasets</li>
                                               <?php foreach ($money_national as $list):?>
                                            <?php   echo "
                                          <li>"."<a href=".base_url('all/chart/')."$list->sector_id/$list->table_name/".$list->report."tabindex='-1' class='menu-item'>".$list->report."</a>"."</li>";

                                          ?>
                                           <?php endforeach; ?>
                                        </ul>
                                        
                                    </li>
                                </ul>
                            </li>
                           
                           
                            
                        </ul>
                    </li>
                     <li> <a class="navbar-brand" href="<?=site_url('/')?>"><img id="logo" src="<?php echo base_url().'assets//img/menu/knbslogo.png';?>"  class="img-responsive"></a></li>
                    <li>


                    <form autocomplete="off" action="<?=site_url('search_engine/search')?>">
                     <div id="imaginary_container1"> 
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control input-lg"  name ="search" class="form-control" 
                            name="search" id="searching" 
                            autocomplete='off' onKeyUp='lookup(this.value)'
                             placeholder=" Quick search " required="true">

                        <span class="input-group-addon">
                            <button type="submit" id="search_button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>  
                        </span>
                    </div>
                </div>
                  </form>
                     <div id="suggestions" class="ui-widget">
                    <div class="autoSuggestionsList_l" id="autoSuggestionsList"></div>
                    </div>
                      <!-- </form> --></li>
                    
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

<!-- end navbar -->

<script type="text/javascript">
   $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('#sectors-main').fadeOut();

        $('.dropdowndropdown').hover(
       function(){$('#sectors-main').show();}, //shows when hovering over
       function(){$('#sectors-main').hide();} //Hides when hovering finished
       );
     }
    else
     {
      $('#sectors-main').fadeIn();
     }
 });
  
</script>