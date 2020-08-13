<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$query = $this->db->query("SELECT * FROM `articles` ORDER BY blogid DESC");

		$data['result'] = $query->result_array();
		$this->load->view('adminpanel/viewblog',$data);
	
		
		
	}
	public function addblog()
	{
		$this->load->view('adminpanel/addblog');
	}


	function addblog_post(){
	     if($_POST){
	        $blog_title = $_POST['blogtitle'];
                    $desc = $_POST['desc'];
                    $lin=$_POST['lin'];
                    $query = $this->db->query("INSERT INTO `articles`( `blogtitle`, `blogdesc`, `blog_img`) VALUES ('$blog_title','$desc','$lin')");

                    if ($query) {
                    	$this->session->set_flashdata('inserted', 'yes');
                    	redirect('admin/blog/addblog');
                    }
                    else{
                    	$this->session->set_flashdata('inserted', 'no');
                    	redirect('admin/blog/addblog');
                    }
}
else{
			// Image is not passed
		}

	}


function editblog($blog_id){
		print_r($blog_id);
		$query = $this->db->query("SELECT  `blogtitle`, `blogid`, `blogdesc`, `blog_img`, `status` FROM `articles` WHERE `blogid`='$blog_id'");
		$data['result'] = $query->result_array();
		$this->load->view("adminpanel/editblog",$data);
	}
	function editblog_post(){
		

print_r($_POST);
		
			//die("Update without file");
			$blog_title = $_POST['blogtitle'];
echo $blog_title;
            $desc = $_POST['desc'];
            $blog_img=$_POST['lin'];
            $blog_id = $_POST['blogid'];
            $publish_unpublish = $_POST['publish_unpublish'];


            $query = $this->db->query("UPDATE `articles` SET `blogtitle`='$blog_title',`blogdesc`='$desc',`blog_img`='$blog_img', status='$publish_unpublish' WHERE `blogid`='$blog_id'");

           if ($query) {
                    	$this->session->set_flashdata('updated', 'yes');
                    	redirect("admin/blog");
                    }else{
                    	$this->session->set_flashdata('updated', 'no');
                    	redirect("admin/blog");
                    }
		}



function deleteblog(){
		//print_r($_POST);

		$delete_id = $_POST['delete_id'];

		$qu = $this->db->query("DELETE FROM `articles` WHERE `blogid`='$delete_id'");

		if ($qu) {
			echo "deleted";
		}else{
			echo "notdeleted";
		}

		//$this->

	}


	
}
