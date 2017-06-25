 <?php  
 include('conexao.php');   
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE carroselmarcas SET ".$column_name."='".$text."' WHERE id='".$id."'";
 $output = '';
if(mysqli_query($connect, $sql))  
 {  
    $today = date("H:i:s");

    $output .= 'Editado em '.$today;
    echo $output;  
 }  
 else
 {
 	echo 'Erro na edição do registro!'; 	
 }
 ?> 