<?php
/*
 * TSP Image Viewer Joomla! module
 *
 * @package		TSP Image Viewer Joomla! module
 * @filename	helper.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		helper class
 * 
 */

defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModTSPImageViewerHelper
{
    private static $projectXml = "modules/mod_tsp_image_viewer/mod_tsp_image_viewer.projects.xml";
    
    /***********
     *
     * Returns a project by ID
     *
     ***********/
    public static function getProject($pID)
    {
        $project = null;
        
        $xml = simplexml_load_file(self::$projectXml);
        
		foreach ($xml->project as $aproject) {
			$id = (int)$aproject->attributes()->id;
			
			if ($id == $pID) {
				$project = $aproject;
			}
		} 
		
        return $project;
    } //end getProject
 
    /***********
     *
     * Returns all projects
     *
     ***********/
    public static function getProjects($exclude = array())
    {
        $projects = array();
 
        $xml = simplexml_load_file(self::$projectXml);
        
		foreach ($xml->project as $aproject) {
		
			$id = (int)$aproject->attributes()->id;
			
			if (!in_array($id, $exclude)) {
				$projects[] = $aproject;
			}
		}
		
        return $projects;
    } //end getProjects
} //end ModTSPImageViewerHelper
?>