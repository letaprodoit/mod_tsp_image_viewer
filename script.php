<?php
/*
 * TSP Image Viewer Joomla! module
 *
 * @package		TSP Image Viewer Joomla! module
 * @filename	script.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC - 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		module installer script
 * 
 */

defined('_JEXEC') or die('Restricted access');

class mod_tsp_imageviewerInstallerScript
{
	function preflight($type, $parent)
	{
		$type = strtolower($type);
		if ($type == 'install' || $type == 'update')
			$this->updateManifest($parent);
	}//end preflight
	
	private function updateManifest($parent)
	{
		jimport('joomla.filesystem.file');
		
		$installer = $parent->getParent();
		$manifestFile = basename($installer->getPath('manifest'));
		$cleanManifestFile = preg_replace('/^\_+/i', '', $manifestFile);

		$dir = dirname(__FILE__) . '/install/';

		JFile::delete($dir . $cleanManifestFile);
		JFile::copy($dir . '../' . $cleanManifestFile, $dir . $cleanManifestFile);
	}//end updateManifest
}//end mod_tsp_imageviewerInstallerScript