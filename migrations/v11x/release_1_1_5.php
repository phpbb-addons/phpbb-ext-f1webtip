<?php
/**
 * @copyright (c) 2020 Dr.Death - www.lpi-clan.de
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace drdeath\f1webtip\migrations\v11x;

class release_1_1_5 extends \phpbb\db\migration\migration
{
    public function effectively_installed()
    {
        return isset($this->config['drdeath_f1webtip_version']) && version_compare($this->config['drdeath_f1webtip_version'], '1.1.5', '>=');
    }

    public static function depends_on()
    {
        return ['\drdeath\f1webtip\migrations\v10x\release_1_0_0'];
    }

    public function update_data()
    {
        return [
            // Set the current version
            ['config.update', ['drdeath_f1webtip_version', '1.1.5']],
        ];
    }
}
