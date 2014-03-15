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
 * Table tl_lm_event_masters 
 */
$GLOBALS['TL_DCA']['tl_lm_event_masters'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('sortstring','name'),
			'flag'                    => 11
		),
		'label' => array
		(
			'fields'                  => array('name'),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('show_times','show_player','show_teams','show_results','show_texts','show_numbers'),
		'default'                     => 'name,sortstring;{time},show_times;{player},show_player;{team},show_teams;{result},show_results;{other},show_texts,show_numbers;{additional_information},eventtext,picture,statistical_event'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'show_times'                             => 'event_time,event_time_unit',
		'show_player'                            => 'player1,player2',
		'show_teams'                             => 'team1,team2',
		'show_texts'                             => 'text1,text2',
		'show_numbers'                           => 'number1,number2',
		'show_results'                           => 'result_home,result_away,intermediate_result'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'pid' => array
		(
			'sql'                     => "int(10) NOT NULL default '0'"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'event_time' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'event_time_unit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['event_time_unit'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'player1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['player1'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'player2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['player2'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'team1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['team1'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'team2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['team2'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'text1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['text1'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'text2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['text2'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'number1' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['number1'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'number2' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['number2'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'result_home' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_home'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'result_away' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['result_away'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'penalty_duration' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['penalty_duration'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'intermediate_result' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['intermediate_result'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'eventtext' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['eventtext'],
			'exclude'                 => false,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>false, 'rte'=>'tinyMCE'),
			'sql'                     => "blob NULL"
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['picture'],
			'exclude'                 => false,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>false, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'show_times' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_times'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'show_player' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_player'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'show_teams' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_teams'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'show_results' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_results'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'show_texts' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_texts'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'show_numbers' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['show_numbers'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false,'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'statistical_event' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lm_event_masters']['statistical_event'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('mandatory'=>false),
			'sql'                     => "char(1) NOT NULL default ''"
		)
	)
);

class tl_lm_event_masters extends Backend
{
	
}
?>