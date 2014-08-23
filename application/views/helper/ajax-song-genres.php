<h2 class="font-thin m-b">Songs <small> >> </small> <?php echo $genreName; ?></h2> 
<div class="row row-sm" id="song-list">
    <?php
    $data['val'] = array();
    foreach ($songs_result as $key=>$val) { 
       $data['val'] = $val;
       $this->load->view('helper/ajax-song-genre-template',$data); 
     } ?>
</div>
<div id="loadmoreajaxloader" style="display: block;">
    <center>
        <input type="button" name="load_more" id="load_more" value="Load More"> (<span id="current_page">1</span> of <span id="total_page"><?php echo $total_records  ?></span>)
        <img style="display: none;" id="loader_image" src="images/ajax-loader.gif" />
    </center>
</div>