<br><br>
<!--  -->
<style type="text/css">
.panel-collapse{
  list-style: none;
  text-decoration: none;
}

 </style>
  <div class="container">
       <div class="row">
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse1'>
                                       Agriculture
                                </a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                      
                                        <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($agriculture as $agriculture):?>
                                     
                                              <tr>
                                               
                                                <td><?php echo $agriculture->report;?></td>
                                                <td><?php echo $agriculture->coverage;?></td>
                                                <td><?php echo $agriculture->source;?></td>
                                                <td><a href="<?php  echo $agriculture->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
             <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse2'>
                                       Education
                                </a>
                            </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                        <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($education as $education):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $education->report;?></td>
                                                <td><?php echo $education->coverage;?></td>
                                                <td><?php echo $education->source;?></td>
                                                <td><a href="<?php  echo $education->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse33'>
                                       Energy
                                </a>
                            </h4>
                          </div>
                          <div id="collapse33" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                        <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($energy as $energy):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $energy->report;?></td>
                                                <td><?php echo $energy->coverage;?></td>
                                                <td><?php echo $energy->source;?></td>
                                                <td><a href="<?php  echo $energy->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse3'>
                                       Governance
                                </a>
                            </h4>
                          </div>
                          <div id="collapse3" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($governance as $governance):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $governance->report;?></td>
                                                <td><?php echo $governance->coverage;?></td>
                                                <td><?php echo $governance->source;?></td>
                                                <td><a href="<?php  echo $governance->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse4'>
                                       Labour
                                </a>
                            </h4>
                          </div>
                          <div id="collapse4" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                        
                                      <th>Report /Dateset Indicator Name</th>
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
                                                <td><a href="<?php  echo $labour->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse6'>
                                       Land and Climate
                                </a>
                            </h4>
                          </div>
                          <div id="collapse6" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($land as $land):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $land->report;?></td>
                                                <td><?php echo $land->coverage;?></td>
                                                <td><?php echo $land->source;?></td>
                                                <td><a href="<?php  echo $land->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse7'>
                                      Political and Administrative Units
                                </a>
                            </h4>
                          </div>
                          <div id="collapse7" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                        
                                       <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($political as $political):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $political->report;?></td>
                                                <td><?php echo $political->coverage;?></td>
                                                <td><?php echo $political->source;?></td>
                                                <td><a href="<?php  echo $political->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse8'>
                                      Public Finance
                                </a>
                            </h4>
                          </div>
                          <div id="collapse8" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                        <th>Report</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($public_finance as $public_finance):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $public_finance->report;?></td>
                                                <td><?php echo $public_finance->coverage;?></td>
                                                <td><?php echo $public_finance->source;?></td>
                                                <td><a href="<?php  echo $public_finance->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse9'>
                                      Public Health
                                </a>
                            </h4>
                          </div>
                          <div id="collapse9" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                        
                                       <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($public_health as $public_health):?>
                                     
                                              <tr>
                                                
                                                <td><?php echo $public_health->report;?></td>
                                                <td><?php echo $public_health->coverage;?></td>
                                                <td><?php echo $public_health->source;?></td>
                                                <td><a href="<?php  echo $public_health->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse10'>
                                      Trade and Commerce
                                </a>
                            </h4>
                          </div>
                          <div id="collapse10" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($trade as $trade):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $trade->report;?></td>
                                                <td><?php echo $trade->coverage;?></td>
                                                <td><?php echo $trade->source;?></td>
                                                <td><a href="<?php  echo $trade->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-10"> 
              
                  <div class="panel-group">
                        <div class="panel panel-default">
                      
                          <div class="panel-heading">
                         
                            <h4 class="panel-title">   
                                <a data-toggle='collapse' href='#collapse11'>
                                      Transport and Communication
                                </a>
                            </h4>
                          </div>
                          <div id="collapse11" class="panel-collapse collapse">
                               <table class="table table-bordered table-hover">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>
                                        <th>Coverage</th>
                                        <th>Source</th>
                                        <th>Api Link</th>
                                        
                                      </tr>
                                   </thead>
                                       <tbody>
                                             <?php foreach ($transport as $transport):?>
                                     
                                              <tr>
                                                  
                                                <td><?php echo $transport->report;?></td>
                                                <td><?php echo $transport->coverage;?></td>
                                                <td><?php echo $transport->source;?></td>
                                                <td><a href="<?php  echo $transport->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                   
                                      </tbody>
                                </table>
                                                                  
                            <div class="panel-footer"></div>
                          </div>

                           
                        </div>
                  </div>
             
            </div>
            <div class="col-1">
              
            </div>
       </div>

  </div>

