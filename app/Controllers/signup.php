<?php namespace App\Controllers;

use App\Models\signup_model;

class signup extends BaseController
{
	public function index($status = 0)
	{
        helper(['url']);
        $data['title'] = 'Đăng ký';
        if($status != 0){
			$data['status'] == '1';
        }
		echo view('signup', $data);
    }
	public function register()
    {
        if (isset($_POST['register'])){
            $db = db_connect();
            $fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
            $username = isset($_POST['username'])?$_POST['username']:"";
            $gender = isset($_POST['gender'])?$_POST['gender']:"";
            $birthday = isset($_POST['birthday'])?$_POST['birthday']:"";
            $phonenumber = isset($_POST['phonenumber'])?$_POST['phonenumber']:"";
            $email = isset($_POST['email'])?$_POST['email']:"";
            $address = isset($_POST['address'])?$_POST['address']:"";
            $password = isset($_POST['password'])?$_POST['password']:"";
            $country = isset($_POST['country'])?$_POST['country']:"";
            $pwd = password_hash($password,PASSWORD_DEFAULT);
            $data_insert = [
                'fullname'=> $fullname,
                'username'=> $username,
                'gender'=> $gender,
                'birthday'=> $birthday,
                'phonenumber' => $phonenumber,
                'email' => $email,
                'address' => $address,
                'password' => $pwd,
                'country' => $country
            ];
            // $uppercase = preg_match('@[A-Z]@', $password);
            // $lowercase = preg_match('@[a-z]@', $password);
            // $number    = preg_match('@[0-9]@', $password);
            // $specialChars = preg_match('@[^\w]@', $password);

            // if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            //     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            //     return redirect()->to(base_url().'/signup');
            // }else{
            //     echo 'Strong password.';
            //     $db->table('accounts')->insert($data_insert);
            //     $status = '1';
            //     return redirect()->to(base_url().'/signup?status='.$status);
            // }
            $db->table('accounts')->insert($data_insert);
            // $status = 1;
            // $this->session->set_flashdata('status', $status);
            $status = '1';
            return redirect()->to(base_url().'/signup?status='.$status);
        }
    }
	//--------------------------------------------------------------------

}
