<?php 
/*
 * TSP Image Viewer Joomla! module
 *
 * @package		TSP Image Viewer Joomla! module
 * @filename	default.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC - 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		default template
 * 
 */

defined('_JEXEC') or die('Restricted access'); // no direct access 

?>
<div id="TSP_IV_wrapper" class="container" style="width: <?php echo $viewer_width; ?>px; height: <?php echo $viewer_height; ?>px;">
	<div class="main_image" style="width: <?php echo $main_image_width; ?>px;">
		<?php 
		
		foreach ($all_projects as $aproject) : 
		
			$hide = 'visibility: hidden;';
			
			if ((string)$default_project->attributes()->id == (string)$aproject->attributes()->id):
				$hide = '';
			endif;
		?>
		
			<div id="image_preview" class="image<?php echo $aproject->attributes()->id;?>" style="<?php echo $hide;?> width: 100%; height: 100%;
				background-image: url(<?php echo $aproject->image; ?>);"></div>
		<?php endforeach; ?>
		<div class="desc" style="display: block; ">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block" style="opacity: 0.65; margin-bottom: 0px; ">
					<p class="title"><?php echo (string)$default_project->attributes()->title; ?></p>
					<small><?php echo (string)$default_project->attributes()->date; ?></small>
					<p class="proj_desc"><?php echo $default_project->description; ?></p>
			</div>
		</div>
	</div>
	<div class="image_thumb" style="width: <?php echo $project_list_width; ?>px;">
		<ul>
			<?php 
			
			foreach ($all_projects as $aproject) : 
				
				$class = '';
				
				if ((string)$default_project->attributes()->id == (string)$aproject->attributes()->id):
					$class = 'active';
				endif;
			?>
				<li id="<?php echo $aproject->attributes()->id;?>" class="<?php echo $class; ?>">
					<a href="#"> 
						<img width="<?php echo $thumb_width_height;?>" 
							height="<?php echo $thumb_width_height;?>" 
							src="<?php echo $aproject->thumbnail; ?>" 
							alt="<?php echo (string)$aproject->attributes()->title; ?>"></a>
					<div class="block">
						<p class="title"><?php echo (string)$aproject->attributes()->title; ?></p>
						<small><?php echo (string)$aproject->attributes()->date; ?></small>
						<p class="proj_desc"><?php echo $aproject->description; ?></p>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>