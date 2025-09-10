<?php 
session_start();
?>

<div class = "card">
    <div class = "card-header">
        <h1> Projeto blog em PHP</h1>
    </div>
    <?php if(isset($_SESSION['login'])): ?>
    <div>
        ola <?php echo $_SESSION['login']['usuario']['nome'] ?>!
        <a href="core/usuario_repositorio.php?acao=logout" class="bnt bnt-link bnt-sm" role="button"> sair</a>
    </div>
    <?php endif ?>
</div>

    