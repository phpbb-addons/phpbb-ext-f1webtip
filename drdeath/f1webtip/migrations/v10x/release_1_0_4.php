<?php
/**
*
* @package phpBB Extension - DrDeath F1WebTip
* @copyright (c) 2014 Dr.Death - www.lpi-clan.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace drdeath\f1webtip\migrations\v10x;

class release_1_0_4 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['drdeath_f1webtip_version']) && version_compare($this->config['drdeath_f1webtip_version'], '1.0.4', '>=');
	}

	static public function depends_on()
	{
		return array('\drdeath\f1webtip\migrations\v10x\release_1_0_3');
	}

	public function update_data()
	{
		return array(
			// Set the current version
			array('config.update', array('drdeath_f1webtip_version', '1.0.4')),

		);
	}
}
