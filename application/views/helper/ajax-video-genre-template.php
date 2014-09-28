<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
    <div class="item">
        <div class="pos-rlt">
            <div class="item-overlay opacity r r-2x bg-black">
                <div class="text-center text-info padder m-t-sm text-sm">
                    <?php echo $val['bpm'];   ?> BPM
                </div>
                <div class="center-top text-center m-t-n">
                    <a href="#">
                        <?php echo $val['songName']   ?>
                    </a> 
                </div>
                <div class="center text-center m-t-n"> 
                    <?php if ($this->myauth->isLogin()) : ?>
                        <a href="javascript:void(null);#">
                            <i id="<?php echo $val['slug']; ?>" class="fa fa-play-circle i-2x video_description">
                            </i>
                        </a> 
                    <?php else : ?>
                        <a href="#" title="Login"> 
                            <i class=" icon-user-follow i-lg login i-2x"></i>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="center-bottom text-center m-t-n">
                    <a href="#">
                        <?php echo $val['artistName']   ?>
                    </a> 
                </div>
                <div class="bottom padder m-b-sm">
                    <?php if ($this->myauth->isLogin()) : ?>
                        <a href="#" title="Add To Crate" class="pull-right"> 
                            <i class="icon icon-drawer"></i> 
                        </a>
                        <a href="#" title="Download"> 
                            <i id="<?php echo $val['slug'] ?>" class="fa fa-download download"></i> 
                        </a>
                    <?php else : ?>
                        <a href="#" title="Login"> 
                            <i class=" icon-user-follow i-lg login i-2x"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <a href="#">
                <?php 
                    if(!empty($val['thumbnail'])){
                        $src = "assets/thumbnail/videos/".$val['thumbnail'];
                    } else {
                        $src = "assets/thumbnail/videos/video-icon.png";
                    }

                    ?>
                    <img src="<?php echo $src; ?>" width="180" height="180"  alt="<?php echo $val['songName']   ?>" class="r r-2x img-full">
            </a>
        </div>
        <div class="padder-v"> <a href="#" class="text-ellipsis"><?php echo $val['songName']   ?></a>  <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> 
        </div>
    </div>
</div>
