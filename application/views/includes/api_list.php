<br><br>
<div class="container">
	 <div class="row">
	     
	     <div class="col-sm-12">
	         	  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Sector Name</th>
        <th>Report</th>
        <th>Coverage</th>
        <th>Source</th>
        <th>Api Link</th>
        
      </tr>
    </thead>
    <tbody>
	          <?php foreach ($list as $list):?>
                   <tr>
        <td><?php echo $list->sector_name;?></td>
        <td><?php echo $list->report;?></td>
        <td><?php echo $list->coverage;?></td>
        <td><?php echo $list->source;?></td>
        <td><a href="<?php  echo $list->api_url?>" target="_blank">link</a></td>
        
      </tr>

	     	  <?php endforeach; ?>

	 </tbody>
  </table>
      
    
	     </div>
	     
	 </div>
</div>