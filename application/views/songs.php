<section class="w-f-md " style="height: 90%;">
    <section class="hbox stretch">
        <!-- side content -->
        <aside class="aside bg-light dk" id="sidebar">
            <section class="vbox animated fadeInUp">
                <section class="scrollable hover">

                    <div class="list-group no-radius no-border no-bg m-t-n-xxs m-b-none auto" id="genre-list">
                        <?php if ($list): ?>
                            <?php foreach ($list as $k => $l): ?>
                                <a href="javascript:void(null);" data-type="song" song-genres data-id="<?php echo $l[0];?>" class="list-group-item"> <?php echo $l[1];?> </a> 
                            <?php endforeach; ?>
                        <?php endif; ?>
<!--                        <a href="javascript:void(null);" song-genres data-id="0" class="list-group-item active"> All </a> 
                        <a href="javascript:void(null);" song-genres data-id="1" class="list-group-item "> acoustic </a> 
                        <a href="javascript:void(null);" song-genres data-id="2" class="list-group-item"> ambient </a> 
                        <a href="javascript:void(null);" song-genres data-id="3" class="list-group-item"> blues </a> 
                        <a href="javascript:void(null);" song-genres data-id="4" class="list-group-item">classical</a>
                        <a href="javascript:void(null);" song-genres data-id="5" class="list-group-item"> country </a>  
                        <a href="javascript:void(null);" song-genres data-id="6" class="list-group-item"> electronic </a> 
                        <a href="javascript:void(null);" song-genres data-id="7" class="list-group-item"> emo </a> 
                        <a href="javascript:void(null);" class="list-group-item"> folk </a> 
                        <a href="javascript:void(null);" class="list-group-item"> hardcore </a> 
                        <a href="javascript:void(null);" class="list-group-item"> hip hop </a> 
                        <a href="javascript:void(null);" class="list-group-item"> indie </a> 
                        <a href="javascript:void(null);" class="list-group-item">jazz</a> 
                        <a href="javascript:void(null);" class="list-group-item"> latin </a> 
                        <a href="javascript:void(null);" class="list-group-item"> metal </a> 
                        <a href="javascript:void(null);" class="list-group-item"> pop </a> 
                        <a href="javascript:void(null);" class="list-group-item"> pop punk </a> 
                        <a href="javascript:void(null);" class="list-group-item"> punk </a> 
                        <a href="javascript:void(null);" class="list-group-item"> reggae </a> 
                        <a href="javascript:void(null);" class="list-group-item"> rnb </a> 
                        <a href="javascript:void(null);" class="list-group-item">rock</a> 
                        <a href="javascript:void(null);" class="list-group-item"> soul </a>  
                        <a href="javascript:void(null);" class="list-group-item"> world </a> -->
                    </div>
                </section>
            </section>
        </aside>
        <!-- / side content -->
        <section>
            <section class="vbox">
                <section class="scrollable padder-lg scrollable-ajax" id="selected-genres-data" >
                    <?php echo $genres; ?>
                </section>
            </section>
        </section>
    </section>
</section>