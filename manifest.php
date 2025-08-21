<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

// Basic Info
$manifest['name']        = __( 'Population Methods', 'fw' );
$manifest['slug']        = 'unysonplus-population-methods';
$manifest['description'] = __( 'Provides multiple population methods (Posts, Tags, Custom, Categories, etc.) for sliders and other extensions.', 'fw' );

$manifest['version']     = '1.0.19';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-PopulationMethods-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-PopulationMethods-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
