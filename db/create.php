 <?php  
 include('conexao.php');   
 $sql = "INSERT INTO carroselmarcas(endereco, link)
  VALUES('".$_POST["reg_endereco"]."', '".$_POST["reg_link"]."')";
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Registro adicionado!';  
 } 
 else {
  	echo 'Erro na adicação do novo registro!';  	
  } 
 ?>