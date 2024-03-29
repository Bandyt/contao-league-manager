<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_fixes
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_fixes extends Backend
{
	public function fixMatches()
	{
		$objMatches=$this->Database->prepare("SELECT * FROM tl_lm_matches")->execute();
		$i=0;
		while ($objMatches->next())
		{
			$i++;
			$arrSet['starttime'] = strtotime(date('Y-m-d', $objMatches->startdate) . ' ' . date('H:i:s', $objMatches->starttime));
			$arrSet['endtime'] = strtotime(date('Y-m-d', $objMatches->enddate) . ' ' . date('H:i:s', $objMatches->endtime));
			$this->Database->prepare("UPDATE tl_lm_matches %s WHERE id=?")->set($arrSet)->execute($objMatches->id);
		}
		return '
		<div id="tl_buttons">
			<a href="'.ampersand(str_replace('&key=fixMatches', '', $this->Environment->request)).'" class="header_back" title="'.specialchars($GLOBALS['TL_LANG']['MSC']['backBT']).'" accesskey="b">'.$GLOBALS['TL_LANG']['MSC']['backBT'].'</a>
		</div>

		<h2 class="sub_headline">'.$GLOBALS['TL_LANG']['tl_lm_contests']['fixMatches'][0].'</h2><br />'.
		$i . ' matches updated';
	}
	
}

?>