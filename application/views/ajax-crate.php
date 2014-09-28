<section class="w-f-md " style="height: 90%;">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section style="border:0px solid red;" class="scrollable padder-lg scrollable-ajax" id="selected-genres-data">
                <h2 class="font-thin m-b">Crate</h2> 
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font-thin">Songs In Crate</h3> 
                        <?php 
                        if(!empty($song_array))
                        {    
                        foreach($song_array as $key => $val )
                        {
                        ?>   
                        <div id="container_<?php  echo $val->slug; ?>" class="list-group bg-white list-group-lg no-bg auto">
                            <div href="#" class="list-group-item clearfix"> 
                                <span class="pull-right m-l list-download">
                                    <a href="#" title="Remove From Crate" class="pull-right"> 
                                            <i id="<?php  echo $val->slug; ?>" class="fa remove_crate fa-minus-circle"></i> 
                                    </a>
                                </span>
                                <span class="pull-right m-l list-download">
                                    BPM: <?php  echo $val->bpm; ?>
                                </span>
                                <span class="pull-left thumb-sm avatar m-r">
                                    <img src="images/a4.png" alt="..."> 
                                </span> 
                                <span class="clear"> <span> <?php  echo $val->songName; ?></span> 
                                    <small class="text-muted clear text-ellipsis">by <?php  echo $val->artistName; ?></small> 
                                </span>
                            </div>
                        </div>
                        <?php        
                        }    
                        }
                         ?>
                        
                    </div>    
                    <div class="col-md-6">
                        <h3 class="font-thin">Videos In Crate</h3> 
                         <?php 
                        if(!empty($video_array))
                        {    
                        foreach($video_array as $key => $val )
                        {
                        ?>   
                        <div id="container_<?php  echo $val->slug; ?>" class="list-group bg-white list-group-lg no-bg auto">
                            <div href="#" class="list-group-item clearfix"> 
                                <span class="pull-right m-l list-download">
                                    <a href="#" title="Remove From Crate" class="pull-right"> 
                                            <i id="<?php  echo $val->slug; ?>" class="fa remove_crate fa-minus-circle"></i> 
                                    </a>
                                </span>
                                <span class="pull-right m-l list-download">
                                    BPM: <?php  echo $val->bpm; ?>
                                </span>
                                <span class="pull-left thumb-sm avatar m-r">
                                    <img src="images/a4.png" alt="..."> 
                                </span> 
                                <span class="clear"> <span> <?php  echo $val->songName; ?></span> 
                                    <small class="text-muted clear text-ellipsis">by <?php  echo $val->artistName; ?></small> 
                                </span>
                            </div>
                        </div>
                         <?php        
                        }  
                        }
                         ?>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <button class="crate_download"><i class="fa fa-download"></i> Download</button>
                    </div>
                </div>
                </section>
            </section>
        </section>
    </section>
</section>