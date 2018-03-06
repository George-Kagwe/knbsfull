   <?php foreach ($embed as $list):?>
              
                <div class="container-fluid">
                        <div class="row wow fadeIn" data-wow-delay="0.2s" id="">
                                
                                    <div class="col-lg-12" id="chart">
                                        <!-- <h2 id="chart_title"><center>MONEY AND BANKING FINANCIAL INSTITUTIONS</center></h2> -->
                                        <?php echo $list->embed_script;?>
                                    </div>
                        </div>
                </div>   
                
                 <?php endforeach; ?>
                