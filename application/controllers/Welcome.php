<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->template->load('template','home');
		$this->top();
		$this->load->view('footer');
	}

	public function cadastrar(){
	    $this->template->load('template','cadastrar');
    }
    public function cadastro(){

	    $distro = new Distro();
	    $distro->insert();
	    $distro->salvarFoto();
        redirect(base_url('cadastrar'));
    }

    public function sortear()
    {
        $distro1 = new Distro();
        $distro2 = new Distro();
        $distro1->sortear(0);
        $distro2->sortear($distro1->getId());

        $data = array(
            'd1'=> array(
                'nome'=> $distro1->getNome(),
                'id'=> $distro1->getId()
            ),
            'd2'=> array(
                'nome'=> $distro2->getNome(),
                'id'=> $distro2->getId()
            )

        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));

    }

    public function top(){
        $distro = new Distro();
        $data['distros']= $distro->top();
        $this->load->view('toplist',$data);
    }
    public function votar()
    {
        $distro = new Distro();
        $distro = new Distro();
        $distro->votar();
    }

}
