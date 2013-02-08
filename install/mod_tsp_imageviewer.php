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

//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
// Step #1: include the helper file
require_once __DIR__ . '/helper.php';
 
// Step #2: get a parameter from the module's configuration
$viewer_width = $params->get('viewer_width');
$viewer_height = $params->get('viewer_height');
$main_image_width = $params->get('main_image_width');
$project_list_width = $params->get('project_list_width');
$thumb_width_height = $params->get('thumb_width_height');
 
// Step #3: get the items to display from the helper
$default_project = ModTSPImageViewerHelper::getProject(0);
$all_projects = ModTSPImageViewerHelper::getProjects();
 
$document = JFactory::getDocument();
$document->addScript('modules/mod_tsp_imageviewer/tmpl/js/jquery-1.3.2.min.js');
$document->addScript('modules/mod_tsp_imageviewer/tmpl/js/mod_tsp_imageviewer.js');
$document->addStyleSheet('modules/mod_tsp_imageviewer/tmpl/css/mod_tsp_imageviewer.css');

// Step #4: include the template for display
require(JModuleHelper::getLayoutPath('mod_tsp_imageviewer'));
?>