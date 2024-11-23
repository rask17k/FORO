<?php
$analisis = analizarTexto($_REQUEST['comentario']);
?>
<div>
<b>Detalles:</b><br>
<table>
<tr><td>Longitud:</td><td><?= $analisis['caracteres'] ?></td></tr>
<tr><td>Nº de palabras:</td><td><?= $analisis['palabras'] ?></td></tr>
<tr><td>Letra + repetida:</td><td><?= $analisis['char_repetido'] ?></td></tr>
<tr><td>Palabra + repetida:</td><td><?= $analisis['palabra_repetida'] ?></td></tr>
</table>
</div>