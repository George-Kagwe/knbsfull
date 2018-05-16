<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->



<div class="row" style="min-height:300px;">
    <div  class="col-sm-12">
        <h4><center>SECTORS INDICATORS LIST</center></h4>
        <hr/>
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#Agriculture" data-toggle="tab">Agriculture (<?php echo sizeof($agriculture );?>)</a></li>
                <li><a href="#Education" data-toggle="tab">Education (<?php echo sizeof($education );?>)</a></li>
                <li><a href="#Energy" data-toggle="tab">Energy (<?php echo sizeof($energy );?>)</a></li>
                <li><a href="#Environment" data-toggle="tab">Environment And Natural Resources (<?php echo sizeof($land );?>)</a></li>
                <li><a href="#Governance" data-toggle="tab">Governance (<?php echo sizeof($governance );?>)</a></li>
                <li><a href="#Labour" data-toggle="tab">Labour (<?php echo sizeof($labour );?>)</a></li>
                <li><a href="#Political" data-toggle="tab">Political and Administrative Units (<?php echo sizeof($political );?>)</a></li>
                <li><a href="#Finance" data-toggle="tab">Public Finance (<?php echo sizeof($public_finance );?>)</a></li>
                <li><a href="#Health" data-toggle="tab">Public Health (<?php echo sizeof($public_health );?>)</a></li>
                <li><a href="#Trade" data-toggle="tab">Trade (<?php echo sizeof($trade );?>)</a></li>
                <li><a href="#Transport" data-toggle="tab">Transport (<?php echo sizeof($transport );?>)</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="Agriculture">
                      
                     <table class="table table-bordered table-hover" id="Agriculture">
                                   <thead>
                                      <tr>
                                      
                                        <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>View Chart</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($agriculture as $agriculture):?>
                                     
                                              <tr>
                                               
                                                <td><?php echo $agriculture->report;?></td>
                                                <td><?php echo $agriculture->coverage;?></td>
                                                <td><?php echo $agriculture->source;?></td>
                                                 <td> <?php
                                              

                                              echo "<a href=".base_url('all/chart/')."$agriculture->sector_id/$agriculture->table_name/".$agriculture->report."' target='_blank' >"."View chart"."</a>";

                                          ?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                   </table>
                </div>
                <div class="tab-pane" id="Education">
                     <table class="table table-bordered table-hover" id="2">
                                   <thead>
                                      <tr>
                                        <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($education as $education):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $education->report;?></td>
                                                <td><?php echo $education->coverage;?></td>
                                                <td><?php echo $education->source;?></td>
                                                <td> <?php
                                              

                                              echo "<a href=".base_url('all/chart/')."$agriculture->sector_id/$agriculture->table_name/".$agriculture->report."' target='_blank'>"."View Chart"."</a>";

                                          ?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                     </table>
                </div>
                <div class="tab-pane" id="Energy">
                      <table class="table table-bordered table-hover" id="3">
                                   <thead>
                                      <tr>
                                          
                                        <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($energy as $energy):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $energy->report;?></td>
                                                <td><?php echo $energy->coverage;?></td>
                                                <td><?php echo $energy->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$energy->sector_id/$energy->table_name/".$energy->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>
                     
                </div>
                
                <div class="tab-pane" id="Environment">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                                                          <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($land as $land):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $land->report;?></td>
                                                <td><?php echo $land->coverage;?></td>
                                                <td><?php echo $land->source;?></td>
                                                <td> <?php
                                              

                                              echo "<a href=".base_url('all/chart/')."$land->sector_id/$land->table_name/".$land->report."' target='_blank'>"."View Chart"."</a>";

                                          ?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                <div class="tab-pane" id="Governance">
                      <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($governance as $governance):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $governance->report;?></td>
                                                <td><?php echo $governance->coverage;?></td>
                                                <td><?php echo $governance->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$governance->sector_id/$governance->table_name/".$governance->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                 <div class="tab-pane" id="Labour">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($labour as $labour):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $labour->report;?></td>
                                                <td><?php echo $labour->coverage;?></td>
                                                <td><?php echo $labour->source;?></td>
                                               
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$labour->sector_id/$labour->table_name/".$labour->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                 <div class="tab-pane" id="Political">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($political as $political):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $political->report;?></td>
                                                <td><?php echo $political->coverage;?></td>
                                                <td><?php echo $political->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$political->sector_id/$political->table_name/".$political->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                 <div class="tab-pane" id="Finance">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($public_finance as $public_finance):?>
                                     
                                              <tr>
                                                <td><?php echo $public_finance->report;?></td>
                                                <td><?php echo $public_finance->coverage;?></td>
                                                <td><?php echo $public_finance->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$public_finance->sector_id/$public_finance->table_name/".$public_finance->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                <div class="tab-pane" id="Health">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($public_health as $public_health):?>
                                     
                                              <tr>
                                                <td><?php echo $public_health->report;?></td>
                                                <td><?php echo $public_health->coverage;?></td>
                                                <td><?php echo $public_health->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$public_health->sector_id/$public_health->table_name/".$public_health->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                <div class="tab-pane" id="Trade">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link </th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($trade as $trade):?>
                                     
                                              <tr>
                                                <td><?php echo $trade->report;?></td>
                                                <td><?php echo $trade->coverage;?></td>
                                                <td><?php echo $trade->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$trade->sector_id/$trade->table_name/".$trade->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
                 <div class="tab-pane" id="Transport">
                      <table class="table table-bordered table-hover" id="6">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dataset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Chart Link </th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($transport as $transport):?>
                                     
                                              <tr>
                                                <td><?php echo $transport->report;?></td>
                                                <td><?php echo $transport->coverage;?></td>
                                                <td><?php echo $transport->source;?></td>
                                                <td><?php  echo "<a href=".base_url('all/chart/')."$transport->sector_id/$transport->table_name/".$transport->report."' target='_blank'>"."View Chart"."</a>";?></td>
        
                                              </tr>

        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                      </table>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
</div>
<div class="clearfix"></div>



<style type="text/css">
                        
                        .tabs-left, .tabs-right {
                            border-top:  1px solid #ddd;
                         border-left: 1px solid #ddd;
                          border-bottom: none;
                          padding-top: 2px;
                          background-color: #f8f8f8;
                        }
                        .tabs-left {
                          border-right: 1px solid #ddd;
                        }
                        .tabs-right {
                          border-left: 1px solid #ddd;
                        }
                        .tabs-left>li, .tabs-right>li {
                          float: none;
                          margin-bottom: 2px;
                        }
                        .tabs-left>li {
                          margin-right: -1px;
                        }
                        .tabs-right>li {
                          margin-left: -1px;
                        }
                        .tabs-left>li.active>a,
                        .tabs-left>li.active>a:hover,
                        .tabs-left>li.active>a:focus {
                          border-bottom-color: #ddd;
                          border-right-color: transparent;
                        }

                        .tabs-right>li.active>a,
                        .tabs-right>li.active>a:hover,
                        .tabs-right>li.active>a:focus {
                          border-bottom: 1px solid #ddd;
                          border-left-color: transparent;
                        }
                        .tabs-left>li>a {
                          /*color: #000;*/
                          border-radius: 4px 0 0 4px;
                          margin-right: 0;
                          display:block;
                        }
                        .tabs-right>li>a {
                          border-radius: 0 4px 4px 0;
                          margin-right: 0;
                        }
                        .vertical-text {
                          margin-top:50px;
                          border: none;
                          position: relative;
                        }
                        .vertical-text>li {
                          height: 20px;
                          width: 120px;
                          margin-bottom: 100px;
                        }
                        .vertical-text>li>a {
                          border-bottom: 1px solid #ddd;
                          border-right-color: transparent;
                          text-align: center;
                          border-radius: 4px 4px 0px 0px;
                        }
                        .vertical-text>li.active>a,
                        .vertical-text>li.active>a:hover,
                        .vertical-text>li.active>a:focus {
                          border-bottom-color: transparent;
                          border-right-color: #ddd;
                          border-left-color: #ddd;
                        }
                        .vertical-text.tabs-left {
                          left: -50px;
                        }
                        .vertical-text.tabs-right {
                          right: -50px;
                        }
                        .vertical-text.tabs-right>li {
                          -webkit-transform: rotate(90deg);
                          -moz-transform: rotate(90deg);
                          -ms-transform: rotate(90deg);
                          -o-transform: rotate(90deg);
                          transform: rotate(90deg);
                        }
                        .vertical-text.tabs-left>li {
                          -webkit-transform: rotate(-90deg);
                          -moz-transform: rotate(-90deg);
                          -ms-transform: rotate(-90deg);
                          -o-transform: rotate(-90deg);
                          transform: rotate(-90deg);
                        }
                        h4{
                            margin-top: 2%;
                        }
</style>