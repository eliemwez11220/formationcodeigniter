<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('user/index?');
        $config['total_rows'] = $this->User_model->get_all_users_count();
        $this->pagination->initialize($config);
        $data['users'] = $this->User_model->get_all_users($params);
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');
		$this->form_validation->set_rules('user_telephone','User Telephone','is_unique[users.user_telephone]');
		$this->form_validation->set_rules('user_email','User Email','valid_email|is_unique[users.user_email]');
		$this->form_validation->set_rules('user_pseudo','User Pseudo','is_unique[users.user_pseudo]');
        $this->form_validation->set_rules('user_password','User Password','required');

		if($this->form_validation->run())     
        {   
            $salt_options = array('cost' => 12);
            $new_password_hashed = password_hash(trim($this->input->post('user_password')), PASSWORD_BCRYPT, $salt_options);

            $params = array(
				'user_role' => $this->input->post('user_role'),
				'user_password' => $new_password_hashed,
				'user_nom' => $this->input->post('user_nom'),
				'user_telephone' => $this->input->post('user_telephone'),
				'user_email' => $this->input->post('user_email'),
				'user_pseudo' => $this->input->post('user_pseudo'),
				'user_type' => 'user',
				'user_statut' => 'actif',
				'user_created_at' => date('Y-m-d H:i:s'),
				'user_created_by' => $this->session->fullname,
				'user_biography' => $this->input->post('user_biography'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($user_uid)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($user_uid);
        
        if(isset($data['user']['user_uid']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_telephone','User Telephone','is_unique[users.user_telephone]');
			$this->form_validation->set_rules('user_email','User Email','valid_email|is_unique[users.user_email]');
			$this->form_validation->set_rules('user_pseudo','User Pseudo','is_unique[users.user_pseudo]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_role' => $this->input->post('user_role'),
					'user_password' => $this->input->post('user_password'),
					'user_nom' => $this->input->post('user_nom'),
					'user_telephone' => $this->input->post('user_telephone'),
					'user_email' => $this->input->post('user_email'),
					'user_pseudo' => $this->input->post('user_pseudo'),
					'user_type' => $this->input->post('user_type'),
					'user_avatar' => $this->input->post('user_avatar'),
					'user_statut' => $this->input->post('user_statut'),
					'user_created_at' => $this->input->post('user_created_at'),
					'user_created_by' => $this->input->post('user_created_by'),
					'user_updated_at' => $this->input->post('user_updated_at'),
					'user_updated_by' => $this->input->post('user_updated_by'),
					'user_deleted_at' => $this->input->post('user_deleted_at'),
					'user_deleted_by' => $this->input->post('user_deleted_by'),
					'user_biography' => $this->input->post('user_biography'),
                );

                $this->User_model->update_user($user_uid,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($user_uid)
    {
        $user = $this->User_model->get_user($user_uid);

        // check if the user exists before trying to delete it
        if(isset($user['user_uid']))
        {
            $this->User_model->delete_user($user_uid);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
