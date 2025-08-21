<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Population Method - Tags', 'fw' );
$manifest['slug']        = 'unysonplus-population-method-tags';
$manifest['description'] = __( 'Population Method - Tags', 'fw' );

$manifest['version']     = '1.0.0';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
