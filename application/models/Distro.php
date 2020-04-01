<?php


class Distro extends CI_Model
{
   private $nome;
   private $id;
   private $url;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function  insert(){
        $this->nome = $this->input->post('nome');
        $data=  array(
            'Nome'=>$this->nome,
            'Votos'=>0
        );
        $this->db->insert('dados',$data);

        $this->id = $this->db->insert_id();
    }

    public function salvarFoto()
    {
        $config['upload_path']= './public/images/';
        $config['file_name']=$this->id;
        $config['allowed_types'] = "jpg";
        $this->upload->initialize($config);
        $this->upload->do_upload('distro');
        echo $this->upload->display_errors();
    }
    public function  sortear($sort){

        $row = $this->db->query("select Nome,idDados from dados where idDados != $sort order by rand() limit 1")->row();
        $this->nome = $row->Nome;
        $this->id = $row->idDados;
    }
    public function top(){
        $resultado = $this->db->query("select * from dados order by Votos DESC, Nome Asc limit 10")->result_array();
        return $resultado;
    }
    public function votar(){
        $this->id = $this->input->post('id');
        $this->db->query("update dados set Votos = Votos+1 where idDados = $this->id");
    }

    /**
     * @param mixed $nome
     */
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}