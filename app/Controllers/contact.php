<?php namespace App\Controllers;
class contact extends BaseController
{
	public function index()
	{
		$data['title'] = 'Liên hệ';
		echo view('contact', $data);
    }
	public function send(){
		if (isset($_POST['send'])){
			$db = db_connect();
			$name = isset($_POST['name'])?$_POST['name']:"";
			$phone = isset($_POST['phone'])?$_POST['phone']:"";
			$email = isset($_POST['email'])?$_POST['email']:"";
			$content = isset($_POST['content'])?$_POST['content']:"";
			$data_insert = [
					'fullname'=> $name,
					'phone' => $phone,
					'email' => $email,
					'content' => $content,
					'created_on' => date('Y-m-d')
			];
			$db->table('contact')->insert($data_insert);
			// $status = 1;
			// $this->session->set_flashdata('status', $status);\
			$data['status'] = 'success';
			
			return redirect()->to(base_url().'/contact'); 
			
			

		}
	}
	//--------------------------------------------------------------------

}

