<?php $render('header'); ?>
<h2>Editar Usuario</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">

    <label>
        Nome:<br>
        <input type ="text" name="name" value="<?=$usuario['nome'];?>"/>
    </label><br>

    <label>
        Email:<br>
        <input type ="email" name="email"  value="<?=$usuario['email'];?>"/>
    </label><br>

    <input type="submit" valeu="Salvar"/>

</form>
<?php $render('footer');?>