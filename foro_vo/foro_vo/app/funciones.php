<?php
function usuarioOK($usuario, $contraseña) :bool {
    // Validar usuario (8 o más caracteres) y contraseña (usuario al revés)
    if (strlen($usuario) >= 8) {
        $contraseña_correcta = strrev($usuario);
        return ($contraseña === $contraseña_correcta);
    }
    return false;
}

function analizarTexto($texto) {
    // Número de caracteres
    $num_caracteres = strlen($texto);
    
    // Número de palabras
    $num_palabras = str_word_count($texto);
    
    // Carácter más repetido
    $caracteres = count_chars($texto, 1);
    $char_mas_repetido = chr(array_search(max($caracteres), $caracteres));
    
    // Palabra más repetida
    $palabras = str_word_count($texto, 1);
    $frecuencia = array_count_values($palabras);
    arsort($frecuencia);
    $palabra_mas_repetida = key($frecuencia);
    
    return [
        'caracteres' => $num_caracteres,
        'palabras' => $num_palabras,
        'char_repetido' => $char_mas_repetido,
        'palabra_repetida' => $palabra_mas_repetida
    ];
}

// Función para evitar inyección de código
function limpiarEntrada($datos) {
    return htmlspecialchars(strip_tags(trim($datos)));
}
?>