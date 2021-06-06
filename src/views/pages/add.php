<?php $render('header'); ?>
<h2>Adicionar Novo Usuario</h2>

<form method="POST" action="<?=$base;?>/novo">

    <label>
        Nome:<br>
        <input type ="text" name="name"/>
    </label><br>

    <label>
        Email:<br>
        <input type ="email" name="email"/>
    </label><br>

    <input type="submit" valeu="Adicionar"/>

</form>
<?php $render('footer');?>