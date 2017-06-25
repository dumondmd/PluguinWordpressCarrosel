<?php  
 include('conexao.php'); 
 $output = '';
 $sql = "SELECT * FROM carroselmarcas ORDER BY id";  
 $result = mysqli_query($connect, $sql);
 $output .= '   
      <div>  
           <table class="tabela_carrosel">  
                <tr class="tr_tabela_grid">  
                     <th>ID</th>  
                     <th>ENDEREÇO</th>
                     <th>LINK</th>
                     <th>IMAGEM</th>              
                </tr>';  
  
      $output .= '  
           <tr class="tabela_carrosel_new">                
                <td class="reg_id" id="reg_id" ></td>  
                <td class="reg_endereco" id="reg_endereco" contenteditable></td>  
                <td class="reg_link" id="reg_link" contenteditable></td>
                <td class="CampoImagem"></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn-success">+</button></td>  
           </tr>  
      '; 

 if(mysqli_num_rows($result) > 0)  
 {  
    
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr class="tabela_carrosel_select">                                                     
                     <td class="reg_id" data-id1="'.$row["id"].'">'.$row["id"].'</td>
                     <td class="reg_endereco" data-id2="'.$row["id"].'" contenteditable>'.$row["endereco"].'</td>  
                     <td class="reg_link" data-id3="'.$row["id"].'" contenteditable>'.$row["link"].'</td>
                     <td class="CampoImagem"><img style="width: 50px; height: 40px;" src="'.$row["endereco"].'"></td>  
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn_delete">x</button></td>                  
                </tr>  
           ';  
      }  
 
 }  
 else  
 {  
      $output .= '<tr>  
                    <td colspan="4">Dados não encontrados</td>  
                  </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>   