<?php
class pages extends CI_Controller {
    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            //whoops we dont have that page yet
            show_404();
        }
        $data['title']= ucfirst($page);//capitalize the first letter of the page

        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);

    }
}
?>