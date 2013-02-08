<?php
/*
 * TSP Image Viewer Joomla! module
 *
 * @package		TSP Image Viewer Joomla! module.
 * @version		1.0.0
 * @author		The Software People, LLC
 * @copyright	Copyright © 2013 www.thesoftwarepeople.com. All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * 
 */

defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModTSPImageViewerHelper
{
    private static $projectXml = "modules/mod_tsp_imageviewer/mod_tsp_imageviewer.projects.xml";
    
    /**
     * Returns a project by ID
    */
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
 
    /**
     * Returns all projects
    */
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