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
 * Class lm_contestreader_teams
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - Basic information<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name . "<br />";
			}
			else
			{
				$return.="Variable contest <br />";
			}
			return $return;
		}
		return parent::generate();
	}
	
	/**
	 * Generate module
	 */
	protected function compile()
	{
		//Get contest id from get variable or from content element settings
		if($this->lm_usefixedcontest=="1"){
			$contestid = $this->lm_contest;
		}
		else
		{
			$contestid = $this->Input->get('lm_contest');
		}
		
		if($contestid)
		{
			$arrTeams = array();
			$objContest = $this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($contestid);
			$this->Template->contest = $objContest->name;
			switch($objContest->mode)
			{
				case 'L':
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_league'];
					break;
				case 'T':
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament'];
					break;
				default:
					$this->Template->mode=$GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['type_tournament'];
					break;
			}
			$this->Template->date_start = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_start);
			$this->Template->date_end = date($GLOBALS['TL_CONFIG']['dateFormat'],$objContest->date_end);
			$this->Template->hasContestid=$contestid;
		}//if($contestid)
	}	
}

?>