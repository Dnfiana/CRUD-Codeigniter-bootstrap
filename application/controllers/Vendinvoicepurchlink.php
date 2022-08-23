<?php
class Vendinvoicepurchlink extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('vendinvoicepurchlink_model');
                                                                                                                                                                            
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
        $config['total_rows'] = $this->vendinvoicepurchlink_model->get_vendinvoicepurchlink_count($search_text);
        $config['base_url'] = base_url() . 'index.php/vendinvoicepurchlink/index';
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
        $data['vendinvoicepurchlink'] = $this->vendinvoicepurchlink_model->get_vendinvoicepurchlink($row_no, $row_per_page, $search_text);
        $data['row'] = $row_no; 
        $data['search'] = $search_text;      
        $this->load->view('vendinvoicepurchlink/vendinvoicepurchlink_view', $data);
       
         
    }
        
    function add_new() {
    $this->load->view('vendinvoicepurchlink/add_vendinvoicepurchlink_view');
  }
    
    function save(){
        $INVOICEID = $this->input->post('INVOICEID');
        $INVOICEDATE = $this->input->post('INVOICEDATE');
        $PURCHID = $this->input->post('PURCHID');
        $INVOICEACCOUNT = $this->input->post('INVOICEACCOUNT');
        $PARMID = $this->input->post('PARMID');
        $INTERNALINVOICEID= $this->input->post('INTERNALINVOICEID');
        $DATAAREAID= $this->input->post('DATAAREAID');
        $RECVERSION= $this->input->post('RECVERSION');
        $RECID= $this->input->post('RECID');
        $this->vendinvoicepurchlink_model->save($INVOICEID,$INVOICEDATE,$PURCHID,$INVOICEACCOUNT,$PARMID,$INTERNALINVOICEID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('vendinvoicepurchlink'); 
  } 
    function get_edit(){
        $INVOICEID=$this->uri->segment(3);
        $result= 
        $this->vendinvoicepurchlink_model->get_vendinvoicepurchlink_id($INVOICEID);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'INVOICEID' => $i['INVOICEID'],
                'INVOICEDATE' => $i['INVOICEDATE'],
                'PURCHID' => $i['PURCHID'],
                'INVOICEACCOUNT' => $i['INVOICEACCOUNT'],
                'PARMID' => $i['PARMID'],
                'INTERNALINVOICEID' => $i['INTERNALINVOICEID'],
                'DATAAREAID' => $i['DATAAREAID'],
                'RECVERSION' => $i['RECVERSION'],
                'RECID' => $i['RECID'],
            );
            $this->load->view('vendinvoicepurchlink/edit_vendinvoicepurchlink_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }
    
   function update(){
       $INVOICEID= $this->input->post('INVOICEID');
       $INVOICEDATE= $this->input->post('INVOICEDATE');
        $PURCHID= $this->input->post('PURCHID');
        $INVOICEACCOUNT= $this->input->post('INVOICEACCOUNT');
        $PARMID= $this->input->post('PARMID');
        $INTERNALINVOICEID= $this->input->post('INTERNALINVOICEID');
        $DATAAREAID= $this->input->post('DATAAREAID');
        $RECVERSION= $this->input->post('RECVERSION');
        $RECID= $this->input->post('RECID');
        $this->vendinvoicepurchlink_model->update($INVOICEID,$INVOICEDATE,$PURCHID,$INVOICEACCOUNT,$PARMID,$INTERNALINVOICEID,$DATAAREAID,$RECVERSION,$RECID);
        redirect('vendinvoicepurchlink');               
   } 

   function get_delete() {
    $INVOICEID = $this->uri->segment(3);
    $result = $this->vendinvoicepurchlink_model->get_vendinvoicepurchlink_id($INVOICEID);
    if ($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'INVOICEID' => $i['INVOICEID'],
            'INVOICEDATE' => $i['INVOICEDATE'],
            'PURCHID' => $i['PURCHID'],
            'INVOICEACCOUNT' => $i['INVOICEACCOUNT'],
            'PARMID' => $i['PARMID'],
            'INTERNALINVOICEID' => $i['INTERNALINVOICEID'],
            'DATAAREAID' => $i['DATAAREAID'],
            'RECVERSION' => $i['RECVERSION'],
            'RECID' => $i['RECID'],
        );
        $this->load->view('vendinvoicepurchlink/delete_vendinvoicepurchlink_view', $data);
    } else {
        echo "Data Was Not Found";
    }
}

function delete(){
    $INVOICEID = $this->uri->segment(3);
    $this->vendinvoicepurchlink_model->delete($INVOICEID);

    redirect('vendinvoicepurchlink');
    }
}