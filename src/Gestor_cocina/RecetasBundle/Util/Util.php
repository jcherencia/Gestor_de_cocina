<?php

namespace Gestor_cocina\RecetasBundle\Util;

// setlocale(LC_ALL, 'en_US.UTF8');
// function toAscii($str) {
// 	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
// 	$clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
// 	$clean = strtolower(trim($clean, '-'));
// 	$clean = preg_replace("/[\/_| -]+/", '-', $clean);

// 	return $clean;
// }
class Util{
	static public function getSlug($cadena, $separador = '-')
	{
	// Código copiado de http://cubiq.org/the-perfect-php-clean-url-generator
	$slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
	$slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
	$slug = strtolower(trim($slug, $separador));
	$slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
	return $slug;
	}

	
}
