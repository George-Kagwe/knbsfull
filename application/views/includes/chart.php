  
                <?php foreach ($embed as $list):?>
              
                <li><div class="container-fluid">
                        <div class="row wow fadeIn" data-wow-delay="0.2s" id="">
                                
                                    <div class="col-lg-12" id="chart">
                                       
                                        <?php echo $list->embed_script;?>
                                    </div>
                        </div>
                    <div class="container">    
                </li>
                 <?php endforeach; ?>