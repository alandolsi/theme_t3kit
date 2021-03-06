<?php
namespace T3kit\themeT3kit\Plugin\Search;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2015 Timo Schmidt <timo.schmidt@aoemedia.de>
 *  (c) 2012-2015 Ingo Renner <ingo@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Plugin 'Solr Search box' for the 'solr' extension. A cached plugin version of
 * just the search input field.
 *
 * @author Timo Schmidt <timo.schmidt@aoemedia.de>
 * @package TYPO3
 * @subpackage solr
 */
class SearchHeaderMiddle extends \ApacheSolrForTypo3\Solr\Plugin\Search\Search
{
    /**
     * Provides the Typoscript key, which is used to determine the template file
     * for this view.
     *
     * @return string TypoScript key used to determine the template file.
     */
    protected function getTemplateFileKey()
    {
        return 'searchHeaderMiddle';
    }
}
