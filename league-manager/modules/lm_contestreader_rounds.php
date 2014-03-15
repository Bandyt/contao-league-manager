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
 * Class lm_contestreader_rounds
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_rounds extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_rounds';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - rounds<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name;
			}
			else
			{
				$return.="Variable contest";
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
		if($this->lm_usefixedcontest=="1"){
			$contestid = $this->lm_contest;
		}
		else
		{
			$contestid = $this->Input->get('lm_contest');
		}
		if($contestid)
		{
			$arrRet = array();
			$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($contestid);
			$objContest = $this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
			$this->Template->contest = $objContest->name;
			$i=0;
			while($objRounds->next()){
				$i=$i+1;
				$arrRet[]=array(
				'id'=>$objRounds->id,
				'name'=>$objRounds->name,
				'mode'=>$objRounds->mode,
				'class'=>(($i == 1) ? 'first ' : '') . (($i == $objRounds->numRows) ? 'last ' : '') . ((($i % 2) == 0) ? 'even' : 'odd')
				);
			}
			$this->Template->rounds = $arrRet;
			$this->Template->hasContestid=$contestid;
		}
	}
}

?>