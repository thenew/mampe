<?php
include dirname(__FILE__).'/../../../wp-load.php';

$retour_css = '';
$fichiers = array( );

// couleurs personnalisables

// variables
$variables_css = array(
    // '#CAT1'=> get_option('tp_color_cat1'),
    );


// Dossier contenant les fichiers css
$dossier_css = 'css/';
// On parcour le dossier des css
$dir = opendir($dossier_css);

// On ajoute chaque fichier à un tableau 'fichiers'
// pour chaque fichier
while ( $fichier = readdir($dir) )
{
  // sauf les valeurs . et ..
  if ( $fichier != "." && $fichier != ".." )
  {
    $fichiers[] = $dossier_css . $fichier;
  }
}
closedir($dir);

// Tri par ordre alphabetique des fichiers
asort($fichiers);

// Inclusion des fichiers dans l'ordre
foreach ( $fichiers as $fichier )
  $retour_css .= file_get_contents($fichier);

// Ajout de règles css dynamiques
$plus_css = '
';
$retour_css .= $plus_css;

// Définition de la fonction de compression
function compress($buffer,$variables_css)
{
  // On remplace les variables par leur valeur
  foreach($variables_css as $alias => $valeur)
  $buffer = str_replace($alias, $valeur, $buffer);

  // Suppression des commentaires
  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

  // Suppression des tabulations, espaces multiples, retours à la ligne, etc.
  $buffer = str_replace(array( "\r\n", "\r", "\n", "\t", '  ', '   ', '  ' ), '', $buffer);

  // Suppression des derniers espaces inutiles
  $buffer = str_replace(array( ' { ', ' {', '{ ' ), '{', $buffer);
  $buffer = str_replace(array( ' } ', ' }', '} ' ), '}', $buffer);
  $buffer = str_replace(array( ' : ', ' :', ': ' ), ':', $buffer);
  $buffer = str_replace(array( ' , ', ' ,', ', ' ), ',', $buffer);
  $buffer = str_replace(';}', '}', $buffer);
  $buffer = str_replace(':0px;', ':0;', $buffer);

  // Mise en page améliorée
  $buffer = str_replace('}', '}' . "\n", $buffer);

  return $buffer;
}

// Compression du CSS
$retour_css = compress($retour_css,$variables_css);

// Declaration du contenu CSS
header("Content-type: text/css; charset=utf-8");
// Envoi du retour CSS
echo $retour_css;