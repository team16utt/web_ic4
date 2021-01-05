<?php

namespace App\Controllers;

class contact extends BaseController
{
	public function index()
	{
		if ($this->request->getMethod() == 'post') {
			$db = db_connect();
			$name = isset($_POST['name']) ? $_POST['name'] : "";
			$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
			$email = isset($_POST['email']) ? $_POST['email'] : "";
			$content = isset($_POST['content']) ? $_POST['message'] : "";
			$data_insert = [
				'fullname' => $name,
				'phone' => $phone,
				'email' => $email,
				'content' => $content,
				'created_on' => date('Y-m-d')
			];
			$newContact = $db->table('contact')->insert($data_insert);
			if ($newContact > 0) {
				$data['message'] = 'success';
				echo view("contact", $data);
			} else {
				$data['message'] = 'fail';
				echo view("contact", $data);
			}
		} else
			echo view('contact');
	}
	//--------------------------------------------------------------------

}
