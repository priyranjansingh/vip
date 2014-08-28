 <?php
    $data['val'] = array();
    foreach ($songs_result as $key=>$val) { 
       $data['val'] = $val;
       $this->load->view('helper/ajax-video-genre-template',$data); 
     } ?>