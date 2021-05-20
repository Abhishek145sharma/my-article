<?php 

class Loginmodel extends CI_Model
{

	public function Usercheck($username,$password)
	{
		$q = $this->db->where(['username'=>$username,'password'=>$password])
		              ->get('users');

		 if($q->num_rows())
		 {
		 	return $q->row()->id;
		 }          
		 else
		 {
		 	return false;
		 }   
	}

	public function articleList($limit,$offset)
	{ 
		$id = $this->session->userdata('id');
		$q = $this->db->select('*')
		         ->from('articles')
                 ->where(['user_id'=>$id])
                 ->limit($limit,$offset)
                 ->get();
                 return $q->result();
                 
	}

    public function num_rows()
    {
    	$id = $this->session->userdata('id');
    	$q = $this->db->select('*')
    	         ->from('articles')
    	         ->where(['user_id'=>$id])
    	         ->get();
    	         return $q->num_rows();
    }


	public function add_article($array)
	{
		return $this->db->insert('articles',$array);

	}

	public function add_users($array)
	{
		return $this->db->insert('users',$array);
	}

	public function edarticles($id)
	{
		$q = $this->db->select('*')
                      ->from('articles')
                      ->where('id',$id)
                      ->get();
                      return $q->row();
	}

	public function update_article($article_id,array $article)
	{
		return $this->db->where('id',$article_id)
		         ->update('articles',$article);
	}

	public function del($id)
	{
	    return $this->db->delete('articles',['id'=>$id]);
	}


	public function fect_allarticles($limit,$offset)
	{

		$q=$this->db->select('*')
		         ->from('articles')
		         ->limit($limit,$offset)
		         ->get();
		         //print_r($q->num_rows());exit;
		         return $q->result();
               
	}


	public function all_articles_count()
	{
		$q=$this->db->select()
		            ->from('articles')
		            ->get();
		            return $q->num_rows();
	}


}

?>











