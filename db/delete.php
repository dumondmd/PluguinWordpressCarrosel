<?php  
 include('conexao.php'); 
 $sql = "DELETE FROM carroselmarcas WHERE id = '".$_POST["id"]."'";  
 $output = '';
if(mysqli_query($connect, $sql))  
 {  
    $today = date("H:i:s");

    $output .= 'Deletado em '.$today;
    echo $output;
 }  
 else
 {
 	echo 'Erro na deleção do registro!'; 	
 }
 ?> 