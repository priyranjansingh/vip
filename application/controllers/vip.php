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
        $data = array();
        $query = $this->db->get('song_lists');
        $data['songs_result'] = $query->result_array();
      
        $query_genre = $this->db->get_where('genre',array('parent'=>'0'));
        $data['genre_result'] = $query_genre->result_array();
      
        $data['genreName'] = 'All';
        $data['genres'] = $this->load->view('helper/ajax-song-genres', $data, true);
        $this->load->view('ajax-songs', $data);
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