<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 Paul Sohier <http://www.ajax-shoutbox.com>
 * @license       GNU General Public License, version 2 (GPL-2.0)
 *
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'AJAX_SHOUTBOX'                  => 'Shoutbox',
		'AJAX_SHOUTBOX_MESSAGE'          => 'Bericht toevoegen',
		'AJAX_SHOUTBOX_ONLY_AJAX'        => 'Sorrie, het posten is alleen ondersteund wanneer je browser Javascript ondersteund.',
		'AJAX_SHOUTBOX_NO_PERMISSION'    => 'Geen permissie voor de geselecteerde actie',
		'AJAX_SHOUTBOX_MESSAGE_EMPTY'    => 'Bericht is leeg',
		'AJAX_SHOUTBOX_ERROR'            => 'Fout',
		'AJAX_SHOUTBOX_MISSING_ID'       => 'Niet mogelijk om post te verwijderen',
		'AJAX_SHOUTBOX_NO_SUCH_POST'     => 'Post niet gevonden',
		'AJAX_SHOUTBOX_PUSH_NOT_AVAIL'   => 'De remote push server is niet beschikbaar.',


        'AJAXSHOUTBOX_CONNECTION_INFO'   => 'Verbindings informatie voor de shoutbox App',

		'AJAXSHOUTBOX_BOARD_DATE_FORMAT'            => 'Shoutbox datum formaat',
		'AJAXSHOUTBOX_BOARD_DATE_FORMAT_EXPLAIN'    => 'Kies een datum formaat specifiek voor de shoutbox.
			Je kan beter geen relatief datum formaat gebruiken.',

		'AJAXSHOUTBOX_UNSUPPORTED_STYLE'    => 'Het lijkt erop dat je een niet prosilver gebaseerde style gebruikt, of je style niet correct inherit van prosilver.
			<br />Wanneer je een prosilver gebaseerde style gebruikt, zorg ervoor dat hij correct inherit van prosilver.
			<br />Wanneer je een niet prosilver gebaseerde style gebruikt, dien je de shoutbox template aan te passen voor je style,
				of de autheur van de style te vragen om support voor de shoutbox.
			<br />If geef geen support voor niet prosilver gebaseerde stylen (Inclusief subsilver2!). Dit bericht wordt alleen weergeven aan beheerders.',
	)
);
