<aside>
  <div id="sidebar"  class="nav-collapse ">
    <ul class="sidebar-menu" id="nav-accordion">
   	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
     	  <h5 class="centered">{{$nombre}}</h5>
          <li class="sub-menu">
            <a class="active" href="javascript:;" >
              <i class="fa fa-cogs"></i>
                <span>Opciones de administrador</span>
            </a>
          <ul class="sub">
            <br>
            <li>
              <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                  <label class="">Ingrese Fecha :</label><br>
                    <div class="col-sm-8">
                      <input class="form-control" id="dia" type="text" placeholder="Dia">
                      <br>
                      <input class="form-control" id="mes" type="text" placeholder="Mes">
                      <br>
                      <input class="form-control" id="ano" type="text" placeholder="Año">
                    </div>                    
                </div>
                <button id="boton1" type="button" class="btn btn-theme04"><i class="fa fa-check"></i>Mostrar Atrasos</button>        
                </form> 
            </li>
            <br>
            <li>
              <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                  <label class="">Ingrese Mes :</label><br>
                    <div class="col-sm-10">
                      <input class="form-control" id="meses" type="text" placeholder="Mes">
                    </div>                    
                </div>
                <button id="boton2" type="button" class="btn btn-theme02"><i class="fa fa-check"></i>Mostrar Atrasos</button>        
                </form> 
            </li>
          </ul>
          </li>
    </ul>
  </div>
</aside>
    <script src="assets/js/jquery.js"></script>

  <script type="text/javascript">
      $(document).ready(function() {
        $("#boton1").click(function(event) {
          var dia=document.getElementById('dia').value;
          var mes=document.getElementById('mes').value;
          var ano=document.getElementById('ano').value;

          $("#c").load('/cargar/'+ano+"-"+mes+"-"+dia);
        });
        $("#boton2").click(function(event) {
          var meses=document.getElementById('meses').value;
          $("#c").load('/cargar1/'+meses);
        });
      });
</script>