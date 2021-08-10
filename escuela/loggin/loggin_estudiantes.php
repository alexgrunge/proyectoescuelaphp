<?php include('includes/header.php');   ?>

<header>
    <nav>
        
    </nav>
</header>
<section>
    <div class="loggin-estudiante">
        <form action="acceso/log_estudiante.php" method ="POST">
                <h3><span>Inicio De Sesión (estudiantes) </span></h3>
                <input type="text" name ="matricula" placeholder = "usuario"><br/>
                <input type="password" name ="contraseña"  placeholder = "contraseña" class="pass"><br/>
                <input type="submit" name = "entrar" value ="ingresar" class = "boton-entrar">

        </form>
    </div>

</section>


<?php include("includes/footer.php"); ?>


 
   

