<?php
$titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_STRING);
$ipdf = filter_input(INPUT_POST, "ipdf", FILTER_UNSAFE_RAW);

if ($titulo) {
    // ARRAY DE CARACTERES
    $com_acentos = array ('À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ò','ó','ô','õ','ö','ù','ú','û','ü','ý', '"', '!', '@', '#', '$', '%', '&', '*', '(', ')', '{', '}', '[', ']', '_', '-', '+', '=', '^', '~', 'ª', 'º', '?', ':', '>', '<', ';', '°', '|', '÷', '´', '()', '{}', '[]', '/', '/ ', '.', '. ',  ';)', ',',' ');
    // ARRAY DE HIFEM PARA SUBSTITUIR CARACTERES
    $sem_acentos = array ('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y',' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ','-');
    // REMOVER CARACTERES
    $titulo = str_replace($com_acentos, $sem_acentos, $titulo); 
}

if (empty($ipdf)) {
    ?>
    <button onclick="history.go(-1)">voltar</button>
    <?php
    
    die("Por favor, insira algum conteúdo para imprimir.");
}


// Opção HTML: Manter o HTML conforme está
$html = ($_POST['formato'] === 'html') ? $ipdf : nl2br($ipdf);

// Envolver o conteúdo em HTML
//$ipdf = '<html><body style="font-size:30px;">' . $html . '</body></html>';
$ipdf = '<html><body">' . $html . '</body></html>';

require_once './vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);

$dompdf = new DOMPDF($options);
$dompdf->loadHtml($ipdf);
$dompdf->setPaper("A4", "portrait");
$dompdf->render();
$dompdf->stream(strtolower($titulo) . ".pdf");
?>
