<?php if ( ! defined('BASEPATH')) exit(‘No direct script access allowed’);
namespace App\Libraries;

class Template
{
    public function render($view, $data = [])
    {
        return view($view, $data);
    }
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */