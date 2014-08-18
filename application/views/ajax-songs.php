<section class="w-f-md " style="height: 90%;">
    <section class="hbox stretch">
        <!-- side content -->
        <aside class="aside bg-light dk" id="sidebar">
            <section class="vbox animated fadeInUp">
                <section class="scrollable hover">

                    <div class="list-group no-radius no-border no-bg m-t-n-xxs m-b-none auto" id="genre-list">
                        
                        <?php
                        foreach ($genre_result as $key => $val) {
                            ?>   
                            <a href="javascript:void(null);" class="list-group-item"> <?php echo $val['name']; ?> </a> 
                            <?php
                        }
                        ?>
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