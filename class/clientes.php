<?php 

class clientes {

    private $idclientes;
    private $desnome;
    private $descontato;
    private $desemail;
    private $dtcadastro;


 public function getIdclientes(){
    return $this->idclientes;
 }
 public function setIdclientes($value){
    $this->idclientes = $value;
 }

 public function getDesnome(){
    return $this->desnome;
 }
 public function setDesnome($value){
    $this->desnome = $value;
 }

 public function getDescontato(){
    return $this->descontato;
 }
 public function setDescontato($value){
    $this->descontato = $value;
 }

 public function getDesemail(){
    return $this->desemail;
 }
 public function setDesemail($value){
    $this->desemail = $value;
 }

 public function getDtcadastro(){
    return $this->dtcadastro;
 }
 public function setDtcadastro($value){
    $this->dtcadastro = $value;
 }

 public function loadById($id){
    $Sql = new Sql();

    $results = $Sql->select("SELECT * FROM tb_clientes WHERE idclientes = :ID", array(
        ":ID"=>$id
    ));

    if (count($results) > 0) {
        $row = $results[0];

        $this->setIdclientes($row['idclientes']);
        $this->setDesnome($row['desnome']);
        $this->setDescontato($row['descontato']);
        $this->setDesemail($row['desemail']);
        $this->setDtcadastro(new Datetime($row['dtcadastro']));
    }
 }



  public function __toString(){

    return json_encode(array(
        "idclientes"=>$this->getIdclientes(),
        "desnome"=>$this->getDesnome(),
        "descontato"=>$this->getDescontato(),
        "desemail"=>$this->getDesemail(),
        "dtcadastro"=>$this->getDtcadastro()->format("d/m/y H:i:s")
    ));
  }
}
?>