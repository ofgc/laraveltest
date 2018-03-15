  @extends('layouts.principal')

  @section('content')

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
  
  @stop