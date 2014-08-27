<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vip extends CI_Controller {

    public function index() {
        $data['isHome'] = true;
        $this->load->view('header', $data);
        $this->load->view('footer');
    }

    public function home() {
        $data = array();
        $data['newSongs'] = array('newSongs');
        $data['newVideos'] = array('newVideos');
        $data['topSongs'] = array('topSongs');
        $data['topVideos'] = array('topVideos');
        echo $this->load->view('home', $data, true);
    }

    public function songs($id = null) {
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
        $query = $this->db->get('song_lists',$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $query_total = $this->db->get('song_lists');
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
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/video-genres', $data, true);
        $this->load->view('videos', $data);
    } 
    public function genre_songs()
    {
        $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $genre_id =  $this->input->post('id');
        $genre_query = $this->db->get_where('genre',array("id"=>$genre_id));
        $genre_name = $genre_query->row_array();
        $query = $this->db->get_where('song_lists',array("genre"=>$genre_id),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->get_where('song_lists',array("genre"=>$genre_id));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
        
    }     
     public function subgenre_songs()
    {
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
        $query = $this->db->get_where('song_lists',array("subGenre"=>$genre_id),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        
        $query_total = $this->db->get_where('song_lists',array("subGenre"=>$genre_id));
        $total_page = $query_total->num_rows();
        $data['total_records'] = ceil($total_page/24);
        
        
        $data['genreName'] = $genre_name['name'];
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
        
    }        
    public function test()
    {
         $data = array();
        $query = $this->db->get('song_lists',2,0);
        $data['songs_result'] = $query->result_array();
        print("<pre>");
        print_r($data['songs_result']);
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

    public function crate() {
        $this->load->view('crate');
    }

    public function search() {
        $this->load->view('header');
        $this->load->view('carat');
        $this->load->view('footer');
    }

    public function loading() {
        $data = array();
        $type = $this->input->get('type');
        if($type == "video") {
            $this->load->view('video-loading', $data);
        } else {
            $this->load->view('song-loading', $data);
        }
        
    }
     public function ajax_loading() {
        $data = array();
         $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->get('song_lists',$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
    }
    
     public function ajax_genre_loading() {
        $genre_id =  $this->input->post('id');
        $data = array();
         $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->get_where('song_lists',array("genre"=>$genre_id),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
    }
    
     public function ajax_subgenre_loading() {
        $genre_id =  $this->input->post('id');
        $data = array();
         $boundary = $this->input->post('boundary'); 
        if(!empty($boundary))
        {
              $limit = ($boundary*24)-24;
              $offset = 24;
        }    
        $data = array();
        $query = $this->db->get_where('song_lists',array("subGenre"=>$genre_id),$offset,$limit);
        $data['songs_result'] = $query->result_array();
        $this->load->view('song-loading', $data);
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */