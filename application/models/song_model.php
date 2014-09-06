<?php

/**
 * Description of Song_model
 *
 * @author nitish
 */
class Song_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function latestMusicList($banned) {
        $startDate = date('Y-m-d H:i:s');
        $date = strtotime("-7 day");
        $endDate = date('Y-m-d H:i:s', $date);

        if ($banned) {
            $this->db->where_not_in('songs', $banned);
        }

        $this->db->select('COUNT(*) AS nos, songs');
        $this->db->where('songType', '1');
        $this->db->group_by('songs');
        $this->db->limit(10);
        $this->db->order_by('nos', 'DESC');
        $this->db->where('created_at <=', $startDate);
        $this->db->where('created_at >=', $endDate);
        $query = $this->db->get('downloads');
        $result = $query->result();

        $songList = array();
        $result1 = array();

        if ($result) {
            foreach ($result as $q1) {
                $songList[] = $q1->songs;
            }

            // set this to false so that _protect_identifiers skips escaping:
            $this->db->_protect_identifiers = FALSE;

            $this->db->where_in('id', $songList);
            $this->db->where('songType', '1');

            // your order_by line:
            $this->db->order_by("FIELD (id, " . implode(',', $songList) . ")");
            $query1 = $this->db->get('song_lists');

            // important to set this back to TRUE or ALL of your queries from now on will be non-escaped:
            $this->db->_protect_identifiers = TRUE;

            $result1 = $query1->result();
        }

        return $result1;
    }

    public function latestVideoList($banned) {
        $startDate = date('Y-m-d H:i:s');
        $date = strtotime("-7 day");
        $endDate = date('Y-m-d H:i:s', $date);

        if ($banned) {
            $this->db->where_not_in('songs', $banned);
        }

        $this->db->select('COUNT(*) AS nos, songs');
        $this->db->where('songType', '2');
        $this->db->group_by('songs');
        $this->db->limit(10);
        $this->db->order_by('nos', 'DESC');
        $this->db->where('created_at <=', $startDate);
        $this->db->where('created_at >=', $endDate);
        $query = $this->db->get('downloads');
        $result = $query->result();

        $songList = array();
        $result1 = array();

        if ($result) {
            foreach ($result as $q1) {
                $songList[] = $q1->songs;
            }

            // set this to false so that _protect_identifiers skips escaping:
            $this->db->_protect_identifiers = FALSE;

            $this->db->where_in('id', $songList);
            $this->db->where('songType', '2');

            // your order_by line:
            $this->db->order_by("FIELD (id, " . implode(',', $songList) . ")");
            $query1 = $this->db->get('song_lists');

            // important to set this back to TRUE or ALL of your queries from now on will be non-escaped:
            $this->db->_protect_identifiers = TRUE;

            $result1 = $query1->result();
        }

        return $result1;
    }

    public function getTotalMusicList($genre, $subGenre, $banned) {

        if ($banned) {
            $this->db->where_not_in('id', $banned);
        }
        if ($genre) {
            $this->db->where('genre', $genre);
            if ($subGenre)
                $this->db->where('subGenre', $subGenre);
        }
        $this->db->where('songType', '1');
        $this->db->where('isApproved', '1');
        $query = $this->db->get('song_lists');

        return $query->num_rows();
    }

    public function getAllMusicList($genre, $subGenre, $banned, $offset, $limit) {

        if ($banned) {
            $this->db->where_not_in('id', $banned);
        }
        if ($genre) {
            $this->db->where('genre', $genre);
            if ($subGenre)
                $this->db->where('subGenre', $subGenre);
        }
        $this->db->limit($limit, $offset);
        $this->db->where('songType', '1');
        $this->db->where('isApproved', '1');
        $this->db->order_by('createdAt', 'DESC');
        $query = $this->db->get('song_lists');

        return $query->result();
    }

    public function getWeekMusicCount($songType) {
        $format = "Y-m-d";

        $date = date($format);

        $week = date($format, strtotime('-7 day' . $date));

        $this->db->where('createdAt >=', $week);
        $this->db->where('songType >=', $songType);
        $query = $this->db->get('song_lists');
        return count($query->result());
//        echo $this->db->last_query();
//        die;
    }

    public function getTop20MusicWeek($genre, $subGenre, $banned, $offset, $limit) {
        
    }

    public function getAllVaultList($genre, $subGenre, $banned, $offset, $limit) {

        if ($banned) {
            $this->db->where_not_in('id', $banned);
        }
        if ($genre) {
            $this->db->where('genre', $genre);
            if ($subGenre)
                $this->db->where('subGenre', $subGenre);
        }
        $this->db->limit($limit, $offset);
        $this->db->where('songType', '3');
        $this->db->where('isApproved', '1');
        $this->db->order_by('createdAt', 'DESC');
        $query = $this->db->get('song_lists');

        return $query->result();
    }

    public function getTotalVideoList($genre, $subGenre, $banned) {

        if ($banned) {
            $this->db->where_not_in('id', $banned);
        }
        if ($genre) {
            $this->db->where('genre', $genre);
            if ($subGenre)
                $this->db->where('subGenre', $subGenre);
        }
        $this->db->where('songType', '2');
        $query = $this->db->get('song_lists');

        return $query->num_rows();
    }

    public function getAllVideoList($genre, $subGenre, $banned, $offset, $limit) {
        if ($banned) {
            $this->db->where_not_in('id', $banned);
        }

        if ($genre) {
            $this->db->where('genre', $genre);
            if ($subGenre)
                $this->db->where('subGenre', $subGenre);
        }
        $this->db->limit($limit, $offset);
        $this->db->where('songType', '2');
        $this->db->order_by('createdAt', 'DESC');
        $query = $this->db->get('song_lists');

        return $query->result();
    }

    public function getPlayId($slug, $type = 1) {
        $this->db->where('slug', $slug);
        $this->db->where('songType', $type);
        $query = $this->db->get('song_lists');
        return $query->row();
    }

    public function getsongDetail($slug) {
        $this->db->where('slug', $slug);

        $query = $this->db->get('song_lists');
        return $query->row();
    }

    public function moreTrackByDj($play) {
        $this->db->where('dj', $play->dj);
        $this->db->where('genre', $play->genre);
        $this->db->where('id !=', $play->id);
        $this->db->limit(20);
        $query = $this->db->get('song_lists');

        return $query->result();
    }

    public function searchTotalSong($string, $type, $name, $bpm_from, $bpm_to, $banned) {
        if ($string) {

            $sql = "SELECT * FROM (`song_lists`) WHERE ";
            $where = '';
            $on_check = false;
            $end_check = false;
            if (!empty($bpm_from) && !empty($bpm_to)) {
                $where = "`bpm` >= '$bpm_from' AND `bpm` <= '$bpm_to' ";
            } elseif (!empty($bpm_from) && empty($bpm_to)) {
                $where = "`bpm` >= '$bpm_from' ";
            } elseif (empty($bpm_from) && !empty($bpm_to)) {
                $where = "`bpm` <= '$bpm_to' ";
            } elseif (empty($bpm_from) && empty($bpm_to)) {
                $where = "`bpm` > '0' ";
            }

            if ($name == 'song') {
                $where .= "AND (`songType` = '1' ";
                $on_check = true;
            } else if ($name == 'video') {
                $where .= "AND (`songType` = '2' ";
                $on_check = true;
            }
            if ($on_check == true)
                $where .= "AND `isApproved` = '1' ";
            else
                $where .= "AND (`isApproved` = '1' ";

            if ($type == 'artist') {
                $where .= "AND `artistName` LIKE '%$string%') ";
                $end_check = true;
            } else if ($type == 'song') {
                $where .= "AND `songName` LIKE '%$string%') ";
                $end_check = true;
            } else {
                $where .= "AND `artistName` LIKE '%$string%' OR `songName` LIKE '%$string%' )";
                $end_check = true;
            }
            $query = $this->db->query($sql . $where);
            $result = $query->num_rows();
            return $result;
        } else {
            return 0;
        }
    }

    public function searchSong($string, $type, $name, $bpm_from, $bpm_to, $banned, $offset, $limit) {

        if ($string) {
            /*
              if(!empty($bpm_from) && !empty($bpm_to)){
              $this->db->where('bpm >=', $bpm_from);
              $this->db->where('bpm <=', $bpm_to);
              } elseif(!empty($bpm_from) && empty($bpm_to)){
              $this->db->where('bpm >=', $bpm_from);
              } elseif(empty($bpm_from) && !empty($bpm_to)){
              $this->db->where('bpm <=', $bpm_to);
              } elseif(empty($bpm_from) && empty($bpm_to)){
              $this->db->where('bpm >', 0);
              }

              if ($name == 'song') {
              $this->db->where('songType', '1');
              } else if ($name == 'video') {
              $this->db->where('songType', '2');
              }
              $this->db->where('isApproved', '1');

              if ($type == 'artist') {
              $this->db->like('artistName', $string);
              } else if ($type == 'song') {
              $this->db->like('songName', $string);
              } else {
              $this->db->like('artistName', $string);
              $this->db->or_like('songName', $string);
              }

              if ($banned) {
              $this->db->where_not_in('id', $banned);
              }
              $this->db->limit($limit, $offset);
              $query = $this->db->get('song_lists');
              //echo $this->db->last_query();
              //die;
             */
            $sql = "SELECT * FROM (`song_lists`) WHERE ";
            $where = '';
            $on_check = false;
            $end_check = false;
            if (!empty($bpm_from) && !empty($bpm_to)) {
                $where = "`bpm` >= '$bpm_from' AND `bpm` <= '$bpm_to' ";
            } elseif (!empty($bpm_from) && empty($bpm_to)) {
                $where = "`bpm` >= '$bpm_from' ";
            } elseif (empty($bpm_from) && !empty($bpm_to)) {
                $where = "`bpm` <= '$bpm_to' ";
            } elseif (empty($bpm_from) && empty($bpm_to)) {
                $where = "`bpm` > '0' ";
            }

            if ($name == 'song') {
                $where .= "AND (`songType` = '1' ";
                $on_check = true;
            } else if ($name == 'video') {
                $where .= "AND (`songType` = '2' ";
                $on_check = true;
            }
            if ($on_check == true)
                $where .= "AND `isApproved` = '1' ";
            else
                $where .= "AND (`isApproved` = '1' ";

            if ($type == 'artist') {
                $where .= "AND `artistName` LIKE '%$string%') ";
                $end_check = true;
            } else if ($type == 'song') {
                $where .= "AND `songName` LIKE '%$string%') ";
                $end_check = true;
            } else {
                $where .= "AND `artistName` LIKE '%$string%' OR `songName` LIKE '%$string%' )";
                $end_check = true;
            }
            $query = $this->db->query($sql . $where);
            //$result = $query->num_rows();
            //return $result;
            return $query->result();
        } else {
            return array();
        }
    }

    public function searchTotalBpmSong($from, $to) {
        if (!empty($from) || !empty($to)) {

            $sql = "SELECT * FROM (`song_lists`) WHERE ";
            $where = '';
            $on_check = false;
            $end_check = false;
            if (!empty($from) && !empty($to)) {
                $where = "`bpm` >= '$from' AND `bpm` <= '$to' ";
            } elseif (!empty($from) && empty($to)) {
                $where = "`bpm` >= '$from' ";
            } elseif (empty($from) && !empty($to)) {
                $where = "`bpm` <= '$to' ";
            } elseif (empty($from) && empty($to)) {
                $where = "`bpm` > '0' ";
            }

            $where .= "AND (`isApproved` = '1') ";

            $query = $this->db->query($sql . $where);
            $result = $query->num_rows();
            return $result;
        } else {
            return 0;
        }
    }

    public function searchBpmSong($from, $to, $offset, $limit) {

        if (!empty($from) || !empty($to)) {

            $sql = "SELECT * FROM (`song_lists`) WHERE ";
            $where = '';
            $on_check = false;
            $end_check = false;
            if (!empty($from) && !empty($to)) {
                $where = "`bpm` >= '$from' AND `bpm` <= '$to' ";
            } elseif (!empty($from) && empty($to)) {
                $where = "`bpm` >= '$from' ";
            } elseif (empty($from) && !empty($to)) {
                $where = "`bpm` <= '$to' ";
            } elseif (empty($from) && empty($to)) {
                $where = "`bpm` > '0' ";
            }

            $where .= "AND (`isApproved` = '1') ";

            $query = $this->db->query($sql . $where);
            $result = $query->result();
            return $result;
        } else {
            return 0;
        }
    }

    public function searchDj($string) {
        $this->db->like('name', $string);
        $query = $this->db->get('dj');
        return $query->result();
    }

    public function getBannedSong() {
        //$u = getUserCountry();
        //$this->db->where('name', $u->country_name);
        //$this->db->where('name', 'India');
        //$this->db->or_where('code', $u->country_code);
        $query = $this->db->get('countries');

        if ($query->num_rows() > 0) {
            $this->db->where('country_id', $query->row()->country_id);
            //$this->db->or_where('code', $u->country_code);
            $query1 = $this->db->get('ban_song');

            if ($query1->num_rows() > 0) {
                $data = $query1->result();

                $songs = getIdListFromArray($data, 'song_id');
                return $songs;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    public function updateTotalPlay($id) {
        $this->db->where('id', $id);
        $this->db->set('total_play', 'total_play + 1', FALSE);
        $this->db->update('song_lists');
    }

    public function updateTotalDownload($id) {
        $this->db->where('id', $id);
        $this->db->set('total_download', 'total_download + 1', FALSE);
        $this->db->update('song_lists');
    }

    public function updateTopOfTheWeek($id) {
        $this->db->where('id', $id);
        $this->db->set('top_of_the_week', 'top_of_the_week + 1', FALSE);
        $this->db->update('song_lists');
    }

    public function top20List($type, $banned) {
        if ($type == "week") {
            $startDate = date('Y-m-d 00:00:00', strtotime('monday this week'));
            $endDate = date('Y-m-d 23:59:59', strtotime('sunday this week'));
        } else if ($type == "month") {
            $startDate = date('Y-m-d 00:00:00', strtotime('first day of this month'));
            $endDate = date('Y-m-d 23:59:59', strtotime('last day of this month'));
        } else if ($type == "year") {
            $startDate = date('Y') . '-01-01 00:00:00';
            $endDate = date('Y') . '-12-31 00:00:00';
        } else if($type == "day"){
            $startDate = date('Y-m-d') . ' 00:00:00';
            $endDate = date('Y-m-d') . ' 23:59:59';
        }



        if ($banned) {
            $this->db->where_not_in('songs', $banned);
        }

        $this->db->select('COUNT(*) AS nos, songs');
        $this->db->group_by('songs');
        $this->db->limit(20);
        $this->db->order_by('nos', 'DESC');
        $this->db->where('created_at >=', $startDate);
        $this->db->where('created_at <=', $endDate);
        $query = $this->db->get('downloads');
        $result = $query->result();

        $songList = array();
        $result1 = array();

//        echo $this->db->last_query();
//        die;
        if ($result) {
            foreach ($result as $q1) {
                $songList[] = $q1->songs;
            }

            // set this to false so that _protect_identifiers skips escaping:
            $this->db->_protect_identifiers = FALSE;

            $this->db->where_in('id', $songList);

            // your order_by line:
            $this->db->order_by("FIELD (id, " . implode(',', $songList) . ")");
            $query1 = $this->db->get('song_lists');

            // important to set this back to TRUE or ALL of your queries from now on will be non-escaped:
            $this->db->_protect_identifiers = TRUE;

            $result1 = $query1->result();
        }
//        print_r($this->db->last_query());
        return $result1;
    }

}

?>
