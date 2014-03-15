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
 * Class lm_teamreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_teamreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_teamreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Team reader - Basic data<br />";
			if($this->lm_usefixedteam=="1"){
				$objTeam =$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($this->lm_team);
				$return.="Fixed team: " . $objTeam->name;
			}
			else
			{
				$return.="Variable team";
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
		//Get team id from get variable or from content element settings
		if($this->lm_usefixedteam=="1"){
			$teamid = $this->lm_team;
		}
		else
		{
			$teamid = $this->Input->get('lm_team');
		}
		
		if($teamid)
		{
			$contests=array();
			$objteam =$this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($teamid);
			if ($objteam->numRows>0){
				$this->Template->team_found=1;
				$this->Template->id=$objteam->id;
				$this->Template->name=$objteam->name;
				$this->Template->shortname=$objteam->shortname;
				if($objteam->website!='')
				{
					if (strtolower(substr($objteam->website, 0, 4))!='http')
					{
						$website='http://' . $objteam->website;
					}
					else
					{
						$website=$objteam->website;
					}
				}
				else
				{
					$website='';
				}
				
				$this->Template->website=$website;
				$this->Template->location=$objteam->location;
				$this->Template->street=$objteam->street;
				$this->Template->zip=$objteam->zip;
				$this->Template->city=$objteam->city;
				$this->Template->region=$objteam->region;
				if($this->lm_showlogo==1)
				{
					$this->Template->logo=$objteam->logo;
				}
				else
				{
					$this->Template->logo='';
				}
				
			}
			else{
				$this->Template->team_found=0;
			}
			$this->Template->hasTeamid=$teamid;
			$this->Template->se_friendly=$this->lm_se_friendly;
		}//if($teamid)
	}
}

?>