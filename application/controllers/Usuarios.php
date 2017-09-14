<?php
class Usuarios extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('usuarios_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['usuarios'] = $this->usuarios_model->get_usuarios();
                $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('usuarios/index', $data);
                $this->load->view('templates/footer');

        }

        public function agregar_usuario_view(){
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->library('session');
          $this->load->view('usuarios/agregarusuario');
        }

        public function agregar_usuario(){
          echo 'Agregando usuario...';
          $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
          if ($this->form_validation->run() == FALSE) {
              echo 'Error en el formulario';
          }else{
          $this->load->model('usuarios_model');

          $data = array(
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'nombre' => $this->input->post('nombre'),
            'paterno' => $this->input->post('paterno'),
            'materno' => $this->input->post('materno')
            );
            $this->usuarios_model->insert($data);
          }
        }

}
