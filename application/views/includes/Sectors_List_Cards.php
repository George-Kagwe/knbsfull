

<hr></hr>
<div class="container"><h2>API LIST</h2></div>

<div id="exTab2" class="container-fluid">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#1" data-toggle="tab">Agriculture</a>
			</li>
			<li><a href="#2" data-toggle="tab">Education</a>
			</li>
			<li><a href="#3" data-toggle="tab">Energy</a>
			</li>
			<li><a href="#6" data-toggle="tab">Environment  and<br> Natural Resources </a>
			</li>
			<li>
             <a  href="#4" data-toggle="tab">Governance</a>
			</li>
			<li><a href="#5" data-toggle="tab">Labour</a>
			</li>
			<li><a href="#8" data-toggle="tab">Political and<br>Administrative<br> Units</a>
			</li>
			<li><a href="#9" data-toggle="tab">Public <br>Finance</a>
			</li>
			<li><a href="#10" data-toggle="tab">Public <br>Health</a>
			</li>
			<li><a href="#11" data-toggle="tab">Trade</a>
			</li>
			<li><a href="#12" data-toggle="tab">Transport</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
                   <table class="table table-bordered table-hover" id="1">
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
			  </div>
				<div class="tab-pane" id="2">
                 <table class="table table-bordered table-hover" id="2">
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
				</div>
                <div class="tab-pane" id="3">
                  <table class="table table-bordered table-hover" id="3">
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
				</div>
				<div class="tab-pane" id="4">
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
				</div>
				<div class="tab-pane" id="5">
                    <table class="table table-bordered table-hover" id="5">
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
				</div>
				<div class="tab-pane" id="6">
					<table class="table table-bordered table-hover" id="6">
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
				</div>
				<div class="tab-pane" id="8">
					<table class="table table-bordered table-hover" id="8">
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
				</div>
				<div class="tab-pane" id="9">
					<table class="table table-bordered table-hover" id="8">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>
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
				</div>
				<div class="tab-pane" id="10">
					<table class="table table-bordered table-hover" id="8">
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
                                    <?php endforeach; ?>
                                      </tbody>
                                </table>
				</div>
				<div class="tab-pane" id="11">
					<table class="table table-bordered table-hover" id="11">
                                   <thead>
                                      <tr>
                                          
                                       <th>Report /Dateset Indicator Name</th>
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
				</div>

				<div class="tab-pane" id="12">
					<table class="table table-bordered table-hover" id="12">
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
                                                  
                                                <td><?php echo $transport->report;?></td>                                               <td><?php echo $transport->coverage;?></td>
                                                <td><?php echo $transport->source;?></td>
                                                <td><a href="<?php  echo $transport->api_url?>" target="_blank">link</a></td>
        
                                              </tr>

         

                                              <?php endforeach; ?>
                                      </tbody>
                                </table>
				</div>
			</div>
  </div>

<hr></hr>

