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
 * Class lm_playerreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_playerreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_playerreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Player reader - Basic information<br />";
			if($this->lm_usefixedplayer=="1"){
				$objPlayer =$this->Database->prepare("SELECT * FROM tl_lm_players WHERE id=?")->execute($this->lm_player);
				$return.="Fixed player: " . $objPlayer->name;
			}
			else
			{
				$return.="Variable player";
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
		//Get player id from get variable or from content element settings
		if($this->lm_usefixedplayer=="1"){
			$playerid = $this->lm_player;
		}
		else
		{
			$playerid = $this->Input->get('lm_player');
		}
		
		
		if($playerid)
		{
			$objPlayer=$this->Database->prepare("SELECT * FROM tl_lm_players WHERE id=?")->execute($playerid);
			
			$arrPlayer=array(
				'name'=>$objPlayer->name,
				'picture'=>$objPlayer->picture,
				'position'=>$objPlayer->position,
				'nickname'=>$objPlayer->nickname,
				'website'=>$objPlayer->website,
				'birthday'=>$objPlayer->birthday,
				'addinfo'=>$objPlayer->addinfo
			);
			$this->Template->player=$arrPlayer;
			$this->Template->hasPlayerid=$playerid;
			$this->Template->se_friendly_tags=$this->lm_se_friendly;
		}
	}
}

?>