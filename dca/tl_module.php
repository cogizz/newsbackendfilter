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
 * add a new palette for the newslistbackendfilter module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslistbackendfilter'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_numberOfItems,news_featured,perPage,skipFirst;{filter_legend},addSort;addFilter;addVisibilityPeriod;{template_legend:hide},news_metaFields,news_template,imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * define a new selector
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'addSort';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'addFilter';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'addVisibilityPeriod';

/**
 * define the subplattes for the selectors
 */
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['addSort'] = 'sortBy,invertSortOrder';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['addFilter'] = 'filterBy,filterTerm';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['addVisibilityPeriod'] = 'baseDate,skipPeriod,newsListedInterval';

/**
 * add the fields to the tl_module dca
 */

// sorting
$GLOBALS['TL_DCA']['tl_module']['fields']['addSort'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addSort'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'clr','submitOnChange' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sortBy'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['sortBy'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_module_newsbackendfilter', 'getDatabaseFields'),
    'eval'                    => array('mandatory'=>true, 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['invertSortOrder'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['invertSortOrder'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50')
);

// filter
$GLOBALS['TL_DCA']['tl_module']['fields']['addFilter'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addFilter'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'clr','submitOnChange' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['filterBy'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['filterBy'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_module_newsbackendfilter', 'getDatabaseFields'),
    'eval'                    => array('mandatory'=>true, 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['filterTerm'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['filterTerm'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'tl_class' => 'w50')
);

// visibility period
$GLOBALS['TL_DCA']['tl_module']['fields']['addVisibilityPeriod'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['addVisibilityPeriod'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'clr','submitOnChange' => true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['baseDate'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['baseDate'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'default'                 => '',
    'eval'                    => array('rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'w50 wizard')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['skipPeriod'] = array
(
    'label'           => &$GLOBALS['TL_LANG']['tl_module']['skipPeriod'],
    'default'         => 0,
    'exclude'         => true,
    'inputType'         => 'timePeriod',
    'options'         => array('days', 'weeks', 'months', 'years'),
    'reference'         => &$GLOBALS['TL_LANG']['tl_calendar_events'],
    'eval'          => array('tl_class' => 'clr w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['newsListedInterval'] = array
(
    'label'           => &$GLOBALS['TL_LANG']['tl_module']['newsListedInterval'],
    'default'         => 0,
    'exclude'         => true,
    'inputType'         => 'timePeriod',
    'options'         => array('days', 'weeks', 'months', 'years'),
    'reference'         => &$GLOBALS['TL_LANG']['tl_calendar_events'],
    'eval'          => array('tl_class' => 'w50')
);


/**
 * Class tl_module_newsbackendfilter
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Christopher Bölter 2013
 * @author     Christopher Bölter <http://www.cogizz.de>
 * @package    newsbackendfilter
 */
class tl_module_newsbackendfilter extends Backend {

    /**
     * get the fields for the sorting
     * @return array
     */
    public function getDatabaseFields() {
        $arrSortFields = $this->Database->getFieldNames('tl_news');
        $arrExcludes = array('pid','alias','addImage','singleSRC','alt','size','imagemargin','imageUrl','fullsize','caption','floating','PRIMARY','enclosure');

        $arrFields = array();

        foreach($arrSortFields as $field) {
            if(!in_array($field, $arrExcludes))
                $arrFields[$field] = $field;
        }

        return $arrFields;
    }
}

?>