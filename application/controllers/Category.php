<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
    } 

    /*
     * Listing of categories
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('category/index?');
        $config['total_rows'] = $this->Category_model->get_all_categories_count();
        $this->pagination->initialize($config);

        $data['categories'] = $this->Category_model->get_all_categories($params);
        
        $data['_view'] = 'category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new category
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('categorie_libelle','Categorie Libelle','required|max_length[75]');
		$this->form_validation->set_rules('categorie_image','Categorie Image','max_length[75]');
		$this->form_validation->set_rules('categorie_statut','Categorie Statut','max_length[25]');
		$this->form_validation->set_rules('categorie_created_by','Categorie Created By','max_length[75]');
		$this->form_validation->set_rules('categorie_updated_by','Categorie Updated By','max_length[75]');
		$this->form_validation->set_rules('categorie_deleted_by','Categorie Deleted By','max_length[75]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'categorie_libelle' => $this->input->post('categorie_libelle'),
				'categorie_image' => $this->input->post('categorie_image'),
				'categorie_statut' => $this->input->post('categorie_statut'),
				'categorie_created_at' => $this->input->post('categorie_created_at'),
				'categorie_created_by' => $this->input->post('categorie_created_by'),
				'categorie_updated_at' => $this->input->post('categorie_updated_at'),
				'categorie_updated_by' => $this->input->post('categorie_updated_by'),
				'categorie_deleted_at' => $this->input->post('categorie_deleted_at'),
				'categorie_deleted_by' => $this->input->post('categorie_deleted_by'),
				'categorie_description' => $this->input->post('categorie_description'),
            );
            
            $category_id = $this->Category_model->add_category($params);
            redirect('category/index');
        }
        else
        {            
            $data['_view'] = 'category/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a category
     */
    function edit($categorie_uid)
    {   
        // check if the category exists before trying to edit it
        $data['category'] = $this->Category_model->get_category($categorie_uid);
        
        if(isset($data['category']['categorie_uid']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('categorie_libelle','Categorie Libelle','required|max_length[75]');
			$this->form_validation->set_rules('categorie_image','Categorie Image','max_length[75]');
			$this->form_validation->set_rules('categorie_statut','Categorie Statut','max_length[25]');
			$this->form_validation->set_rules('categorie_created_by','Categorie Created By','max_length[75]');
			$this->form_validation->set_rules('categorie_updated_by','Categorie Updated By','max_length[75]');
			$this->form_validation->set_rules('categorie_deleted_by','Categorie Deleted By','max_length[75]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'categorie_libelle' => $this->input->post('categorie_libelle'),
					'categorie_image' => $this->input->post('categorie_image'),
					'categorie_statut' => $this->input->post('categorie_statut'),
					'categorie_created_at' => $this->input->post('categorie_created_at'),
					'categorie_created_by' => $this->input->post('categorie_created_by'),
					'categorie_updated_at' => $this->input->post('categorie_updated_at'),
					'categorie_updated_by' => $this->input->post('categorie_updated_by'),
					'categorie_deleted_at' => $this->input->post('categorie_deleted_at'),
					'categorie_deleted_by' => $this->input->post('categorie_deleted_by'),
					'categorie_description' => $this->input->post('categorie_description'),
                );

                $this->Category_model->update_category($categorie_uid,$params);            
                redirect('category/index');
            }
            else
            {
                $data['_view'] = 'category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The category you are trying to edit does not exist.');
    } 

    /*
     * Deleting category
     */
    function remove($categorie_uid)
    {
        $category = $this->Category_model->get_category($categorie_uid);

        // check if the category exists before trying to delete it
        if(isset($category['categorie_uid']))
        {
            $this->Category_model->delete_category($categorie_uid);
            redirect('category/index');
        }
        else
            show_error('The category you are trying to delete does not exist.');
    }
    
}
