<?php

class Inventdim_model extends CI_Model{
  
    function get_inventdim($rowno, $rowperpage, $search = ""){
          
      $this->db->select('*');
      $this->db->from('inventdim');

      if ($search != '') {
          $this->db->like('INVENTDIMID', $search);
          $this->db->or_like('INVENTBATCHID', $search);
      }
      
      $result = $this->db->limit($rowperpage, $rowno)->get();

      return $result;
  }

    // count total records
    function get_inventdim_count($search = '') {       
      $this->db->select('*');
      $this->db->from('inventdim');

      if ($search != '') {
          $this->db->like('INVENTDIMID', $search);
          $this->db->or_like('INVENTBATCHID', $search);
      }
      
      $result =  $this->db->count_all_results();

      return $result;
  }

    
    function save($INVENTDIMID, $INVENTBATCHID, $INVENTLOCATIONID, $INVENTSITEID, $DATAAREAID, $RECVERSION, $RECID){
      $data = array ('INVENTDIMID'=> $INVENTDIMID, 'INVENTBATCHID'=>$INVENTBATCHID, 'INVENTLOCATIONID'=>$INVENTLOCATIONID, 'INVENTSITEID'=>$INVENTSITEID, 'DATAAREAID'=>$DATAAREAID, 'RECVERSION'=>$RECVERSION, 'RECID'=>$RECID);
      $this->db->insert('inventdim',$data);
  }
    function get_inventdim_id ($INVENTDIMID){
      $query=
      $this->db->get_where('inventdim',array('INVENTDIMID'=>$INVENTDIMID));
    return $query;  
    }

    function update($INVENTDIMID, $INVENTBATCHID, $INVENTLOCATIONID, $INVENTSITEID, $DATAAREAID, $RECVERSION, $RECID){
      $data = array(
        'INVENTDIMID' => $INVENTDIMID,
        'INVENTBATCHID' => $INVENTBATCHID,
        'INVENTLOCATIONID' => $INVENTLOCATIONID,
        'INVENTSITEID' => $INVENTSITEID,
        'DATAAREAID' => $DATAAREAID,
        'RECVERSION' => $RECVERSION,
        'RECID' => $RECID,
      );
      $this->db->where('INVENTDIMID', $INVENTDIMID);
      $this->db->update('inventdim', $data);
    }
    function delete($INVENTDIMID) {
      $this->db->where('INVENTDIMID', $INVENTDIMID);
      $this->db->delete('inventdim');
    } 
}

