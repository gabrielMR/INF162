        <section id="main-content">
          <section class="wrapper">
              <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-4 mb">
              </div>
                  <div class="col-lg-9 main-chart">
                  	<div class="col-lg-3 col-md-4 col-sm-4 mb pull-right">
                      <div class="weather-3 pn centered">
                        <i class="fa fa-flag"></i>
                        <h1>
                        <span id="hora"><?php echo (date("h")+8)?></span>:<span id="minutos"><?php echo (date("i"))?></span>:<span id="segundos"><?php echo (date("s"))?></span>
                        </h1>
                        <div class="info">
                          <div class="row">
                              <h3 class="centered"><?php echo date('d-m-y');?></h3>
                            <div class="col-sm-6 col-xs-6 pull-left">
                            </div>
                            <div class="col-sm-6 col-xs-6 pull-right">
                              <p class="goright"><i class="fa fa-sun-o"></i></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
          </section>
        </section>
        <script type="text/javascript">
         function time()
          {
              var times='<?php echo (date("h")+8).":".date("i").":".date("s");?>';
              var sep=times.split(':');
              var contador_s =parseInt(sep[2]);
              var contador_m =parseInt(sep[1]);
              var contador_h =parseInt(sep[0]);
              s = document.getElementById("segundos");
              m = document.getElementById("minutos");
              h = document.getElementById("hora");
              cronometro = setInterval(
                  function(){
                      if(contador_s==60)
                      {
                          contador_s=1;
                          contador_m++;
                      }
                      if (contador_m==60) {
                        contador_m=0;
                        contador_h++;
                      }
                      if (contador_h==24) {
                        contador_h=0;
                      }
                      h.innerHTML = completar0(contador_h);
                      m.innerHTML = completar0(contador_m);
                      s.innerHTML = completar0(contador_s);
                      contador_s++;
                  },1000);
          }
          window.load(time());
          function completar0(valor){
            var nc=valor.toString();
            var cant=nc.length;
            if (cant==1) {
              nc="0"+valor;
            }
            return nc;
          }
        </script>