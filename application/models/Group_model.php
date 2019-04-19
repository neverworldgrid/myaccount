<?php
class Group_model extends CI_Model
  {
    function __construct()
      {
        parent::__construct();
        $groups = $this->load->database('groups', TRUE);
      }
    public function get_user_groups($uuid)
      {
        $groups->select('*');
        $groups->from('os_groups_membership');
        $groups->where('PrincipalID', $uuid);
        $query = $groups->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
    public function get_groups($uuid)
      {
        $groups->select('*');
        $groups->from('os_groups_membership');
        $groups->where('PrincipalID', $uuid);
        $query = $groups->get();
        $row = $query->result_array();
        if (isset($row))
          {
            return $row;
          }
      }
  }
?>
