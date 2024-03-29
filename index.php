<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Sistema de apartado de Cañones</title>
	<link href="css/estilo.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
 		<a class="navbar-brand" href="#">
   			 <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section>
	<aside>
		<ul>
			<li>
				<a href="">Usuarios</a>
			</li>
		</ul>
	</aside>
</section>
	<nav></nav>
	<section>
		<aside></aside>
		<div id="contenedor-principal">
      <table>
        <thead>
          <tr>
            <th>Matrícula</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>correo electronico</th>
            <th>nivel</th>
          </tr>
        </thead>
        <tbody>
              <?php 
      //cuando se consulta varios registros se utiliza select
    $usuario = $db->select("usuarios","*" []);//si son especificos se usan arrglos
    foreach ($usuarios as $usuario => $row) {
      
     ?>
          <tr>
            <td><?php echo $row['usr_matricula']; ?></td>
            <td><?php echo $row['usr_nombre']; ?></td>
            <td><?php echo $row['usr_telefono']; ?></td>
            <td><?php echo $row['usr_correo']; ?></td>
            <td><?php echo $row['usr_nivel']; ?></td>
          </tr>
          <?php 
} ?>
        </tbody>
      </table>


    </div>
	</section>
	<footer>
		<p><i class="fas fa-user-lock"></i>Sistema desarrollado por la Logia Corp.</p>
	</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>