<a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i class="icon-refresh i-lg inline" id="refresh"></i></a> 
<h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2> 
<div class="row">
    <div class="col-md-7">
        <h3 class="font-thin">New Songs</h3> 
        <div class="row row-sm">
            <?php if ($newSongs) : ?>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <div class="col-xs-6 col-sm-3">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x bg-black">
                                    <div class="text-center text-info padder m-t-sm text-sm">
                                        160 BPM
                                    </div>
                                    <div class="center-top text-center m-t-n">
                                        <a href="#">
                                            Song Name
                                        </a> 
                                    </div>
                                    <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> 
                                    </div>
                                    <div class="center-bottom text-center m-t-n">
                                        <a href="#">
                                            Artist Name
                                        </a> 
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" title="Add To Crate" class="pull-right"> 
                                            <i class="icon icon-drawer"></i> 
                                        </a>
                                        <a href="#" title="Download"> 
                                            <i class="fa fa-download"></i> 
                                        </a>
                                    </div>
                                </div>
                                <a href="#">
                                    <img src="images/p1.jpg" alt="" class="r r-2x img-full">
                                </a>
                            </div>
                            <div class="padder-v"> <a href="#" class="text-ellipsis">Tempered Song</a>  <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> 
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-5">
        <h3 class="font-thin">Top Songs</h3> 
        <div class="list-group bg-white list-group-lg no-bg auto">
            <?php if ($topSongs) : ?>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <div href="#" class="list-group-item clearfix"> 
                        <span class="pull-right h2 text-muted m-l">
                            <?php echo ($i + 1); ?>
                        </span>
                        <span class="pull-right m-l list-crate">
                            <a href="#" title="Add To Crate" class="pull-right"> 
                                <i class="icon icon-drawer"></i> 
                            </a>
                        </span>
                        <span class="pull-right m-l list-download">
                            <a href="#" title="Download"> 
                                <i class="fa fa-download"></i> 
                            </a>
                        </span>
                        <span class="pull-left thumb-sm avatar m-r">
                            <img src="images/a4.png" alt="..." /> 
                        </span> 
                        <span class="clear"> <span>Little Town</span> 
                            <small class="text-muted clear text-ellipsis">by Chris Fox</small> 
                        </span>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h3 class="font-thin">New Videos</h3> 
        <div class="row row-sm">
            <?php if ($newVideos) : ?>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <div class="col-xs-6 col-sm-3">
                        <div class="item">
                            <div class="pos-rlt">
                                <div class="item-overlay opacity r r-2x bg-black">
                                    <div class="text-center text-info padder m-t-sm text-sm">
                                        160 BPM
                                    </div>
                                    <div class="center-top text-center m-t-n">
                                        <a href="#">
                                            Song Name
                                        </a> 
                                    </div>
                                    <div class="center text-center m-t-n"> <a href="#"><i class="icon-control-play i-2x"></i></a> 
                                    </div>
                                    <div class="center-bottom text-center m-t-n">
                                        <a href="#">
                                            Artist Name
                                        </a> 
                                    </div>
                                    <div class="bottom padder m-b-sm">
                                        <a href="#" title="Add To Crate" class="pull-right"> 
                                            <i class="icon icon-drawer"></i> 
                                        </a>
                                        <a href="#" title="Download"> 
                                            <i class="fa fa-download"></i> 
                                        </a>
                                    </div>
                                </div>
                                <a href="#">
                                    <img src="images/p1.jpg" alt="" class="r r-2x img-full">
                                </a>
                            </div>
                            <div class="padder-v"> <a href="#" class="text-ellipsis">Tempered Song</a>  <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a> 
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-5">
        <h3 class="font-thin">Top Videos</h3> 
        <div class="list-group bg-white list-group-lg no-bg auto">
            <?php if ($topVideos) : ?>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <div href="#" class="list-group-item clearfix"> 
                        <span class="pull-right h2 text-muted m-l">
                            <?php echo ($i + 1); ?>
                        </span>
                        <span class="pull-right m-l list-crate">
                            <a href="#" title="Add To Crate" class="pull-right"> 
                                <i class="icon icon-drawer"></i> 
                            </a>
                        </span>
                        <span class="pull-right m-l list-download">
                            <a href="#" title="Download"> 
                                <i class="fa fa-download"></i> 
                            </a>
                        </span>
                        <span class="pull-left thumb-sm avatar m-r">
                            <img src="images/a4.png" alt="..." /> 
                        </span> 
                        <span class="clear"> <span>Little Town</span> 
                            <small class="text-muted clear text-ellipsis">by Chris Fox</small> 
                        </span>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="row m-t-lg m-b-lg">
    <div class="col-sm-6">
        <div class="bg-primary wrapper-md r">
            <a href="#"> 
                <span class="h4 m-b-xs block">
                    <i class=" icon-user-follow i-lg"></i> 
                    Login or Create account
                </span>  
            </a>
        </div>
    </div>
</div>
