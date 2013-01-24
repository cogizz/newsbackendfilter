<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Christopher Bölter 2013
 * @author     Christopher Bölter <http://www.cogizz.de>
 * @package    newsbackendfilter
 * @license    LGPL
 * @filesource
 */

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['filter_legend'] = 'Filters and Sorting';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['addSort'] = array('add sorting','Modify the news sorting.');
$GLOBALS['TL_LANG']['tl_module']['sortBy'] = array('Sort by','Filter by a special field.');
$GLOBALS['TL_LANG']['tl_module']['invertSortOrder'] = array('Reverse sorting','Reversed sorting of news.');
$GLOBALS['TL_LANG']['tl_module']['addFilter'] = array('Add filter','Filter by a spcial criteria.');
$GLOBALS['TL_LANG']['tl_module']['filterBy'] = array('Filter by','Filter by field.');
$GLOBALS['TL_LANG']['tl_module']['filterTerm'] = array('Filter condition','Filter by condition');
$GLOBALS['TL_LANG']['tl_module']['addVisibilityPeriod'] = array('Add period','Show only news in this period.');
$GLOBALS['TL_LANG']['tl_module']['baseDate'] = array('Reference date','The time period will be orientated by this date. The standard date is the current date.');
$GLOBALS['TL_LANG']['tl_module']['skipPeriod'] = array('Jump over period','Dont display items in this time period.');
$GLOBALS['TL_LANG']['tl_module']['newsListedInterval'] = array('Show period','Show only news in this period.');