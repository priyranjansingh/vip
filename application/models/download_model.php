<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of downloads
 *
 * @author nitish
 */
class Download_model extends CI_Model {

    private $userId;

    public function __construct() {
        parent::__construct();
    }

    public function get($d) {


        $startTime = date('Y-m-d G:i:s', $d);

        //$end = new DateTime($startTime);
        //$end->modify("+1 hour");
        //$endTime = $end->date;
        $endTime = date("Y-m-d G:i:s", strtotime($startTime . " + -3 days"));

        $this->db->select('*, COUNT(*) AS res');
        $this->db->where('created_at >=', $startTime);
        $this->db->where('created_at <=', $endTime);
        $this->db->group_by('dj');
        $this->db->order_by('res', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get('downloads');
        //  print_r($this->db->last_query());
        return $query->result();
    }

    public function getTotalDownload() {
        $this->db->order_by('createdAt', 'DESC');
        $this->db->limit(56);
        $query = $this->db->get('total_downloads');
        return $query->result_array();
    }

    public function saveDownloads($play) {
        $this->userId = $this->myauth->getUserId();

        $this->db->set('songs', $play->id);
        $this->db->set('songType', $play->songType);
        $this->db->set('dj', $play->dj);
        $this->db->set('status', '1');
        $this->db->set('is_delete', '0');
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('updated_at', date('Y-m-d H:i:s'));
        $this->db->set('user_id', $this->userId);

        $this->db->insert('downloads');
    }

    public function countDownloads($play) {
        $this->userId = $this->myauth->getUserId();

        $this->db->where('songs', $play->id);
        $this->db->where('status', '1');
        $this->db->where('is_delete', '0');
        $this->db->where('user_id', $this->userId);

        $query = $this->db->get('downloads');
        return $query->num_rows();
    }

    public function noOfDownload($play) {
        $this->db->where('songs', $play->id);
        $this->db->set('status', '1');
        $this->db->set('is_delete', '0');

        $query = $this->db->get('downloads');
        return $query->num_rows();
    }

    public function countDownloadSongs($ids) {
        $this->userId = $this->myauth->getUserId();

        $this->db->select('songs, count(*) AS nos');
        $this->db->where_in('songs', $ids);
        $this->db->where('status', '1');
        $this->db->where('is_delete', '0');
        $this->db->where('user_id', $this->userId);
        $this->db->group_by('songs');

        $query = $this->db->get('downloads');
        return $query->result();
    }

}

?>
