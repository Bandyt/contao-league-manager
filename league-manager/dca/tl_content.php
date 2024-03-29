<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @package    league-manager
 * @license    LGPL
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_useredirectmatch';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_useredirectplayer';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_useredirectteam';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_useredirectcontest';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_usefixedteam';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_usefixedcontest';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_usefixedmatch';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_usefixedplayer';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_linktype_player';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_linktype_team';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_linktype_match';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'lm_linktype_contest';


$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_teams'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest,lm_showlogo;{lm_redirect},lm_linktype_team;{lm_selecttemplate},lm_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_basic'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_rounds'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_matches'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest;{lm_redirect},lm_useredirectmatch;{lm_selecttemplate},lm_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_crosstable'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest;{lm_redirect},lm_useredirectmatch;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_table'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest;{lm_redirect},lm_linktype_team;{lm_selectfields},lm_tablefields;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_contestreader_basic'] = '{type_legend},type,headline;{lm_settings},lm_usefixedcontest,lm_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_matchreader_events'] = '{type_legend},type,headline;{lm_settings},lm_usefixedmatch;{lm_redirect},lm_linktype_player,lm_linktype_team;{lm_selecttemplate},lm_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_matchreader_basic'] = '{type_legend},type,headline;{lm_settings},lm_usefixedmatch,lm_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_matchreader_reports'] = '{type_legend},type,headline;{lm_settings},lm_usefixedmatch,lm_reporttype;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_teamreader_basic'] = '{type_legend},type,headline;{lm_settings},lm_usefixedteam,lm_showlogo,lm_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_teamreader_nextmatch'] = '{type_legend},type,headline;{lm_settings},lm_usefixedteam,lm_showlogo;{lm_redirect},lm_useredirectmatch,lm_useredirectteam;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_teamreader_matches'] = '{type_legend},type,headline;{lm_settings},lm_usefixedteam,lm_usefixedcontest;{lm_redirect},lm_useredirectmatch;{lm_selecttemplate},lm_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_playerreader_basic'] = '{type_legend},type,headline;{lm_settings},lm_usefixedplayer,lm_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lm_resultform'] = '{type_legend},type,headline{lm_settings},lm_usefixedcontest;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_useredirectplayer'] = 'lm_redirectplayer';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_useredirectteam'] = 'lm_redirectteam';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_useredirectmatch'] = 'lm_redirectmatch';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_useredirectcontest'] = 'lm_redirectcontest';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_usefixedcontest'] = 'lm_contest';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_usefixedteam'] = 'lm_team';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_usefixedmatch'] = 'lm_match';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_usefixedplayer'] = 'lm_player';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_player_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_player_INT']='lm_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_player_EXT']='lm_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_player_FIX']='lm_redirectplayer,lm_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_team_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_team_INT']='lm_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_team_EXT']='lm_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_team_FIX']='lm_redirectteam,lm_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_match_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_match_INT']='lm_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_match_EXT']='lm_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_match_FIX']='lm_redirectmatch,lm_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_contest_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_contest_INT']='lm_link_contest_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_contest_EXT']='lm_link_contest_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lm_linktype_contest_FIX']='lm_redirectcontest,lm_link_contest_new_window';
/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_contest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_contest'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getContests')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_showlogo'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_showlogo'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_team'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_team'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getTeams')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_redirectplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_redirectplayer'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_redirectteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_redirectteam'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_redirectmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_redirectmatch'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_redirectcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_redirectcontest'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_useredirectplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_useredirectplayer'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_useredirectmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_useredirectmatch'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_useredirectteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_useredirectteam'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_useredirectcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_useredirectcontest'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_template'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options'				  => array('div','table'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_template']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_tablefields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_tablefields'],
	'exclude'                 => false,
	'inputType'               => 'checkboxWizard',
	'eval'                    => array('mandatory'=>true,'multiple'=>true),
	'options'				  => array('logo','name','matches','w','d','l','rp','rm','rd','pp','pm','pd','pt','pen'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_tablefields']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_usefixedteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_usefixedteam'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_usefixedcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_usefixedcontest'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_usefixedmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_usefixedmatch'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_match'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_match'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getMatches')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_usefixedplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_usefixedplayer'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_player'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_player'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getPlayers')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_se_friendly'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_se_friendly'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_reporttype'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_reporttype'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options'				  => array('P','G','A'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_reporttype']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_datefrom'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_datefrom'],
	'exclude'                 => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString())
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_dateto'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_dateto'],
	'exclude'                 => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString())
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_linktype_player'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_linktype_player'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_linktypes']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_linktype_team'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_linktype_team'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_linktypes']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_linktype_match'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_linktype_match'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_linktypes']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_linktype_contest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_linktype_contest'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['lm_linktypes']['reference']
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_link_player_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array()
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_link_team_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array()
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_link_match_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array()
);
$GLOBALS['TL_DCA']['tl_content']['fields']['lm_link_contest_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lm_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array()
);
class tl_content_lm extends Backend
{
	//Lists the contests in the database
	public function getContests()
	{
		$objContests = $this->Database->prepare("SELECT id, name, sortstring FROM tl_lm_contests")->execute();

		if ($objContests->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objContests->next())
		{
			if($objContests->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$objContests->id] = $objContests->name;
			}
			else
			{
				$return[$objContests->sortstring][$objContests->id] = $objContests->name;
			}
		}

		return $return;
	}
	
	//Lists the teams in the database
	public function getTeams()
	{
		$objTeams = $this->Database->prepare("SELECT id, name, sortstring FROM tl_lm_teams ORDER BY name ASC")->execute();

		if ($objTeams->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objTeams->next())
		{
			if($objTeams->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$objTeams->id] = $objTeams->name;
			}
			else
			{
				$return[$objTeams->sortstring][$objTeams->id] = $objTeams->name;
			}
		}

		return $return;
	}
	//Lists the teams in the database
	public function getMatches()
	{
		$return=array();
		$teams=array();
		$objTeams = $this->Database->prepare("SELECT id, name, sortstring FROM tl_lm_teams ORDER BY name ASC")->execute();
		while($objTeams->next())
		{
			$teams[$objTeams->id]=$objTeams->name;
		}
		
		$arrContests = $this->Database->prepare("SELECT id, name from tl_lm_contests ORDER BY name ASC")->execute();
		while($arrContests->next())
		{
			$arrRounds=$this->Database->prepare("SELECT id, name from tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($arrContests->id);
			while($arrRounds->next())
			{
				$arrMatches = $this->Database->prepare("SELECT id, team_home, team_away FROM tl_lm_matches WHERE pid=?")->execute($arrRounds->id);
				while($arrMatches->next())
				{
					
					$return[$arrContests->name][$arrMatches->id] = "[" . $arrRounds->name . "] " . $teams[$arrMatches->team_home] . " : " . $teams[$arrMatches->team_away];	
				}
			}
		}
		return $return;
	}
	
	public function getPlayers()
	{
		//Generate list of players
		$objPlayers = $this->Database->prepare("SELECT id, name, sortstring FROM tl_lm_players ORDER BY name ASC")->execute();

		if ($objPlayers->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objPlayers->next())
		{
			if($objPlayers->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$objPlayers->id] = $objPlayers->name;
			}
			else
			{
				$return[$objPlayers->sortstring][$objPlayers->id] = $objPlayers->name;
			}
		}

		return $return;
	}
	
}

?>