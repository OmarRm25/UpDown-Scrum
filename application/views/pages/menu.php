
<body >


	<nav class="nav-wrapper card-panel blue_nav accent-2 left-align panel2">
	    <div class="panel" >


	      <a id="si" href="#" data-activates="slide-out" class="brand-logo"><i class="material-icons">&#xE5D2;</i>UpDown</a>
	      <ul class="right">
	        <li><a href="index.html"><i class="material-icons">refresh</i></a></li>
	        <li><a id="mos" href="#"><i class="material-icons">account_circle</i></a></li>

	      </ul>



	      <ul id="slide-out" class="side-nav fondomenu"  >

					<li><div class="user-view" >
            <div class="background">

            <img src="<?php echo base_url(); ?>assets/media/img/fondo.png">
            </div>

          </div></li>

          <li><a href="#!">Registro</a></li>
          <li><a href="#!">Contáctanos</a></li>
          <li><a href="#!">Acerca de UPDown</a></li>
          <li><a href="#!">Guía de usuario</a></li>
          <li><a href="#!">Foro</a></li>
          <li><a href="#!">Conoce más sobre el tema</a></li>
          <li><div class="divider"></div></li>
          <li><a class="waves-effect" href="#!">Ajustes</a></li>
        </ul>


	    </div>


	</nav >



<div id="lo" class="ver ">
	<div class="le ">
		<h1 class="h">Iniciar Sesión</h1>

		<input type="text" name="Usuario o Email" placeholder="Username" />
		<input type="password" name="Contrasena" placeholder="Password" />

		<input type="submit" name="Entrar" value="Entrar" />
	</div>


	<div class="ri">
		<span class="loginwith">Iniciar Sesion<br /></span>

		<button class="s-signin facebook">Entrar usando Facebook</button>
		<button class="s-signin twitter">Entrar usando  Twitter</button>
		<button class="s-signin google">Entrar usando Google+</button>
	</div>
	<div class="or">OR</div>
</div>


<section  >





<div id="acd" class="fixed-action-btn horizontal click-to-toggle">
    <a id="ac" class="btn-floating btn-large green">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
 </div>

<!-- logo -->
 <div id="acdlo" class="fixed-action-btn horizontal click-to-toggle">
		 <img src="<?php echo base_url(); ?>assets/media/img/updowntransparente.png" alt="Logo UpDown"  width="295px" >
 </div>



 		<div id="acd2" class="fixed-action-btn horizontal click-to-toggle">
    <a id="ac" class="btn-floating btn-large blue">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
		</div>

   	<div id="acd3" class="fixed-action-btn horizontal click-to-toggle">
    <a id="ac"class="btn-floating btn-large grey lighten-1">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  	</div>

        </section>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	   $('.ver').hide();
        $('#mos').on('click',function(e){
            $('.ver').slideToggle('slow');
            e.preventDefault();
            e.stopPropagation();
        });
        $('#si').on('click',function(e){
            $('.ver').hide();
        });
           $("html").click(function(){
         $(".ver").hide();
    });


	</script>
