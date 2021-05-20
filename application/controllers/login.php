<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('admin/login_page');
    }

    public function authentication()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run() == true)
        {
            
            $Username=$this->input->post('username');
            $Password=$this->input->post('password');
            $this->load->model('loginmodel');
            $Login_id=$this->loginmodel->Usercheck($Username,$Password);
            if ($Login_id)
            {
                $this->session->set_userdata('id',$Login_id);
                redirect('Admin/Welcome');
            }
            else
            {
              $this->session->set_flashdata('msg','Either Username or Password is incorecct');
                redirect('Login');
            }
        }
        else
        {
            $this->load->view('Admin/login_page');
            //form error
        }
    }
    
    public function register()
    {
        $this->form_validation->set_rules('username','User Name','required|alpha');
        $this->form_validation->set_rules('password','Password','required|max_length[12]');
        
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if ($this->form_validation->run() == true)
        {
            $this->input->post('save');
            $data['username']=$this->input->post('username');
            $data['password']=$this->input->post('password');
            $data['email']=$this->input->post('email');
            $this->load->model('loginmodel');
            $this->loginmodel->add_users($data);
            $this->session->set_flashdata('success','Registration is successfully plaese login');
            redirect('Login');
            
        }
        else
        {
            $this->load->view('Admin/register');
        }

        
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('Login');

    }



}
?>