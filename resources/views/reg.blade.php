<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>DASHGUM - Bootstrap Admin Template</title>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
  </head>
  <body onload="getTime()">
	  	<div class="container">
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-flag"></i></a></h2>
		  				<p>Presione para ingresar codigo</p>
                        <div id="res"></div>
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Ingreso de Codigo</h4>
				                      </div>
				                      <div class="modal-body">
				                          <p class="centered"><img class="img-circle" width="80" src="assets/img/ui-sam.jpg"></p>
				                          <input type="text" id="cod" name="text" placeholder="Codigo empleado" autocomplete="off" class="form-control placeholder-no-fix">
				                      </div>
				                      <div class="modal-footer centered">
				                          <button data-dismiss="modal" class="btn btn-theme04" type="button" onclick="enviar()">Registrar</button>
				                      </div>
				                  </div>
				              </div>
				          </div>
	  				</div>
	  			</div>
	  	</div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }
        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
        function  enviar(){
            var codigo=document.getElementById('cod').value;
            var horas=document.getElementById('showtime').innerHTML;
            $.ajax({
                url: '/regi/', 
                type: 'POST', 
                data: {id_cod: codigo,hora:horas}, 
                beforeSend: function() {
                    $("#res").html('<div> Esperando respuesta </div>'); 
                },
                error: function() {
                    $("#res").html('<div> Ha surgido un error. </div>'); 
                },
                success: function(respuesta) { 
                    $("#res").html(respuesta.msg); 
                } 
            });
        }
    </script>

  </body>
</html>
