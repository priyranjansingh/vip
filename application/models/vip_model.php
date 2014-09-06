<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Helper_model
 *
 * @author nitish
 */
class Vip_model extends CI_model {

    private $userId;

    public function saveRemixFileInfo($song) {
        echo "<pre>";
        print_r($song);
        die;
        $this->db->insert('temp_remix_songs', $song);
    }

    public function getAllMusicGenre() {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', '1');
        $query = $this->db->get('genre');

        return $query->result();
    }

    public function getAllVideoGenre() {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', '2');
        $query = $this->db->get('genre');

        return $query->result();
    }

    public function getAllParentMusicGenre() {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', '1');
        $this->db->where('parent', NULL);
        $query = $this->db->get('genre');

        return $query->result();
    }
    
    public function getAllParentVaultGenre() {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', '3');
        $this->db->where('parent', NULL);
        $query = $this->db->get('genre');

        return $query->result();
    }

    public function getAllParentVideoGenre() {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', '2');
        $this->db->where('parent', NULL);
        $query = $this->db->get('genre');

        return $query->result();
    }

    public function getAllSubGenre($id) {

        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        //$this->db->where('type', '1');
        $this->db->where('parent', $id);
        $query = $this->db->get('genre');

        return $query->result();
    }
    
    public function validGenre($slug, $type) {
        $this->db->where('status', '1');
        $this->db->where('isDeleted', '0');
        $this->db->where('type', $type);
        $this->db->where('slug', $slug);
        $query = $this->db->get('genre');

        return $query->row();
    }

    public function saveComment($play, $comment) {
        $this->userId = $this->myauth->getUserId();

        $this->db->set('comment', $comment);
        $this->db->set('musicId', $play->id);
        $this->db->set('musicType', $play->songType);
        $this->db->set('isDeleted', '0');
        $this->db->set('createdAt', date('Y-m-d H:i:s'));
        $this->db->set('updatedAt', date('Y-m-d H:i:s'));
        $this->db->set('userId', $this->userId);

        $this->db->insert('comments');
    }

    public function getComments($play) {
        if ($this->getUserRole() == 0) {
            $this->userId = $this->myauth->getUserId();
            $this->db->where('userId', $this->userId);
        }

        $this->db->where('isDeleted', '0');
        $this->db->order_by('createdAt', 'DESC');
        $this->db->where('musicId', $play->id);
        $query = $this->db->get('comments');

        return $query->result();
    }

    public function getUserDetail($list) {
        $this->db->where_in('user_id', $list);
        $query = $this->db->get('am_user');
        return $query->result();
    }

    public function getGenreByIds($ids) {
        $this->db->where_in('id', $ids);
        $query = $this->db->get('genre');

        return $query->result();
    }

    public function getFAQ() {
        $query = $this->db->get('faq');

        return $query->result();
    }

    public function getPages($pageId) {
        $this->db->where('pageId', $pageId);
        $query = $this->db->get('pages');

        return $query->row();
    }

    public function getUserRole() {
        $this->userId = $this->myauth->getUserId();
        $this->db->where('user_group_id', '1');
        $this->db->where('user_id', $this->userId);
        $query = $this->db->get('am_user_user_group');

        return $query->num_rows();
    }

    public function getQuestions($play) {

        $result = array();
        $this->db->where('song_id', $play->id);
        $query = $this->db->get('song_question');

        if ($query->num_rows() > 0) {
            $result['status'] = true;
            $result['songId'] = $play->id;
            $temps = $query->result();

            $questionId = getIdListFromArray($temps, 'question_id');
            $this->db->where_in('id', $questionId);
            $query1 = $this->db->get('questionaire');
            $result['questions'] = $query1->result();
        } else {
            $result['status'] = false;
        }

        return $result;
    }

    public function nowPlaying() {
        $query = $this->db->get("now_playing");
        return $query->result_array();
    }

    public function saveAnswer() {
        $this->userId = $this->myauth->getUserId();
        $data = array();
        $questions = $this->input->post('question');
        $songId = $this->input->post('songId');

        if ($questions) {
            foreach ($questions as $key => $value) {
                $temp = array(
                    'song_id' => $songId,
                    'question_id' => $key,
                    'user_id' => $this->userId,
                    'answer' => json_encode($value),
                    'status' => '1',
                    'deleted' => '0',
                    'created_by' => '1',
                    'modified_user_id' => '1',
                    'date_entered' => date('Y-m-d H:i:s'),
                    'date_modified' => date('Y-m-d H:i:s')
                );
                $data[] = $temp;
            }
            $this->db->insert_batch('answer_list', $data);
        }
    }

    public function isFeedbackFormSubmit($ids) {
        $this->userId = $this->myauth->getUserId();

        $this->db->where_in('song_id', $ids);
        $this->db->where('user_id', $this->userId);
        $this->db->group_by('song_id');
        $query = $this->db->get('answer_list');

        return $query->result();
    }

    public function banners() {
        $this->db->where('status', '1');
        $this->db->where('deleted', '0');
        $query = $this->db->get('banners');

        return $query->result();
    }

    public function howToUse() {
        $this->db->where('status', '1');
        $this->db->where('deleted', '0');
        $query = $this->db->get('how_to_use');

        return $query->result();
    }

    public function setTotal() {

        $nowtime = date("Y-m-d H:i:s");

        $createdAt = date('Y-m-d H:i:s');

        $downloadDate = date('M d', strtotime($nowtime . ' -3 hours'));
        $downloadTime = date('M d, H:00A', strtotime($nowtime . ' -3 hours')) . ' - ' . date('H:00A', strtotime($nowtime));


        $startDate = date('Y-m-d H:i:s', strtotime($nowtime));
        $endDate = date('Y-m-d H:i:s', strtotime($nowtime . ' -3 hours'));

        $this->db->select('COUNT(*) AS nos');
        $this->db->where('created_at <=', $startDate);
        $this->db->where('created_at >=', $endDate);
        $query = $this->db->get('downloads');
        $result = $query->row();

        $insert = array(
            'total' => $result->nos,
            'downloadDate' => $downloadDate,
            'downloadTime' => $downloadTime,
            'createdAt' => $createdAt
        );
        $this->db->insert('total_downloads', $insert);
    }

    public function getAds($type) {
        $this->db->where('page_for_ad', $type);
        $this->db->where('status', '1');
        $this->db->where('deleted', '0');
        $query = $this->db->get('advert');

        return $query->result();
    }

}

?>
