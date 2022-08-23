<?php

class Dddoctorgrossfee_model extends CI_Model{
  
    function get_dddoctorgrossfee($rowno, $rowperpage, $search = ""){
          
      $this->db->select('*');
      $this->db->from('dddoctorgrossfee');

      if ($search != '') {
          $this->db->like('RECID', $search);
          $this->db->or_like('ACCOUNT', $search);
      }
      
      $result = $this->db->limit($rowperpage, $rowno)->get();

      return $result;
  }

    // count total records
    function get_dddoctorgrossfee_count($search = '') {       
      $this->db->select('*');
      $this->db->from('dddoctorgrossfee');

      if ($search != '') {
          $this->db->like('RECID', $search);
          $this->db->or_like('ACCOUNT', $search);
      }
      
      $result =  $this->db->count_all_results();

      return $result;
  }

    
    function save($RECID, $ACCOUNT, $ACCOUNTNAME, $DDBILLNO, $DDBILLDATE, $LINEAMOUNT, $DDDOCTORPCT, $DDORDERITEMID, $DDORDERITEMCODE, $DDMRNO){
      $data = array ('RECID'=> $RECID, 'ACCOUNT'=>$ACCOUNT, 'ACCOUNTNAME'=>$ACCOUNTNAME, 'DDBILLNO'=>$DDBILLNO, 'DDBILLDATE'=>$DDBILLDATE, 'LINEAMOUNT'=>$LINEAMOUNT, 'DDDOCTORPCT'=>$DDDOCTORPCT, 'DDORDERITEMID'=>$DDORDERITEMID, 'DDORDERITEMCODE'=>$DDORDERITEMCODE, 'DDMRNO'=>$DDMRNO);
      $this->db->insert('dddoctorgrossfee',$data);
  }
    function get_dddoctorgrossfee_id ($RECID){
      $query=
      $this->db->get_where('dddoctorgrossfee',array('RECID'=>$RECID));
    return $query;  
    }

    function update($RECID, $ACCOUNT, $ACCOUNTNAME, $DDBILLNO, $DDBILLDATE, $LINEAMOUNT, $DDDOCTORPCT, $DDORDERITEMID, $DDORDERITEMCODE, $DDMRNO){
      $data = array(
        'RECID' => $RECID,
        'ACCOUNT' => $ACCOUNT,
        'ACCOUNTNAME' => $ACCOUNTNAME,
        'DDBILLNO' => $DDBILLNO,
        'DDBILLDATE' => $DDBILLDATE,
        'LINEAMOUNT' => $LINEAMOUNT,
        'DDDOCTORPCT' => $DDDOCTORPCT,
        'DDORDERITEMID' => $DDORDERITEMID,
        'DDORDERITEMCODE' => $DDORDERITEMCODE,
        'DDMRNO' => $DDMRNO,
      );
      $this->db->where('RECID', $RECID);
      $this->db->update('dddoctorgrossfee', $data);
    }
    function delete($RECID) {
      $this->db->where('RECID', $RECID);
      $this->db->delete('dddoctorgrossfee');
    } 
}

