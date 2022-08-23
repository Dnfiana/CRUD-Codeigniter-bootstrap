<?php

class Inventjournaltable_model extends CI_Model{
  
    function get_inventjournaltable($rowno, $rowperpage, $search = ""){
          
      $this->db->select('*');
      $this->db->from('inventjournaltable');

      if ($search != '') {
          $this->db->like('JOURNALID', $search);
          $this->db->or_like('DESCRIPTION', $search);
      }
      
      $result = $this->db->limit($rowperpage, $rowno)->get();

      return $result;
  }

    // count total records
    function get_inventjournaltable_count($search = '') {       
      $this->db->select('*');
      $this->db->from('inventjournaltable');

      if ($search != '') {
          $this->db->like('JOURNALID', $search);
          $this->db->or_like('DESCRIPTION', $search);
      }
      
      $result =  $this->db->count_all_results();

      return $result;
  }

    
    function save($JOURNALID, $DESCRIPTION, $POSTED, $RESERVATION, $POSTEDDATETIME, $JOURNALNAMEID, $VOUCHERDRAW, $VOUCHERSEQID, $NUMOFLINES, $RECID){
      $data = array ('JOURNALID'=> $JOURNALID, 'DESCRIPTION'=>$DESCRIPTION, 'POSTED'=>$POSTED, 'RESERVATION'=>$RESERVATION, 'POSTEDDATETIME'=>$POSTEDDATETIME, 'JOURNALNAMEID'=>$JOURNALNAMEID, 'VOUCHERDRAW'=>$VOUCHERDRAW, 'VOUCHERSEQID'=>$VOUCHERSEQID, 'NUMOFLINES'=>$NUMOFLINES, 'RECID'=>$RECID);
      $this->db->insert('inventjournaltable',$data);
  }
    function get_inventjournaltable_id ($JOURNALID){
      $query=
      $this->db->get_where('inventjournaltable',array('JOURNALID'=>$JOURNALID));
    return $query;  
    }

    function update($JOURNALID, $DESCRIPTION, $POSTED, $RESERVATION, $POSTEDDATETIME, $JOURNALNAMEID, $VOUCHERDRAW, $VOUCHERSEQID, $NUMOFLINES, $RECID){
      $data = array(
        'JOURNALID' => $JOURNALID,
        'DESCRIPTION' => $DESCRIPTION,
        'POSTED' => $POSTED,
        'RESERVATION' => $RESERVATION,
        'POSTEDDATETIME' => $POSTEDDATETIME,
        'JOURNALNAMEID' => $JOURNALNAMEID,
        'VOUCHERDRAW' => $VOUCHERDRAW,
        'VOUCHERSEQID' => $VOUCHERSEQID,
        'NUMOFLINES' => $NUMOFLINES,
        'RECID' => $RECID,
      );
      $this->db->where('JOURNALID', $JOURNALID);
      $this->db->update('inventjournaltable', $data);
    }
    function delete($JOURNALID) {
      $this->db->where('JOURNALID', $JOURNALID);
      $this->db->delete('inventjournaltable');
    } 
}

