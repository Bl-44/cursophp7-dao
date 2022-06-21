<?php 

class Usuarios {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


 public function getIdusuarios(){
    return $this->idusuarios;
 }
 public function setIdusuarios($value){
    $this->idusuarios = $value;
 }

 public function getDeslogin(){
    return $this->deslogin;
 }
 public function setDeslogin($value){
    $this->deslogin = $value;
 }

 public function getDessenha(){
    return $this->dessenha;
 }
 public function setDessenha($value){
    $this->dessenha = $value;
 }


 public function getDtcadastro(){
    return $this->dtcadastro;
 }
 public function setDtcadastro($value){
    $this->dtcadastro = $value;
 }

 public function loadById($id){
    $Sql = new Sql();

    $results = $Sql->select("SELECT * FROM tb_usuarios WHERE idusuarios = :ID", array(
        ":ID"=>$id
    ));

    if (count($results) > 0) {
        $row = $results[0];

        $this->setIdusuarios($row['idusuarios']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new Datetime($row['dtcadastro']));
    }
 }

  public static function getList(){

   $Sql = new Sql();

    return $Sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

  }

  public static function search($login){

   $Sql = new Sql();

   return $Sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
      ':SEARCH'=>"%".$login."%"
   ));
  }

  public function login($login, $passaword){

   $Sql = new Sql();

   $results = $Sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSAWORD", array(
      ":LOGIN"=>$login,
      ":PASSAWORD"=>$passaword
   ));

   if (count($results) > 0) {
      $row = $results[0];
      $this->setIdusuarios($row['idusuario']);
      $this->setDeslogin($row['deslogin']);
      $this->setDessenha($row['dessenha']);
      $this->setDtcadastro(new Datetime($row['dtcadastro']));
   } else {
      throw new Exception("Login e/ou senha invalidos.");
   }

  }

  public function __toString(){

    return json_encode(array(
        "idusuarios"=>$this->getIdusuarios(),
        "deslogin"=>$this->getDeslogin(),
        "dessenha"=>$this->getDessenha(),
        "dtcadastro"=>$this->getDtcadastro()->format("d/m/y H:i:s")
    ));
  }
}
?>