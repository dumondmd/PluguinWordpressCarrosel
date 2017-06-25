<?php
 $connect = mysqli_connect("localhost", "sallo_dealer", "dealer123", "sallo_dealer");
 $output = '';
 $sql = "SELECT * FROM carroselmarcas ORDER BY id"; 
 $result = mysqli_query($connect, $sql);
 if(mysqli_num_rows($result) > 0) {
 $qtd = mysqli_num_rows($result) -1;      
  while($row = mysqli_fetch_array($result)) {     
    $output .= '  

      <div style="display: none;">
        <a href="'.$row["link"].'" target="_blank">
          <img style="width: 250px; height: 207px;" data-u="image" src="'.$row["endereco"].'" />
        </a>
      </div>
                     
    '; 


    }   
 } 

$html = '
  <script type="text/javascript" src="../wp-content/plugins/carrosel/tela/js/jssor.slider-21.1.5.min.js?ver=1.0"></script>
  <link href="../wp-content/plugins/carrosel/tela/css/style.css?ver=1.0" rel="stylesheet">
  <section id="grid_content">

  <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration: 2000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Cols: '.$qtd.' 
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
        };
  </script>

  <div id="jssor_1">        

  <div id="corpo_slide" data-u="slides">     
 ';

 $html .= $output;

 $html .= '


        </div>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
    </section>
';

echo $html;