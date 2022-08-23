<?php

class vendinvoicepurchlink_model extends CI_Model{
  
    function get_vendinvoicepurchlink($rowno, $rowperpage, $search = ""){
          
      $this->db->select('*');
      $this->db->from('vendinvoicepurchlink');

      if ($search != '') {
          $this->db->like('INVOICEID', $search);
          $this->db->or_like('INVOICEDATE', $search);
      }
      
      $result = $this->db->limit($rowperpage, $rowno)->get();

      return $result;
  }

    // count total records
    function get_vendinvoicepurchlink_count($search = '') {       
      $this->db->select('*');
      $this->db->from('vendinvoicepurchlink');

      if ($search != '') {
          $this->db->like('INVOICEID', $search);
          $this->db->or_like('INVOICEDATE', $search);
      }
      
      $result =  $this->db->count_all_results();

      return $result;
  }

    
    function save($INVOICEID, $INVOICEDATE, $PURCHID, $INVOICEACCOUNT, $PARMID, $INTERNALINVOICEID, $DATAAREAID, $RECVERSION, $RECID){
      $data = array ('INVOICEID'=> $INVOICEID, 'INVOICEDATE'=>$INVOICEDATE, 'PURCHID'=>$PURCHID, 'INVOICEACCOUNT'=>$INVOICEACCOUNT, 'PARMID'=>$PARMID, 'INTERNALINVOICEID'=>$INTERNALINVOICEID, 'DATAAREAID'=>$DATAAREAID, 'RECVERSION'=>$RECVERSION, 'RECID'=>$RECID);
      $this->db->insert('vendinvoicepurchlink',$data);
  }
    function get_vendinvoicepurchlink_id ($INVOICEID){
      $query=
      $this->db->get_where('vendinvoicepurchlink',array('INVOICEID'=>$INVOICEID));
    return $query;  
    }

    function update($INVOICEID, $INVOICEDATE, $PURCHID, $INVOICEACCOUNT, $PARMID, $INTERNALINVOICEID, $DATAAREAID, $RECVERSION, $RECID){
      $data = array(
        'INVOICEID' => $INVOICEID,
        'INVOICEDATE' => $INVOICEDATE,
        'PURCHID' => $PURCHID,
        'INVOICEACCOUNT' => $INVOICEACCOUNT,
        'PARMID' => $PARMID,
        'INTERNALINVOICEID' => $INTERNALINVOICEID,
        'DATAAREAID' => $DATAAREAID,
        'RECVERSION' => $RECVERSION,
        'RECID' => $RECID,
      );
      $this->db->where('INVOICEID', $INVOICEID);
      $this->db->update('vendinvoicepurchlink', $data);
    }
    function delete($INVOICEID) {
      $this->db->where('INVOICEID', $INVOICEID);
      $this->db->delete('vendinvoicepurchlink');
    } 
}

