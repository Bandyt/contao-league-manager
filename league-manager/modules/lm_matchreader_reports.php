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
 * Class lm_matchreader_reports
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_matchreader_reports extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_matchreader_reports';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Match reader - reports<br />";
			if($this->lm_usefixedmatch=="1"){
				$objEvent =$this->Database->prepare("SELECT * FROM tl_lm_matches WHERE id=?")->execute($this->lm_match);
				$return.="Fixed match: " . $objEvent->team_home . " vs. " . $objEvent->team_away . "<br />";
			}
			else
			{
				$return.="Variable match <br />";
			}
			switch($this->lm_reporttype)
			{
				case 'P':
					$return.=$GLOBALS['TL_LANG']['tl_lm_match_reports']['reporttype']['reference']['P'];
					break;
				case 'G':
					$return.=$GLOBALS['TL_LANG']['tl_lm_match_reports']['reporttype']['reference']['G'];
					break;
				case 'A':
					$return.=$GLOBALS['TL_LANG']['tl_lm_match_reports']['reporttype']['reference']['A'];
					break;
				default:
					$return.='Unknown report type';
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
		if($this->lm_usefixedmatch=="1"){
			$matchid = $this->lm_match;
		}
		else
		{
			$matchid = $this->Input->get('lm_match');
		}
		
		if($matchid)
		{
			$objReport = $this->Database->prepare("SELECT * FROM tl_lm_match_reports WHERE pid=? AND reporttype=?")
														->limit(1)
														->execute($matchid,$this->lm_reporttype);
			$this->Template->reporttitle=$objReport->header;
			$this->Template->reporttext=$objReport->text;
			$this->Template->hasMatchid=$matchid;
		}
	}
}

?>