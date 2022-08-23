<?php
class Dddoctorgrossfee extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('dddoctorgrossfee_model');
                                                                                                                                                                            
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
        $config['total_rows'] = $this->dddoctorgrossfee_model->get_dddoctorgrossfee_count($search_text);
        $config['base_url'] = base_url() . 'index.php/dddoctorgrossfee/index';
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
        $data['dddoctorgrossfee'] = $this->dddoctorgrossfee_model->get_dddoctorgrossfee($row_no, $row_per_page, $search_text);
        $data['row'] = $row_no; 
        $data['search'] = $search_text;      
        $this->load->view('dddoctorgrossfee/dddoctorgrossfee_view', $data);
       
         
    }
        
    function add_new() {
    $this->load->view('dddoctorgrossfee/add_dddoctorgrossfee_view');
  }
    
    function save(){
        $RECID = $this->input->post('RECID');
        $ACCOUNT = $this->input->post('ACCOUNT');
        $ACCOUNTNAME = $this->input->post('ACCOUNTNAME');
        $DDBILLNO = $this->input->post('DDBILLNO');
        $DDBILLDATE = $this->input->post('DDBILLDATE');
        $LINEAMOUNT= $this->input->post('LINEAMOUNT');
        $DDDOCTORPCT= $this->input->post('DDDOCTORPCT');
        $DDORDERITEMID= $this->input->post('DDORDERITEMID');
        $DDORDERITEMCODE= $this->input->post('DDORDERITEMCODE');
        $DDMRNO= $this->input->post('DDMRNO');
        $this->dddoctorgrossfee_model->save($RECID,$ACCOUNT,$ACCOUNTNAME,$DDBILLNO,$DDBILLDATE,$LINEAMOUNT,$DDDOCTORPCT,$DDORDERITEMID,$DDORDERITEMCODE,$DDMRNO);
        redirect('dddoctorgrossfee'); 
  } 
    function get_edit(){
        $RECID=$this->uri->segment(3);
        $result= 
        $this->dddoctorgrossfee_model->get_dddoctorgrossfee_id($RECID);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'RECID' => $i['RECID'],
                'ACCOUNT' => $i['ACCOUNT'],
                'ACCOUNTNAME' => $i['ACCOUNTNAME'],
                'DDBILLNO' => $i['DDBILLNO'],
                'DDBILLDATE' => $i['DDBILLDATE'],
                'LINEAMOUNT' => $i['LINEAMOUNT'],
                'DDDOCTORPCT' => $i['DDDOCTORPCT'],
                'DDORDERITEMID' => $i['DDORDERITEMID'],
                'DDORDERITEMCODE' => $i['DDORDERITEMCODE'],
                'DDMRNO' => $i['DDMRNO'],
            );
            $this->load->view('dddoctorgrossfee/edit_dddoctorgrossfee_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }
    
   function update(){
       $RECID= $this->input->post('RECID');
       $ACCOUNT= $this->input->post('ACCOUNT');
        $ACCOUNTNAME= $this->input->post('ACCOUNTNAME');
        $DDBILLNO= $this->input->post('DDBILLNO');
        $DDBILLDATE= $this->input->post('DDBILLDATE');
        $LINEAMOUNT= $this->input->post('LINEAMOUNT');
        $DDDOCTORPCT= $this->input->post('DDDOCTORPCT');
        $DDORDERITEMID= $this->input->post('DDORDERITEMID');
        $DDORDERITEMCODE= $this->input->post('DDORDERITEMCODE');
        $DDMRNO= $this->input->post('DDMRNO');
        $this->dddoctorgrossfee_model->update($RECID,$ACCOUNT,$ACCOUNTNAME,$DDBILLNO,$DDBILLDATE,$LINEAMOUNT,$DDDOCTORPCT,$DDORDERITEMID,$DDORDERITEMCODE,$DDMRNO);
        redirect('dddoctorgrossfee');               
   } 

   function get_delete() {
    $RECID = $this->uri->segment(3);
    $result = $this->dddoctorgrossfee_model->get_dddoctorgrossfee_id($RECID);
    if ($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'RECID' => $i['RECID'],
            'ACCOUNT' => $i['ACCOUNT'],
            'ACCOUNTNAME' => $i['ACCOUNTNAME'],
            'DDBILLNO' => $i['DDBILLNO'],
            'DDBILLDATE' => $i['DDBILLDATE'],
            'LINEAMOUNT' => $i['LINEAMOUNT'],
            'DDDOCTORPCT' => $i['DDDOCTORPCT'],
            'DDORDERITEMID' => $i['DDORDERITEMID'],
            'DDORDERITEMCODE' => $i['DDORDERITEMCODE'],
            'DDMRNO' => $i['DDMRNO'],
        );
        $this->load->view('dddoctorgrossfee/delete_dddoctorgrossfee_view', $data);
    } else {
        echo "Data Was Not Found";
    }
}

function delete(){
    $RECID = $this->uri->segment(3);
    $this->dddoctorgrossfee_model->delete($RECID);

    redirect('dddoctorgrossfee');
    }
}