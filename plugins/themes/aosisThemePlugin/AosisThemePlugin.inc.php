<?php
/**
 * plugins/themes/aosisThemePlugin/AosisThemePlugin.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class AosisThemePlugin extends ThemePlugin {
	
	/**
	 * Load the custom styles for the theme
	 * @return null
	 */
	public function init() {
		$this->addStyle('stylesheet', 'styles/index.less');
	}

	/**
	 * Get the display name of this theme
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.aosisThemePlugin.pluginName');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.aosisThemePlugin.pluginDescription');
	}
}
?>