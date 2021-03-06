<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Article extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
    } 

    /*
     * Listing of articles
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('article/index?');
        $config['total_rows'] = $this->Article_model->get_all_articles_count();
        $this->pagination->initialize($config);

        $data['articles'] = $this->Article_model->get_all_articles($params);
        
        $data['_view'] = 'article/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new article
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('article_titre','Article Titre','required|max_length[200]');
		$this->form_validation->set_rules('article_type','Article Type','required|max_length[25]');

		$this->form_validation->set_rules('article_categorie_uid','Article Categorie Uid','integer');
		
		if($this->form_validation->run())     
        {   
            $title = $this->input->post('article_titre');
            $slug = urlencode($title);

            $config['upload_path'] = './resources/img';
            $config['allowed_types'] = 'gif|jpg|png|webp|jpeg';
            $this->load->library('upload', $config);
            $picture_name = '';
            if ($this->upload->do_upload('article_image')) {
                
                $data['upload_data'] = $this->upload->data();

                //get file name
                $picture_name = $this->upload->data('file_name');      
            }

            $params = array(
				'article_type' => $this->input->post('article_type'),
				'article_categorie_uid' => $this->input->post('article_categorie_uid'),
				'article_titre' => $title,
				'article_titre_slug' => $slug,
				'article_statut' => 'actif',
				'article_image' => $picture_name,
				'article_date_pub' => date('Y-m-d'),
				'article_created_at' => date('Y-m-d H:i:s'),
				'article_created_by' => $this->session->fullname,
				'article_sommaire' => $this->input->post('article_sommaire'),
				'article_description' => $this->input->post('article_description'),
            );
            
            $article_id = $this->Article_model->add_article($params);
            redirect('article/index');
        }
        else
        {
			$this->load->model('Category_model');
			$data['all_categories'] = $this->Category_model->get_all_categories();
            
            $data['_view'] = 'article/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    /*
     * Editing a article
     */
    function view($article_uid)
    {   
        // check if the article exists before trying to edit it
        $data['article'] = $this->Article_model->get_article($article_uid);
        
        if(isset($data['article']['article_uid']))
        { 
            $this->load->model('Category_model');
                $data['all_categories'] = $this->Category_model->get_all_categories();

                $data['_view'] = 'article/details';
                $this->load->view('layouts/main',$data);
            
        }
        else
            show_error('The article you are trying to edit does not exist.');
    } 

    /*
     * Editing a article
     */
    function edit($article_uid)
    {   
        // check if the article exists before trying to edit it
        $data['article'] = $this->Article_model->get_article($article_uid);
        
        if(isset($data['article']['article_uid']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('article_titre','Article Titre','required|max_length[200]');
			$this->form_validation->set_rules('article_type','Article Type','required|max_length[25]');
		
			$this->form_validation->set_rules('article_categorie_uid','Article Categorie Uid','integer');
		
			if($this->form_validation->run())     
            {   
                $title = $this->input->post('article_titre');
            $slug = urlencode($title);
                $params = array(
					'article_type' => $this->input->post('article_type'),
					'article_categorie_uid' => $this->input->post('article_categorie_uid'),
					'article_titre' => $title,
					'article_titre_slug' => $slug,
			
					'article_updated_at' => date('Y-m-d H:i:s'),
					'article_updated_by' => $this->session->fullname,
	
					'article_sommaire' => $this->input->post('article_sommaire'),
					'article_description' => $this->input->post('article_description'),
                );

                $this->Article_model->update_article($article_uid,$params);            
                redirect('article/index');
            }
            else
            {
				$this->load->model('Category_model');
				$data['all_categories'] = $this->Category_model->get_all_categories();

                $data['_view'] = 'article/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The article you are trying to edit does not exist.');
    } 

    /*
     * Deleting article
     */
    function remove($article_uid)
    {
        $article = $this->Article_model->get_article($article_uid);

        // check if the article exists before trying to delete it
        if(isset($article['article_uid']))
        {
            $this->Article_model->delete_article($article_uid);
            redirect('article/index');
        }
        else
            show_error('The article you are trying to delete does not exist.');
    }
    
}
