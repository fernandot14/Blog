<div class = "card">

    <div class="card-header">
        Menu
    </div>

    <div class="card-body">

        <ul class = "nav flex-column">

            <li class="nav-item">
                <a href="nav-link" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a href="nav-link" href="usuario_formulario.php">cadastre-se</a>
            </li>

            <li class="nav-item">
                <a href="nav-link" href="login_formulario.php">login</a>
            </li>
            <li class="nav-item">
                <a href="nav-link" href="post_formulario.php">incluir post</a>
            </li>

            <?php if ( (isset($_SESSION['login'])) && ($_SESSION['login']['usuario']['adm'] === 1) ) : ?>
            <li class="nav-item">

                <a href="nav-link" href="usuarios.php">usuarios</a>
            </li>

            <?php endif ?>

        </ul>

    </div>

</div>