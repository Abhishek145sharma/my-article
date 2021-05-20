<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
    	parent::__construct();
          if(!$this->session->userdata('id'))
        	  return redirect('Login');
    }

	public function Welcome()
	{ 
        $this->load->model('Loginmodel','ar');
       $this->load->library('pagination');
       $config=[
            'base_url'=> base_url('Admin/Welcome'),
            'per_page'=>2,
            'total_rows'=> $this->ar->num_rows(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => "<li>",
            'next_tag_close' => "</li>",
            'prev_tag_open' => "<li>",
            'prev_tag_close' => "</li>",
            'num_tag_open' => "<li>",
            'num_tag_close' => "</li>",
            'cur_tag_open' => "<li class='active'><a>",
            'cur_tag_close' => "</a></li>"

       ];

       $this->pagination->initialize($config);

		
		$articles =$this->ar->articleList($config['per_page'],$this->uri->segment(3));
		$this->load->view('Admin/dashboard',['articles'=>$articles]);
	}

    public function adduser()
    {
        $this->load->view('Admin/add_article');
    }

    public function userValidation()
    {
        $config=[
            'upload_path'=>'./uploads/',
            'allowed_types'=>'gif|jpg|png|jpeg|pdf',
            'max_size'=>'42',
        ];
        $this->load->library('upload',$config);

        if($this->form_validation->run('add_article_rules') && $this->upload->do_upload())
        {
            $post = $this->input->post();
            $data = $this->upload->data();
            //echo "<pre>";
            //print_r($data);exit;
            $image_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
            //echo $image_path;exit;
            $post['image_path'] = $image_path;
            $this->load->model('Loginmodel');
            if($this->Loginmodel->add_article($post))
            {
              $this->session->set_flashdata('msg','Article added successfully');
              $this->session->set_flashdata('msg_class','alert-success');
            }
            else{
                $this->session->set_flashdata('msg','Article not added please try again');
                $this->session->set_flashdata('msg_class','alert-danger');
            }
            return redirect('Admin/Welcome');

        }
        else
        {
            $upload_error=$this->upload->display_errors();
            $this->load->view('Admin/add_article',compact('upload_error'));
        }
    }


    public function editarticles($id)
    {   

        $this->load->model('Loginmodel');
       $article=$this->Loginmodel->edarticles($id);
       $this->load->view('Admin/edit_article',['article'=>$article]); 

    }
   
    public function updatearticle($article_id)
    {
        if($this->form_validation->run('add_article_rules'))
        {
            $post = $this->input->post();
            $this->load->model('Loginmodel');
            if($this->Loginmodel->update_article($article_id,$post))
            {
                 $this->session->set_flashdata('msg','Article Update successfully');
                 $this->session->set_flashdata('msg_class','alert-success');
            }
            else
            {
                $this->session->set_flashdata('msg','Article not Update please try again');
                $this->session->set_flashdata('msg_class','alert-danger');
            }
            return redirect('Admin/Welcome');

        }
         else
        {
            $this->load->view('Admin/edit_article');
        }
    }







    public function delarticle()
    {
        $id=$this->input->post('id');
        $this->load->model('Loginmodel');
        if($this->Loginmodel->del($id))
        {
            $this->session->set_flashdata('msg','Delete successfully');
            $this->session->set_flashdata('msg_class','alert-success');
        }
        else{
            $this->session->set_flashdata('msg','Plese try again not.. delete');
            $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('Admin/Welcome');
    }

	

	


}


?>





