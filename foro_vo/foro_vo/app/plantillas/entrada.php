<div>
<form name='entrada' method="POST">
<table>
<tr>
<td>Nombre:</td>
<td><input type="text" name="nombre" 
    value="<?=(isset($_REQUEST['nombre']))?limpiarEntrada($_REQUEST['nombre']):''?>"></td>
</tr>
<tr>
<td>Contraseña:</td>
<td><input type="password" name="contraseña"
    value="<?=(isset($_REQUEST['contraseña']))?limpiarEntrada($_REQUEST['contraseña']):''?>"></td>
</tr>
</table>
<?php if (!empty($msg)): ?>
    <p style="color: red;"><?= $msg ?></p>
<?php endif; ?>
<input type="submit" name="orden" value="Entrar">
</form>
</div>