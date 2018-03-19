  

  <?php $__env->startSection('content'); ?>

    <?php echo Form::open(['route' => 'UsuarioController']); ?>

    <div class="container">
        <h2>Registro de usuario</h2>
        <div class="form-group">
            <?php echo Form::label('Nombre de usuario:'); ?>

            <?php echo Form::text('usr', null,['class'=>'form-control', 'placeholder'=>'Introduce nombre completo']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Correo electronico'); ?>

            <?php echo Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Introduce email']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('Contraseña:'); ?>

            <?php echo Form::password('password:',['class'=>'form-control' , 'placeholder'=>'Introduce password']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('confirmar contraseña:'); ?>

            <?php echo Form::password('confirmPassword:',['class'=>'form-control' , 'placeholder'=>'vuelve a escribir la contraseña']); ?>

        </div>
            <?php echo Form::submit('Registrar usuario',['class' => 'btn btn-primary']); ?>

            <?php echo Form::checkbox('remember'); ?>

            <?php echo Form::label('Guardar contraseña:'); ?>

            
    </div>

    <?php echo Form::close(); ?>


<!--
    <div class="container">
    <h2>Registrar nuevo usuario</h2>
      <form>
        <div class="form-group">
          <label for="usr">Nombre de Usuario:</label>
          <input type="text" class="form-control" name="username:" id="usr">
        </div>
        <div class="form-group">
          <label for="pwd">email:</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Contraseña:</label>
          <input type="password" class="form-control" name="password" id="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Confirm contraseña:</label>
          <input type="password" class="form-control" name="confirmPassword" id="confPwd">
        </div>
          <button class="login-button" type="submit">Login</button>
      <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      </form>
    </div>
 --> 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>