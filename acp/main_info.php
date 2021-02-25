<?php
/**
 * @copyright (c) 2014 Dr.Death - www.lpi-clan.de
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace drdeath\f1webtip\acp;

class main_info
{
    public function module()
    {
        return [
            'filename'	=> '\drdeath\f1webtip\acp\main_module',
            'title'		  => 'ACP_F1_MANAGEMENT',
            'version'	 => '1.0.0',
            'modes'		  => [
                'settings'		=> ['title' => 'ACP_FORMEL_SETTINGS',	'auth' => 'ext_drdeath/f1webtip && acl_a_formel_settings',	'cat' => ['ACP_F1WEBTIP_TITLE']],
                'drivers'		 => ['title' => 'ACP_FORMEL_DRIVERS',	'auth' => 'ext_drdeath/f1webtip && acl_a_formel_drivers',	'cat' => ['ACP_F1WEBTIP_TITLE']],
                'teams'			  => ['title' => 'ACP_FORMEL_TEAMS',		'auth' => 'ext_drdeath/f1webtip && acl_a_formel_teams',		'cat' => ['ACP_F1WEBTIP_TITLE']],
                'races'			  => ['title' => 'ACP_FORMEL_RACES',		'auth' => 'ext_drdeath/f1webtip && acl_a_formel_races',		'cat' => ['ACP_F1WEBTIP_TITLE']],
            ],
        ];
    }
}
