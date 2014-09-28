<?php
/**
 * Class represents records from table user_status
 * It is used to determine when user status has changed
 * and not yet handled, so we must be running hooks
 * {autogenerated}
 * @property int $user_status_id 
 * @property int $user_id 
 * @property int $product_id 
 * @property int $status 
 * @see Am_Table
 */
class UserStatus extends Am_Record {
}

class UserStatusTable extends Am_Table {
    protected $_key = 'user_status_id';
    protected $_table = '?_user_status';
    protected $_recordClass = 'UserStatus';

    function getByUserId($user_id){
        return $this->_db->selectCol(
                    "SELECT product_id AS ARRAY_KEY, status
                     FROM ?_user_status
                     WHERE user_id=?d AND status = 1
                    ", $user_id);
    }
    function setByUserId($user_id, array $status)
    {
        $this->_db->query("DELETE FROM ?_user_status WHERE user_id=?d", $user_id);
        $blocks = array();
        foreach ($status as $pid=>$status)
            $blocks[] = sprintf("(%d, %d, %d)", $user_id, $pid, $status);
        if ($blocks)
            $this->_db->query("INSERT INTO ?_user_status (user_id,product_id,status) VALUES " . implode(',', $blocks));
    }
}
