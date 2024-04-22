<?php 
include_once("Funcionario.php");
include_once("conexao.php");

class funcionarioDao{
    public function inserir(Funcionario $funcionario){
	global $conn;
	$sql=$conn->prepare("INSERT INTO FUNCIONARIO VALUES(?,?,?,?)");
	$p1=funcionario->getRE();
	$p2=funcionario->getNome();
	$p3=funcionario->getDataAdmissao();
	$p4=funcionario->getSalario();
	sql->blind("isdf",$p1,$p2,$p3,$p4);
	$sql->execure();
	if($sql->affected_rows>0){
	     return true;
		 }
	}

    public function excluir(Funcionario $funcionario){
		global $conn;
		$sql=$conn->prepare("DELETE FROM funcionarios WHERE RE=?");
		$p1 = funcionario->getRE();
		sql->blind("i",$p1);
		$sql->execute();
		if($sql->affected_rows>0){
			return true;
		}
	}
	public function alterar(Funcionario $funcionario){
	global $conn;
	$sql=$conn->prepare("UPDATE funcionario SET NOME=?,DATAADMISSAO=?,SALARIO=? WHERE RE=?");
	$p1=funcionario->getNome();
	$p2=funcionario->getDataAdmissao();
	$p3=funcionario->getSalario();
	$p4=funcionario->getRE();
	sql->blind("sdfi",p1,$p2,$p3,$p4$);
	$sql->execure();
	if($sql->affected_rows>0){
	     return true;
		 }
	}
		 
	public listar(){
		global $conn;
		$sql = "SELECT * FROM Funcionarios";
		$result=mysqli_query($conn,$sql);
		$lista=array();
		while( $row = result->fetch_assoc()){
			array_push($lista, new Funcionario($row["re",$row[nome],
			$row["dataAdmissao"],$row["salario"]));
		}
		return lista
	}


public buscarPeloRe($re){
	global $conn
	$nome="";
	$dataAdmissao="";
	$salario=0.0;
	$sql = "SELECT FROM funcionarios WHERE re=?";
	$query = $conn->prepare($sql);
	$result=$query->bind_param('i',$re);
	$query->execute();
	$query->bind_result($re,$nome,$dataAdmissao,$salario);
	if( $query->fetch()) {
		return new Funcionario ($re,$nome,$dataAdmissao,$salario);
	}
}
	}
?>
