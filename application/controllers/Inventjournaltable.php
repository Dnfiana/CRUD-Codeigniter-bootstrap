<?php
class Inventjournaltable extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('inventjournaltable_model');
                                                                                                                                                                            
    }

    function index($row_no = 0){

        // Search text
        $search_text = "";
        if ($this->input->post('submit') != NULL) {
            $search_text = $this->input->post('search');
            $this->session->set_userdata(array("search" => $search_text));
        } else {
            if ($this->session->userdata('search') != NULL) {
                $search_text = $this->session->userdata('search');
            }
        }
        
        // Row per page
        $row_per_page = 5;

        // Row position
        if ($row_no != 0) {
            $row_no = ($row_no - 1) * $row_per_page;
        }
        
        
        // Pagination Configuration
        // All records count
        $config['total_rows'] = $this->inventjournaltable_model->get_inventjournaltable_count($search_text);
        $config['base_url'] = base_url() . 'index.php/inventjournaltable/index';
        $config['use_page_numbers'] = TRUE;
        $config['per_page'] = $row_per_page;

        //Membuat style pagination untuk bootstrap v4
        $config['first_link']      ='First';
        $config['last_link']       ='Last';
        $config['next_link']       ='Next';
        $config['prev_link']       ='Prev';
        $config['full_tag_open']   ='<div class="pagging text-center"><nav><ul class="pagination">';
        $confi['full_tag_close']   ='</ul></nav></div>';
        $config['num_tag_open']    ='<li class="page-item"><span class="page-link">';
        $config['num_tag_close']   ='</span></li>';
        $config['cur_tag_open']    ='<li class="page-item active"><span class="page-link">';
        $config['cur-tag_close']   ='<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']   ='<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] ='<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']   ='<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] ='</span>Next</li>';
        $config['first_tag_open']  ='<li class="page-item"><span class="page-link">';
        $config['first_tagl_close']='</span></li>';
        $config['last_tag_open']   ='<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] ='</span></li>';
        
        
        // Initialize
        $this->pagination->initialize($config);   
        $data['pagination'] = $this->pagination->create_links();
        
        // Get  records
        $data['inventjournaltable'] = $this->inventjournaltable_model->get_inventjournaltable($row_no, $row_per_page, $search_text);
        $data['row'] = $row_no; 
        $data['search'] = $search_text;      
        $this->load->view('inventjournaltable/inventjournaltable_view', $data);
       
         
    }
        
    function add_new() {
    $this->load->view('inventjournaltable/add_inventjournaltable_view');
  }
    
    function save(){
        $JOURNALID = $this->input->post('JOURNALID');
        $DESCRIPTION = $this->input->post('DESCRIPTION');
        $POSTED = $this->input->post('POSTED');
        $RESERVATION = $this->input->post('RESERVATION');
        $POSTEDDATETIME = $this->input->post('POSTEDDATETIME');
        $JOURNALNAMEID= $this->input->post('JOURNALNAMEID');
        $VOUCHERDRAW= $this->input->post('VOUCHERDRAW');
        $VOUCHERSEQID= $this->input->post('VOUCHERSEQID');
        $NUMOFLINES= $this->input->post('NUMOFLINES');
        $RECID= $this->input->post('RECID');
        $this->inventjournaltable_model->save($JOURNALID,$DESCRIPTION,$POSTED,$RESERVATION,$POSTEDDATETIME,$JOURNALNAMEID,$VOUCHERDRAW,$VOUCHERSEQID,$NUMOFLINES,$RECID);
        redirect('inventjournaltable'); 
  } 
    function get_edit(){
        $JOURNALID=$this->uri->segment(3);
        $result= 
        $this->inventjournaltable_model->get_inventjournaltable_id($JOURNALID);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'JOURNALID' => $i['JOURNALID'],
                'DESCRIPTION' => $i['DESCRIPTION'],
                'POSTED' => $i['POSTED'],
                'RESERVATION' => $i['RESERVATION'],
                'POSTEDDATETIME' => $i['POSTEDDATETIME'],
                'JOURNALNAMEID' => $i['JOURNALNAMEID'],
                'VOUCHERDRAW' => $i['VOUCHERDRAW'],
                'VOUCHERSEQID' => $i['VOUCHERSEQID'],
                'NUMOFLINES' => $i['NUMOFLINES'],
                'RECID' => $i['RECID'],
            );
            $this->load->view('inventjournaltable/edit_inventjournaltable_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }
    
   function update(){
       $JOURNALID= $this->input->post('JOURNALID');
       $DESCRIPTION= $this->input->post('DESCRIPTION');
        $POSTED= $this->input->post('POSTED');
        $RESERVATION= $this->input->post('RESERVATION');
        $POSTEDDATETIME= $this->input->post('POSTEDDATETIME');
        $JOURNALNAMEID= $this->input->post('JOURNALNAMEID');
        $VOUCHERDRAW= $this->input->post('VOUCHERDRAW');
        $VOUCHERSEQID= $this->input->post('VOUCHERSEQID');
        $NUMOFLINES= $this->input->post('NUMOFLINES');
        $RECID= $this->input->post('RECID');
        $this->inventjournaltable_model->update($JOURNALID,$DESCRIPTION,$POSTED,$RESERVATION,$POSTEDDATETIME,$JOURNALNAMEID,$VOUCHERDRAW,$VOUCHERSEQID,$NUMOFLINES,$RECID);
        redirect('inventjournaltable');               
   } 

   function get_delete() {
    $JOURNALID = $this->uri->segment(3);
    $result = $this->inventjournaltable_model->get_inventjournaltable_id($JOURNALID);
    if ($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'JOURNALID' => $i['JOURNALID'],
            'DESCRIPTION' => $i['DESCRIPTION'],
            'POSTED' => $i['POSTED'],
            'RESERVATION' => $i['RESERVATION'],
            'POSTEDDATETIME' => $i['POSTEDDATETIME'],
            'JOURNALNAMEID' => $i['JOURNALNAMEID'],
            'VOUCHERDRAW' => $i['VOUCHERDRAW'],
            'VOUCHERSEQID' => $i['VOUCHERSEQID'],
            'NUMOFLINES' => $i['NUMOFLINES'],
            'RECID' => $i['RECID'],
        );
        $this->load->view('inventjournaltable/delete_inventjournaltable_view', $data);
    } else {
        echo "Data Was Not Found";
    }
}

function delete(){
    $JOURNALID = $this->uri->segment(3);
    $this->inventjournaltable_model->delete($JOURNALID);

    redirect('inventjournaltable');
    }
}