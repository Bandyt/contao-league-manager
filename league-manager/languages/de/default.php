<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Language
 * @license    LGPL
 * @filesource
 */



/**
* Content elements
*/
$GLOBALS['TL_LANG']['CTE']['league-manager'] = 'Ligaverwaltung';
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_basic']   = array('League Manager - Wettbewerbsleser - Grunddaten', 'Zeigt die Grundinformationen eines Wettbewerbs an.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_teams']   = array('League Manager - Wettbewerbsleser - Mannschaften', 'Listet alle teilnehmenden Mannschaften eines Wettbewerbs auf.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_rounds']   = array('League Manager - Wettbewerbsleser - Runden', 'Listet alle Runden eines Wettbewerbs auf.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_matches']   = array('League Manager - Wettbewerbsleser - Matches', 'Listet alle Matches eines Wettbewerbs auf.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_table']   = array('League Manager - Wettbewerbsleser - Tabelle', 'Generiert eine Ergebnistabelle f&uuml;r einen Wettbewerb.');
$GLOBALS['TL_LANG']['CTE']['lm_contestreader_crosstable']   = array('League Manager - Wettbewerbsleser - Kreuztabelle', 'Generiert eine Kreuztabelle f&uuml;r einen Wettbewerb.');

$GLOBALS['TL_LANG']['CTE']['lm_teamreader_nextmatch']   = array('League Manager - Mannschaftsleser - N&auml;chstes Match', 'Zeigt das n&auml;chste Match einer Mannschaft an.');
$GLOBALS['TL_LANG']['CTE']['lm_teamreader_basic']   = array('League Manager - Mannschaftsleser - Grunddaten', 'Zeigt Grundinformationen &uuml;ber eine Mannschaft an.');
$GLOBALS['TL_LANG']['CTE']['lm_teamreader_matches']   = array('League Manager - Mannschaftsleser - Matches', 'Zeigt die Matches einer Mannschaft an.');

$GLOBALS['TL_LANG']['CTE']['lm_matchreader_events']   = array('League Manager - Matchleser - Ereignisse', 'Listet alle Ereignisse eines Matches auf.');
$GLOBALS['TL_LANG']['CTE']['lm_matchreader_basic']   = array('League Manager - Matchleser - Grundinformationen', 'Zeigt die Grundinformationen eines Matches an.');
$GLOBALS['TL_LANG']['CTE']['lm_matchreader_reports']   = array('League Manager - Matchleser - Berichte', 'Zeigt die Berichte eines Matches an.');

$GLOBALS['TL_LANG']['CTE']['lm_playerreader_basic']   = array('League Manager - Spielerleser - Grundinformationen', 'Zeigt die Grundinformationen eines Spielers an.');


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Logo']   = 'Logo';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Team']   = 'Mannschaft';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Matches']  = 'Matches';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Win']   = 'S';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Draw']   = 'U';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Lose']   = 'N';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resplus']   = 'Ergebnis +';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resminus']   = 'Ergebnis -';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Resdiff']   = 'Ergebnis diff';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsplus']   = 'Pkt +';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsminus']   = 'Pkt -';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsdiff']   = 'Pkt diff';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointstotal']   = 'Pkt total';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointspenalty']   = 'P Strafe';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_from']   = 'Zeige Runden von';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_to']   = 'bis';
$GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_submit']   = 'Anzeigen';

$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['league']   = 'Wettbewerb:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['start']   = 'Erster Spieltag:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['end']   = 'Letzter Spieltag:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['modus']   = 'Spielmodus:';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_league']   = 'Liga';
$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament']   = 'Turnier';

$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['name']   = 'Verein:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['shortname']   = 'Kurz:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['website']   = 'Homepage:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['location']   = 'Heimlokation:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['street']   = 'Stra&szlig;e:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['zip']   = 'Postleitzahl:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['city']   = 'Stadt:';
$GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['region']   = 'Region:';

$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['name']   = 'Spieler:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['nickname']   = 'Spitzname:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['position']   = 'Position:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['birthday']   = 'Geburtstag:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['website']   = 'Homepage:';
$GLOBALS['TL_LANG']['league-manager']['playerreader_basic']['addinfo']   = 'Weitere Informationen:';

$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['startdate']   = 'Start:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['enddate']   = 'Ende:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['location']   = 'Ort:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['street']   = 'Stra&szlig;e:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['zip']   = 'Postleitzahl:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['city']   = 'Stadt:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['region']   = 'Region:';
$GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['website']   = 'Webseite';

$GLOBALS['TL_LANG']['league-manager']['matchreader_nextmatch']['matchinfos']   = 'Weitere Informationen zum Spiel';

$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']   = '(Kein Sortierbegriff)';
$GLOBALS['TL_LANG']['league-manager']['misc']['with_div']   = 'Mit DIV Elementen';
$GLOBALS['TL_LANG']['league-manager']['misc']['with_table']   = 'Als Tabelle';
?>