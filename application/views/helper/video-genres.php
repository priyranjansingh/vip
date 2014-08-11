<h2 class="font-thin m-b">Video <small> >> </small> <?php echo $genreName; ?></h2> 
<div class="row row-sm" id="song-list">
    <?php for ($i = 0; $i < 24; $i++) : ?>
        <?php $this->load->view('helper/video-genre-template'); ?>
    <?php endfor; ?>
</div>
<div id="loadmoreajaxloader" style="display: block;">
    <center>
        <img src="images/ajax-loader.gif" />
    </center>
</div>