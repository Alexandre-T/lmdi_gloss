<?php
/**
* gloss.php
* @package phpBB Extension - LMDI Glossary
* @copyright (c) 2015-2016 LMDI - Pierre Duhem
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge ($lang, array(
	'LGLOSSAIRE'	=> 'Глоссарий',
	'TGLOSSAIRE'	=> 'Глоссарий',
// UCP
	'UCP_GLOSS_TITLE'	=> 'Глоссарий',
	'UCP_GLOSS'		=> 'Главная страница',
	'UCP_CONFIG_SAVED'	=> 'Конфигурация пользователя сохранена<br /><br />%sНажмите здесь чтобы вернуться.%s',
	'UCP_ENABLE'		=> 'Включить глоссарий для ваше аккаунта',
	'UCP_ENABLE_EXPLAIN' => 'Глоссарий отображает дополнительную информацию и картинки к терминам, которые имеют дополнительное описание.',

// Installation
	'ROLE_GLOSS_ADMIN'	=> 'Админитраторы Глоссария',
	'ROLE_GLOSS_EDITOR'	=> 'Редакторы Глоссария',
	'ROLE_DESCRIPTION_GLOSS_ADMIN' => 'Administration role to manage the glossary and its editors','ROLE_DESCRIPTION_GLOSS_EDITOR' => 'User role to be assigned for editing the glossary',
	'GROUP_GLOSS_ADMIN'				=> 'Администраторы глоссария',
	'GROUP_DESCRIPTION_GLOSS_ADMIN'	=> 'Group of the glossary administrators',
	'GROUP_GLOSS_EDITOR'			=> 'Редакторы глоссария',
	'GROUP_DESCRIPTION_GLOSS_EDITOR'	=> 'Group of the glossary editors',

// ACP
	'ACP_GLOSS_TITLE'	=> 'Глоссарий',
	'ACP_GLOSS'		=> 'Настройки',
	'ALLOW_FEATURE'		=> 'Enable Glossary Feature',
	'ALLOW_FEATURE_EXPLAIN'	=> 'You may enable/disable the glossary tagging feature for the whole board. Each user can disable the tagging feature in posts from the user control panel.',
	'ALLOW_TITLE'		=> 'Enable Tooltip',
	'ALLOW_TITLE_EXPLAIN'	=> 'You may enable/disable the display of the term description in a tooltip when hovering over the term. Long descriptions will be truncated at 50 characters.',
	'CREATE_UGROUP'		=> 'Creation of an usergroup',
	'CREATE_UGROUP_EXPLAIN'	=> 'You may create an usergroup and assign to it the glossary editor role created when installing the extension. You may then add users to this group.',
	'CREATE_AGROUP'		=> 'Creation of an administrator group',
	'CREATE_AGROUP_EXPLAIN'	=> 'You may create a group to manage the glossary administrators. You may then add administrators to this group.',
	'LANGUAGE'		=> 'Default language',
	'LANGUAGE_EXPLAIN'	=> 'Language code (board language by default) which will be registered in the base for the glossary term if you don\'t specify another language in the edition form.',
	'GLOSS_PIXELS'			=> 'Size of uploaded pictures in pixels',
	'GLOSS_PIXELS_EXPLAIN'	=> 'Set here the size (in pixels) of the long side of the uploaded pictures.',
	'POIDS'			=> 'Size in kB',
	'POIDS_EXPLAIN'	=> 'Set here the maximum size (in kB) of the uploaded pictures.',

));