  @extends('layouts.principal')

  @section('content')

    {!!Form::open(['route' => 'UsuarioController'])!!}
    <div class="container">
        <h2>Registro de usuario</h2>
        <div class="form-group">
            {!! Form::label('Nombre de usuario:') !!}
            {!! Form::text('usr', null,['class'=>'form-control', 'placeholder'=>'Introduce nombre completo']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Correo electronico') !!}
            {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Introduce email']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Contraseña:') !!}
            {!! Form::password('password:',['class'=>'form-control' , 'placeholder'=>'Introduce password']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('confirmar contraseña:') !!}
            {!! Form::password('confirmPassword:',['class'=>'form-control' , 'placeholder'=>'vuelve a escribir la contraseña']) !!}
        </div>
            {!! Form::submit('Registrar usuario',['class' => 'btn btn-primary']) !!}
            {!! Form::checkbox('remember') !!}
            {!! Form::label('Guardar contraseña:') !!}
            
    </div>

    {!!Form::close()!!}

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
  @stop