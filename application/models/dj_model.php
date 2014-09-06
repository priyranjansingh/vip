<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dj_Model
 *
 * @author nitish
 */
class Dj_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getDjByIds($ids) {
        $this->db->where_in('id', $ids);
        $query = $this->db->get('dj');

        return $query->result();
    }

    public function djDetail($id) {
        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('id', $id);
        $query = $this->db->get('dj');

        return $query->row();
    }

    public function djDetailBySlug($slug) {
        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('slug', $slug);
        $query = $this->db->get('dj');

        return $query->row();
    }

    public function saveDjComment($dj, $comment) {
        $this->userId = $this->myauth->getUserId();

        $this->db->set('comment', $comment);
        $this->db->set('djId', $dj->id);
        $this->db->set('isDeleted', '0');
        $this->db->set('createdAt', date('Y-m-d H:i:s'));
        $this->db->set('updatedAt', date('Y-m-d H:i:s'));
        $this->db->set('userId', $this->userId);

        $this->db->insert('dj_comments');
    }

    public function getDjComments($dj) {
        $this->db->where('isDeleted', '0');
        $this->db->order_by('createdAt', 'DESC');
        $this->db->where('djId', $dj->id);
        $query = $this->db->get('dj_comments');

        return $query->result();
    }

}

?>
