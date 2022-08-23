<?php
class Inventdim extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('inventdim_model');
                                                                                                                                                                            
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
        $config['total_rows'] = $this->inventdim_model->get_inventdim_count($search_text);
        $config['base_url'] = base_url() . 'index.php/inventdim/index';
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
        $data['inventdim'] = $this->inventdim_model->get_inventdim($row_no, $row_per_page, $search_text);
        $data['row'] = $row_no; 
        $data['search'] = $search_text;      
        $this->load->view('inventdim/inventdim_view', $data);
       
         
    }
        
    function add_new() {
    $this->load->view('inventdim/add_inventdim_view');
  }
    
    function save(){
        $INVENTDIMID = $this->input->post('INVENTDIMID');
        $INVENTBATCHID = $this->input->post('INVENTBATCHID');
        $INVENTLOCATIONID = $this->input->post('INVENTLOCATIONID');
        $INVENTSITEID = $this->input->post('INVENTSITEID');
        $DATAAREAID = $this->input->post('DATAAREAID');
        $RECVERSION= $this->input->post('RECVERSION');
        $RECID= $this->input->post('RECID');
        $this->inventdim_model->save($INVENTDIMID,$INVENTBATCHID,$INVENTLOCATIONID,$INVENTSITEID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('inventdim'); 
  } 
    function get_edit(){
        $INVENTDIMID=$this->uri->segment(3);
        $result= 
        $this->inventdim_model->get_inventdim_id($INVENTDIMID);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'INVENTDIMID' => $i['INVENTDIMID'],
                'INVENTBATCHID' => $i['INVENTBATCHID'],
                'INVENTLOCATIONID' => $i['INVENTLOCATIONID'],
                'INVENTSITEID' => $i['INVENTSITEID'],
                'DATAAREAID' => $i['DATAAREAID'],
                'RECVERSION' => $i['RECVERSION'],
                'RECID' => $i['RECID']
            );
            $this->load->view('inventdim/edit_inventdim_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }
    
   function update(){
       $INVENTDIMID= $this->input->post('INVENTDIMID');
       $INVENTBATCHID= $this->input->post('INVENTBATCHID');
        $INVENTLOCATIONID= $this->input->post('INVENTLOCATIONID');
        $INVENTSITEID= $this->input->post('INVENTSITEID');
        $DATAAREAID= $this->input->post('DATAAREAID');
        $RECVERSION= $this->input->post('RECVERSION');
        $RECID= $this->input->post('RECID');
        $this->inventdim_model->update($INVENTDIMID,$INVENTBATCHID,$INVENTLOCATIONID,$INVENTSITEID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('inventdim');               
   } 

   function get_delete() {
    $INVENTDIMID = $this->uri->segment(3);
    $result = $this->inventdim_model->get_inventdim_id($INVENTDIMID);
    if ($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'INVENTDIMID' => $i['INVENTDIMID'],
            'INVENTBATCHID' => $i['INVENTBATCHID'],
            'INVENTLOCATIONID' => $i['INVENTLOCATIONID'],
            'INVENTSITEID' => $i['INVENTSITEID'],
            'DATAAREAID' => $i['DATAAREAID'],
            'RECVERSION' => $i['RECVERSION'],
            'RECID' => $i['RECID']
        );
        $this->load->view('inventdim/delete_inventdim_view', $data);
    } else {
        echo "Data Was Not Found";
    }
}

function delete(){
    $INVENTDIMID = $this->uri->segment(3);
    $this->inventdim_model->delete($INVENTDIMID);

    redirect('inventdim');
    }
}