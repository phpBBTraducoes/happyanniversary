<?php
/**
* This file is part of the Happy Anniversary package.
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 0.2.0] (https://github.com/phpBBTraducoes)
* @copyright (c) VinaBB <vinabb.vn>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/**
* All language files should use UTF-8 as their encoding
* and the files must not contain a BOM.
*/
$lang = array_merge($lang, array(
	'HAPPY_ANNIVERSARY'			=> 'Feliz aniversário',
	'HAPPY_ANNIVERSARY_TEXT'	=> 'Parabéns a: <strong>%s</strong>',

	'NOTIFICATION_HAPPY_ANNIVERSARY'		=> '%1$s, É uma grande honra estar com você hoje para comemorar o aniversário de %2$d-ano de membro.',
	'NOTIFICATION_TYPE_HAPPY_ANNIVERSARY'	=> 'Dia de aniversário de membro',
));
