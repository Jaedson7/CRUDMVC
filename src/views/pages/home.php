<?php $render('header'); ?>


<a href="<?=$base;?>/novo">Novo Usuario</a>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E_MAIL</td>
        <td>AÇÔES</td>
    </tr>
<?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
            <img width="20px" src="<?=$base;?>/assets/images/document.png"
            </a>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir ?')">
            <img width="20px" src="<?=$base;?>/assets/images/trash.png"

            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php $render('footer');?>