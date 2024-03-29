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
 * @package    leaguemanager 
 * @license    LGPL 
 * @filesource
 */


/**
 * Table tl_lm_game_reports 
 */
$GLOBALS['TL_DCA']['tl_lm_match_reports'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_lm_matches',
		'enableVersioning'            => true,
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('header'),
			'flag'                    => 1,
			'headerFields'            => array('team_home','team_away'),
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_lm_match_reports', 'listReports')
		),
		'label' => array
		(
			'fields'                  => array('text'),
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'reporttype,header,text'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'text' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['text'],
			'exclude'                 => false,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>false, 'rte'=>'tinyMCE')
		),
		'header' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['header'],
			'exclude'                 => false,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true)
		),
		'reporttype' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['reporttype'],
			'exclude'                 => false,
			'inputType'               => 'select',
			'options'				  => array('P','G','A'),
			'reference'				  => &$GLOBALS['TL_LANG']['tl_lm_match_reports']['reporttype']['reference'],
			'eval'                    => array('mandatory'=>true)
		)
	)
);

class tl_lm_match_reports extends Backend
{
	
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
	
	public function listReports($arrRow)
	{
		return '<div>' . $arrRow['header'] . '</div>' . "\n";
	}
}
?>