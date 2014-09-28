<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vip extends CI_Controller {

    private $songs_in_cart = 0;
    private $videos_in_cart = 0;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Song_model');
        $this->load->model('Vip_model');
        $this->load->model('Download_model');
        $this->load->helper('text');
        $this->load->helper('download');
        $this->load->library('session');
    }

    public function index() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data['isHome'] = true;
        $this->load->view('header', $data);
        $this->load->view('footer');
    }

    public function home() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data = array();
        $data['newSongs']  = $this->Song_model->getNewSongs();
        $data['newVideos'] = $this->Song_model->getNewVideos();
        $data['topSongs']  = $this->Song_model->getTopSongs();
        $data['topVideos'] = $this->Song_model->getTopVideos();
        echo $this->load->view('home', $data, true);
    }

    public function songs($id = null) {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data = array();
        $data['list'] = array(
            array('0', 'All'),
            array('1', 'Acoustic'),
            array('2', 'Ambient'),
            array('3', 'Blues'),
        );
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/song-genres', $data, true);
        $this->load->view('songs', $data);
    }
    public function ajax_songs()
    {
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array('songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array('songType'=>'1'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
    } 
    public function ajax_videos()
    {
       $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array('songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array('songType'=>'2'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/ajax-video-genres', $data, true);
        $this->load->view('ajax-videos', $data);
    } 
    public function genre_songs()
    {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $genre_id =  $this->input->post('id');
        $genre_query = $this->db->get_where('genre',array("id"=>$genre_id));
        $genre_name = $genre_query->row_array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'1'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
        
    }     
     public function genre_videos()
    {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $genre_id =  $this->input->post('id');
        $genre_query = $this->db->get_where('genre',array("id"=>$genre_id));
        $genre_name = $genre_query->row_array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'2'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-video-genres', $data, true);
        $this->load->view('ajax-videos', $data);
        
    }     
    
    public function subgenre_songs()
    {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $genre_id =  $this->input->post('id');
        // for getting the genre name
        $genre_query = $this->db->get_where('genre',array("id"=>$genre_id));
        $genre_name = $genre_query->row_array();
        // end of getting the genre name
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'1'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
        
    } 
    
    public function subgenre_videos()
    {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $genre_id =  $this->input->post('id');
        // for getting the genre name
        $genre_query = $this->db->get_where('genre',array("id"=>$genre_id));
        $genre_name = $genre_query->row_array();
        // end of getting the genre name
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'2'));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-video-genres', $data, true);
        $this->load->view('ajax-videos', $data);
        
    } 
    public function test()
    {
      $this->load->view('video-detail');
    }        
            

    public function videos($id = null) {
        $data = array();
        $data['list'] = array(
            array('0', 'All'),
            array('1', 'Acoustic'),
            array('2', 'Ambient'),
            array('3', 'Blues'),
        );
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/video-genres', $data, true);
        $this->load->view('videos', $data);
    }

    public function search() {
        $this->load->view('header');
        $this->load->view('carat');
        $this->load->view('footer');
    }

    public function loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data = array();
        $type = $this->input->get('type');
        if($type == "video") {
            $this->load->view('video-loading', $data);
        } else {
            $this->load->view('song-loading', $data);
        }
        
    }
     public function ajax_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data = array();
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->get_where('song_lists',array('songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
    }
     public function ajax_video_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $data = array();
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array('songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('video-loading', $data);
    }
    
     public function ajax_genre_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $genre_id =  $this->input->post('id');
        $data = array();
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
    }
    public function ajax_genre_video_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $genre_id =  $this->input->post('id');
        $data = array();
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("genre"=>$genre_id,'songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('video-loading', $data);
    }
    
     public function ajax_subgenre_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $genre_id =  $this->input->post('id');
        $data = array();
         $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'1'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
    }
      public function ajax_subgenre_video_loading() {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $genre_id =  $this->input->post('id');
        $data = array();
         $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->order_by('id', 'DESC')->get_where('song_lists',array("subGenre"=>$genre_id,'songType'=>'2'),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('video-loading', $data);
    }

    public function genres() {

        $type = $this->input->get('type');
        $id = $this->input->get('id');
        $list = array('0' => 'All', '1' => 'Acoustic', '2' => 'Ambient', '3' => 'Blues');
        $data['genreName'] = $list[$id];
        if($type == "video") {
            $this->load->view('helper/video-genres', $data);
        } else {
            $this->load->view('helper/song-genres', $data);
        }
    }
    public function videodescription()
    {  
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $slug = $_POST['file'];
        $update_query = "update `song_lists` set `total_play`=`total_play`+1 where `slug`='$slug'";
        $this->db->query($update_query);
        $query = $this->db->get_where('song_lists',array("slug"=>$slug));
        $data['result'] = $query->result_array();
        $this->load->view('ajax-videodetail',$data); 
    }   
    
    public function songdescription()
    {
        if ($this->myauth->getUserId() == 6) {
            $data['isPaid'] = true;
        } else {
            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
        }
        $slug = $_POST['slug'];
        $update_query = "update `song_lists` set `total_play`=`total_play`+1 where `slug`='$slug'";
        $this->db->query($update_query);
        $query = $this->db->get_where('song_lists',array("slug"=>$slug));
        $data['result'] = $query->row_array();
        echo json_encode($data['result']);
    }        
       
    
    public function downloads($slug){
                //$slug = $this->input->post('slug');
            $userId = $this->myauth->getUserId();
                $play = $this->Song_model->getsongDetail($slug);
                if ($play) {
                        $path = explode("../", $play->filePath);
                            if (file_exists($path[1])) {
                                $data = file_get_contents($path[1]);
                                force_download($play->fileName, $data);
                                exit;
                            }
                } 
    }

    public function downloadZip() {

        $this->load->helper('string');
        $files = $_SESSION['cart']['all'];

        $this->_saveDownload($files);

        function createZip($files, $zip_file) {
            $zip = new ZipArchive;
            if ($zip->open($zip_file, ZipArchive::OVERWRITE) === TRUE) {
                foreach ($files as $file) {
                    $path = explode("../", $file->filePath);
                    if ($file->songType == "1") {
                        if (!file_exists($path[1])) {
                            die($path[1] . ' does not exist');
                        }
                        if (!is_readable($path[1])) {
                            die($path[1] . ' not readable');
                        }
                        $zip->addFile($path[1], $file->fileName);
                    } else if ($file->songType == "2") {
                        if (!file_exists($path[1])) {
                            die($path[1] . ' does not exist');
                        }
                        if (!is_readable($path[1])) {
                            die($path[1] . ' not readable');
                        }
                        $zip->addFile($path[1], $file->fileName);
                    }
                }
                $zip->close();

                $_SESSION['cart'] = array();
                $_SESSION['cart']['temp'] = array();
                $_SESSION['cart']['all'] = array();
                return true;
            } else
                return false;
        }

        $temp = time() . '.zip';
        $zip_name = $temp;

        if (createZip($files, $zip_name)) {
            session_write_close();
            if (file_exists('/var/www/vhosts/videotoolz20.com/httpdocs/xyz123/' . $zip_name)) {
                header('Location: http://www.videotoolz20.com/xyz123/' . $zip_name);
            } else {
                $dir = '/var/www/vhosts/videotoolz20.com/httpdocs/xyz123/';
                $name = explode(".", $zip_name);
                $name_of_zip = $name[0];
                $root = scandir($dir);
                foreach ($root as $value) {
                    if ($value === '.' || $value === '..') {
                        continue;
                    }
                    if (is_file($dir.$value)) {
                        $extension = explode(".", $dir.$value);
                        $ext = end($extension);
                        if ($ext == 'zip' || $ext == 'php' || $ext == 'htaccess') {
                            continue;
                        } else {
                            $created_zip_name = $extension[0];
                            if ($created_zip_name == $name_of_zip) {
                                rename($dir.$value, $dir.$zip_name);
                                header('Location: http://www.videotoolz20.com/xyz123/' . $zip_name);
                            }
                        }
                    }
                }
            }
            exit();
        } else {
            exit();
        }
    }

    private function _isDownloadLimit($nos) {
        if ($nos <= 2) {
            return true;
        } else {
            return false;
        }
    }

    private function _saveDownload($files) {
        foreach ($files as $file) {
            $this->Song_model->updateTotalDownload($file->id);
            $this->Download_model->saveDownloads($file);
        }
    }

    public function updatePlay() {
        $slug = $this->input->post('id');
        $play = $this->Song_model->getPlayId($slug, 1);
        if ($play)
            $this->Song_model->updateTotalPlay($play->id);
    }
    
    // for the crate functonality
    public function addTocrate()
    {
        $crate_array = array();
        if(!empty($this->session->userdata('crate')))
        {
            $crate_array = $this->session->userdata('crate');
        }    
        $slug = $this->input->post('id');
        $flag = $this->input->post('flag');
        if($flag=='add')
        {
             array_push($crate_array,$slug);
        }  
        else if($flag=='remove')
        {
             $key = array_search($slug, $crate_array);
             unset($crate_array[$key]);
        }    
        $this->session->set_userdata('crate',$crate_array);
        echo count($this->session->userdata('crate'));
       
    }

    public function crate(){
        $this->load->view('ajax-crate'); 
    }        
    
    // end of for the crate functionality

    public function login(){
        $this->load->view('ajax-login');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */