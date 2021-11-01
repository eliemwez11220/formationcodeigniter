<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Authmodel');
    }

    public function index()
    {
        if ($this->session->isLoggeIn === TRUE) {
            redirect('dashboard/index');
        } else {
            $data['title'] = "Connexion";
            $data['_view'] = 'user/login';
            $this->load->view('layouts/main',$data);
        }
    }

    public function login()
    {
        # recuperation of username
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => 'Username is required',
        ));

        # recuperation of password
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => 'Password is required',
        ));
        # verifie if datas are corrects and redirect
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->Authmodel->verifyCredentials($username, $password)) {

                $infos_agent = $this->Authmodel->verifyCredentials($username, $password);

                if ($infos_agent) {
                    $userdata = array(
                        'id' => $infos_agent->user_uid,
                        'fullname' => $infos_agent->user_nom,
                        'username' => $infos_agent->user_pseudo,
                        'phone' => $infos_agent->user_telephone,
                        'statut' => $infos_agent->user_statut,
                        'email' => $infos_agent->user_email,
                        'role' => $infos_agent->user_role,
                        'created' => $infos_agent->user_created_at,
                        'avatar' => $infos_agent->user_avatar,
                        'isLoggedIn' => TRUE
                    );
                    //verification du statut de l'agent
                    if ($infos_agent->user_statut == "actif") {
                        //stock data in session
                        $this->session->set_userdata($userdata);                    #//session  //redirect to control panel for admin
                        redirect(base_url('dashboard/index'));
                    } else {
                        # Redirect to login page and show the message error
                        $this->setError("Votre compte est déjà bloqué. Veuillez conctacter un webmaster ou un administrateur système");
                    }
                } else {
                    // redirect if username or password is not true
                    $this->setError("Compte utilisateur non existant dans le système.");
                }
            } else {
                // redirect if username or password is not true
                $this->setError("Mot de passe ou nom utilisateur incorrect.");
            }

        } else {
            // redirect if username or password is not true
            $this->setError("Vous devez disposer un compte utilisateur pour accéder à cette application. Veuillez conctacter l'administrateur système pour plus de détails.");
        }
    }

    public function setError($rror)
    {
        $data['title'] = "Error login";
        $data['errorlogin'] = $rror;
        $data['title'] = "Connexion Error";
        $data['_view'] = 'user/login';
        $this->load->view('layouts/main',$data);
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}