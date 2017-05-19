<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class VueExamplePlugin
 * @package Grav\Plugin
 */
class VueExamplePlugin extends Plugin {
	/**
	 * @return array
	 *
	 * The getSubscribedEvents() gives the core a list of events
	 *     that the plugin wants to listen to. The key of each
	 *     array section is the event that the plugin listens to
	 *     and the value (in the form of an array) contains the
	 *     callable (or function) as well as the priority. The
	 *     higher the number the higher the priority.
	 */
	public static function getSubscribedEvents() {
		return [
			'onPluginsInitialized' => [ 'onPluginsInitialized', 0 ]
		];
	}

	/**
	 * Initialize the plugin
	 */
	public function onPluginsInitialized() {
		// Don't proceed if we are in the admin plugin
		if ( $this->isAdmin() ) {
			return;
		}

		// Enable the main event we are interested in
		$this->enable( [
			'onPageContentProcessed' => [ 'onPageContentProcessed', 0 ],
			'onAssetsInitialized'    => [ 'onAssetsInitialized', 0 ],
		] );
	}

	/**
	 * Programmatically add a vue element, so you don't need to modify your theme twig
	 * what you should know is you should include {{ page.content }} in your page twig at least, cuz onPageContentProcessed change the page.content,
	 * if you don't include it, absolutely vue can't find the anchor.
	 */
	public function onPageContentProcessed() {
		// Get a variable from the plugin configuration
		$content   = $this->grav['page']->getRawContent();
		$vueAnchor = '<div id="grav-plugin-vue-example-app"></div>';
		$this->grav['page']->setRawContent( $vueAnchor . $content );
	}

	public function onAssetsInitialized() {
		/**
		 * Attention: Grav can only handle the duplicate JS files( md5 check or Just path string? ),but not the window.GlOBLE_NAME itself;
		 * so you should take care of the exposed "Vue" by yourself. or bundle it with your code in a closure.
		 * if you have multiple plugins share one vue.js file, the better place to add it is in the site configuration.
		 */
//		$this->grav['assets']->addJs( 'https://unpkg.com/vue@2.3.3/dist/vue.js'); // for develop
		$this->grav['assets']->addJs( 'https://unpkg.com/vue@2.3.3/dist/vue.min.js'); // for production
		$this->grav['assets']->addJs( 'plugin://' . $this->name . '/dist/bundle.js');
		$this->grav['assets']->addCss( 'plugin://' . $this->name . '/dist/bundle.css');
	}
}
