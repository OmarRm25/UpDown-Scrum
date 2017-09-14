<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alta de usuario</title>
  </head>
  <body>
    <?php
        echo form_open('usuarios/agregar_usuario');
        echo form_label('email');
        echo form_input(array('id'=>'email','name'=>'email'));echo "<BR>";
        echo form_label('Contraseña:');
        echo form_input(array('id'=>'pass','name'=>'password'));echo "<BR>";
        echo form_label('Nombre:');
        echo form_input(array('id'=>'nom','name'=>'nombre'));echo "<BR>";
        echo form_label('Paterno');
        echo form_input(array('id'=>'pat','name'=>'paterno'));echo "<BR>";
        echo form_label('Materno');
        echo form_input(array('id'=>'mat','name'=>'materno'));echo "<BR>";
        echo form_submit(array('id'=>'submit','value'=>'Agregar'));
        echo form_close();

    ?>
  </body>
</html>
