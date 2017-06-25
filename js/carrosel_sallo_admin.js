 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({
                url: "../wp-content/plugins/carrosel/db/select.php",  
                method:"POST",                
                beforeSend: function() {
                $('#controleimg').html('Aguarde...');
                },
                success:function(data){  
                     $('#controleimg').html(data);  
                }  
           });  
      }  
      fetch_data(); 

      //Adicionar
       $(document).on('click', '#btn_add', function(){  
           var reg_endereco = $('#reg_endereco').text();  
           var reg_link = $('#reg_link').text(); 
           
           if(reg_endereco == '')  
           {  
                alert("Preencha o endereço da imagem");  
                return false;  
           }             

           $.ajax({  
                url:"../wp-content/plugins/carrosel/db/create.php",  
                method:"POST",  
                data:{
                  reg_endereco:reg_endereco,
                  reg_link:reg_link
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  

      //Editar
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"../wp-content/plugins/carrosel/db/update.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     $('#status_carrosel').html(data); 
                }  
           });  
      } 

      $(document).on('blur', '.reg_endereco', function(){  
           var id = $(this).data("id2");  
           var endereco = $(this).text();  
           edit_data(id, endereco, "endereco");  
      });
     

      $(document).on('blur', '.reg_link', function(){  
           var id = $(this).data("id3");  
           var link = $(this).text();  
           edit_data(id, link, "link");  
      });
     
      
      //Deletar
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id4");  
           if(confirm("Você tem certeza que quer deletar isto?"))  
           {  
                $.ajax({  
                     url:"../wp-content/plugins/carrosel/db/delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          $('#status_carrosel').html(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  