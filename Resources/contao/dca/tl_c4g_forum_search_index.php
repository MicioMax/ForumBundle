<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * con4gis - the gis-kit
 *
 * @version   php 7
 * @package   con4gis
 * @author    con4gis contributors (see "authors.txt")
 * @license   GNU/LGPL http://opensource.org/licenses/lgpl-3.0.html
 * @copyright Küstenschmiede GmbH Software & Design 2011 - 2018
 * @link      https://www.kuestenschmiede.de
 */

/**
 * Table tl_c4g_forum
 */
$GLOBALS['TL_DCA']['tl_c4g_forum_search_index'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'sql'                         => array
        (
            'keys' => array
            (
                'si_id'      => 'primary',
                'si_sw_id'   => 'index',
                'si_sw_id,si_type,si_dest_id'  => 'unique'
            )
        )

    ),

    // Fields
    'fields' => array
    (
        'si_id' => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'si_sw_id' => array
        (
            'sql'=> "int(10) unsigned NOT NULL default '0'"
        ),
        'si_type' => array
        (
            'sql'=> "varchar(10) NOT NULL default 'threadhl'"
        ),
        'si_dest_id' => array
        (
            'sql'=> "int(10) NOT NULL default '0'"
        ),
        'si_count' => array
        (
            'sql'=> "smallint(5) unsigned NOT NULL default '0'"
        ),
    ),
);