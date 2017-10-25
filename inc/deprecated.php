<?php
defined( 'ABSPATH' ) || die( 'Cheatin&#8217; uh?' );

/*
 * Deprecated functions come here to die.
 */


if ( ! function_exists( 'get_rocket_pages_not_cached' ) ) :
	/**
	 * Get all pages we don't cache (string)
	 *
	 * @since 1.0
	 * @deprecated 2.0
	 * @deprecated Use get_rocket_cache_reject_uri()
	 */
	function get_rocket_pages_not_cached() {
		_deprecated_function( __FUNCTION__, '2.0', 'get_rocket_cache_reject_uri()' );
		return get_rocket_cache_reject_uri();
	}
endif;

if ( ! function_exists( 'get_rocket_cookies_not_cached' ) ) :
	/**
	 * Get all cookie names we don't cache (string)
	 *
	 * @since 1.0
	 * @deprecated 2.0
	 * @deprecated Use get_rocket_cache_reject_cookies()
	 */
	function get_rocket_cookies_not_cached() {
		_deprecated_function( __FUNCTION__, '2.0', 'get_rocket_cache_reject_cookies()' );
		return get_rocket_cache_reject_cookies();
	}
endif;

if ( ! function_exists( 'get_rocket_cron_interval' ) ) :
	/**
	 * Get the interval task cron purge in seconds
	 * This setting can be changed from the options page of the plugin
	 *
	 * @since 1.0
	 * @deprecated 2.0
	 * @deprecated Use get_rocket_purge_cron_interval()
	 */
	function get_rocket_cron_interval() {
		_deprecated_function( __FUNCTION__, '2.0', 'get_rocket_purge_cron_interval()' );
		return get_rocket_purge_cron_interval();
	}
endif;

if ( ! function_exists( 'run_rocket_bot_for_all_langs' ) ) :
	/**
	 * Launch the Cache Preload Robot for all active langs
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use run_rocket_bot()
	 */
	function run_rocket_bot_for_all_langs() {
		_deprecated_function( __FUNCTION__, '2.2', 'run_rocket_bot()' );
		return run_rocket_bot( 'cache-preload' );
	}
endif;

if ( ! function_exists( 'run_rocket_bot_for_selected_lang' ) ) :
	/**
	 * Launch the Cache Preload Robot for a selected lang
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use run_rocket_bot()
	 *
	 * @param string $lang Language to preload.
	 */
	function run_rocket_bot_for_selected_lang( $lang ) {
		_deprecated_function( __FUNCTION__, '2.2', 'run_rocket_bot()' );
		return run_rocket_bot( 'cache-preload', $lang );
	}
endif;

if ( ! function_exists( 'get_rocket_home_url' ) ) :
	/**
	 * Returns a full and correct home_url without subdmain, see rocket_get_domain()
	 *
	 * @since 1.0
	 * @deprecated 2.2
	 *
	 * @param string $url URL to format.
	 */
	function get_rocket_home_url( $url = null ) {
		_deprecated_function( __FUNCTION__, '2.2' );
		return false;
	}
	endif;

if ( ! function_exists( 'rocket_has_translation_plugin_active' ) ) :
	/**
	 * Check if a translation plugin is activated (WPML or qTranslate)
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use rocket_has_i18n()
	 */
	function rocket_has_translation_plugin_active() {
		_deprecated_function( __FUNCTION__, '2.2', 'rocket_has_i18n()' );
		return rocket_has_i18n();
	}
	endif;

if ( ! function_exists( 'get_rocket_all_active_langs' ) ) :
	/**
	 * Get URI all of active languages
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use get_rocket_i18n_code()
	 */
	function get_rocket_all_active_langs() {
		_deprecated_function( __FUNCTION__, '2.2', 'get_rocket_i18n_code()' );
		return get_rocket_i18n_code();
	}
endif;

if ( ! function_exists( 'get_rocket_all_active_langs_uri' ) ) :
	/**
	 * Get URI all of active languages
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use get_rocket_i18n_uri()
	 */
	function get_rocket_all_active_langs_uri() {
		_deprecated_function( __FUNCTION__, '2.2', 'get_rocket_i18n_uri()' );
		return get_rocket_i18n_uri();
	}
endif;

if ( ! function_exists( 'get_rocket_parse_url_for_lang' ) ) :
	/**
	 * Extract and return host, path and scheme for a specific lang
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use get_rocket_parse_url()
	 *
	 * @param string $lang Language to get.
	 */
	function get_rocket_parse_url_for_lang( $lang ) {
		_deprecated_function( __FUNCTION__, '2.2', 'get_rocket_parse_url()' );
		return get_rocket_parse_url( get_rocket_i18n_home_url( $lang ) );
	}
endif;

if ( ! function_exists( 'rocket_clean_domain_for_selected_lang' ) ) :
	/**
	 * Remove only cache files of selected lang
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use rocket_clean_domain()
	 *
	 * @param string $lang Language to clean.
	 */
	function rocket_clean_domain_for_selected_lang( $lang ) {
		_deprecated_function( __FUNCTION__, '2.2', 'rocket_clean_domain()' );
		return rocket_clean_domain( $lang );
	}
endif;

if ( ! function_exists( 'rocket_clean_domain_for_all_langs' ) ) :
	/**
	 * Remove cache files of all langs
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use rocket_clean_domain()
	 */
	function rocket_clean_domain_for_all_langs() {
		_deprecated_function( __FUNCTION__, '2.2', 'rocket_clean_domain()' );
		return rocket_clean_domain();
	}
endif;

if ( ! function_exists( 'get_rocket_langs_to_preserve' ) ) :
	/**
	 * Get folder paths to preserve languages ​​when purging a domain
	 * This function is required when the domains of languages (​​other than the default) are managed by subfolders
	 * By default, when you clear the cache of the french website with the domain example.com, all subdirectory like /en/ and /de/ are deleted.
	 * But, if you have a domain for your english and german websites with example.com/en/ and example.com/de/, you want to keep the /en/ and /de/ directory when the french domain is cleared.
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use get_rocket_i18n_to_preserve()
	 *
	 * @param string $current_lang Language to preserve.
	 */
	function get_rocket_langs_to_preserve( $current_lang ) {
		_deprecated_function( __FUNCTION__, '2.2', 'get_rocket_i18n_to_preserve()' );
		return get_rocket_i18n_to_preserve( $current_lang );
	}
endif;

if ( ! function_exists( 'get_rocket_subdomains_langs' ) ) :
	/**
	 * Get subdomains URL of all languages
	 *
	 * @since 2.0
	 * @deprecated 2.2
	 * @deprecated Use get_rocket_i18n_subdomains()
	 */
	function get_rocket_subdomains_langs() {
		_deprecated_function( __FUNCTION__, '2.2', 'get_rocket_i18n_subdomains()' );
		return get_rocket_i18n_subdomains();
	}
endif;

if ( ! function_exists( 'rocket_replace_domain_mapping_siteurl' ) ) :
	/**
	 * Get Domain Mapping host based on original URL
	 *
	 * @since 2.2
	 * @deprecated 2.6.5
	 *
	 * @param string $url Original URL.
	 */
	function rocket_replace_domain_mapping_siteurl( $url = null ) {
		_deprecated_function( __FUNCTION__, '2.6.5' );
		return false;
	}
endif;

if ( ! function_exists( 'rocket_sanitize_cookie' ) ) :
	/**
	 * Used to sanitize values of the "Don't cache pages that use the following cookies" option.
	 *
	 * @since 2.6.4
	 * @deprecated 2.7
	 * @deprecated Use rocket_sanitize_key()
	 *
	 * @param string $cookie Cookie value to sanitize.
	 */
	function rocket_sanitize_cookie( $cookie ) {
		_deprecated_function( __FUNCTION__, '2.7', 'rocket_sanitize_key()' );
		return rocket_sanitize_key( $cookie );
	}
endif;

if ( ! function_exists( 'set_rocket_cloudflare_async' ) ) :
	/**
	 * Used to set the CloudFlare Rocket Loader value
	 *
	 * @since 2.5
	 * @deprecated 2.8.16
	 * @deprecated Use set_rocket_cloudflare_rocket_loader()
	 *
	 * @param string $cf_rocket_loader Value for the Rocket Loader.
	 */
	function set_rocket_cloudflare_async( $cf_rocket_loader ) {
		_deprecated_function( __FUNCTION__, '2.8.16', 'set_rocket_cloudflare_rocket_loader()' );
		return set_rocket_cloudflare_rocket_loader( $cf_rocket_loader );
	}
endif;

if ( ! function_exists( 'set_rocket_cloudflare_cache_lvl' ) ) :
	/**
	 * Used to set the CloudFlare cache level
	 *
	 * @since 2.5
	 * @deprecated 2.8.16
	 * @deprecated Use set_rocket_cloudflare_cache_level()
	 *
	 * @param string $cf_cache_level Value for the cache level.
	 */
	function set_rocket_cloudflare_cache_lvl( $cf_cache_level ) {
		_deprecated_function( __FUNCTION__, '2.8.16', 'set_rocket_cloudflare_cache_level()' );
		return set_rocket_cloudflare_cache_level( $cf_cache_level );
	}
endif;

if ( ! function_exists( 'rocket_delete_script_wp_version' ) ) :
	/**
	 * Used to remove version query string in CSS/JS URL
	 *
	 * @since 1.1.6
	 * @deprecated 2.9
	 * @deprecated Use rocket_browser_cache_busting()
	 *
	 * @param string $src Source URL for the JS/CSS.
	 */
	function rocket_delete_script_wp_version( $src ) {
		_deprecated_function( __FUNCTION__, '2.9', 'rocket_browser_cache_busting()' );
		return rocket_browser_cache_busting( $src );
	}
endif;

if ( ! function_exists( 'rocket_exclude_deferred_js' ) ) :
	/**
	 * Used to remove deferred JS files from the  buffer
	 *
	 * @since 1.1.0
	 * @deprecated 2.10
	 * @deprecated Use rocket_insert_deferred_js()
	 *
	 * @param string $buffer HTML code.
	 */
	function rocket_exclude_deferred_js( $buffer ) {
		_deprecated_function( __FUNCTION__, '2.10', 'rocket_insert_deferred_js()' );
		return rocket_insert_deferred_js( $buffer );
	}
endif;

if ( ! function_exists( 'is_rocket_cache_feed' ) ) :
	/**
	 * Check if we need to cache the feeds of the website
	 *
	 * @since 2.7
	 * @deprecated 2.10
	 *
	 * @return bool True if option is activated
	 */
	function is_rocket_cache_feed() {
		_deprecated_function( __FUNCTION__, '2.10' );
		return get_rocket_option( 'cache_feed', false );
	}
endif;

if ( ! function_exists( 'rocket_exclude_js_buddypress' ) ) :
	/**
	 * Excludes BuddyPress's plupload from JS minification
	 *
	 * Exclude it to prevent an error after minification/concatenation
	 * preventing the image upload from working correctly
	 *
	 * @since 2.8.10
	 * @deprecated 2.10.7
	 * @author Remy Perona
	 *
	 * @param Array $excluded_handle An array of JS handles enqueued in WordPress.
	 * @return Array the updated array of handles
	 */
	function rocket_exclude_js_buddypress( $excluded_handle ) {
		_deprecated_function( __FUNCTION__, '2.10.7' );
		return $excluded_handle;
	}
endif;

if ( ! function_exists( 'get_rocket_logins_exclude_pages' ) ) :
	/**
	 * Get hide login pages to automatically exclude them to the cache.
	 *
	 * @since 2.6
	 * @deprecated 2.11
	 *
	 * @return array $urls
	 */
	function get_rocket_logins_exclude_pages() {
		_deprecated_function( __FUNCTION__, '2.11' );
		return array();
	}
endif;

if ( ! function_exists( 'get_rocket_ecommerce_exclude_pages' ) ) :
	/**
	 * Get cart & checkout path with their translations to automatically exclude them to the cache.
	 *
	 * @since 2.4
	 * @deprecated 2.11
	 *
	 * @return array $urls
	 */
	function get_rocket_ecommerce_exclude_pages() {
		_deprecated_function( __FUNCTION__, '2.11' );
		return array();
	}
endif;

/**
 * Get list of JS files to deferred.
 *
 * @since 2.6
 * @deprecated 2.11
 *
 * @return array List of JS files.
 */
function get_rocket_deferred_js_files() {
	_deprecated_function( __FUNCTION__, '2.11' );
	/**
	 * Filter list of Deferred JavaScript files
	 *
	 * @since 1.1.0
	 *
	 * @param array List of Deferred JavaScript files
	 */
	$deferred_js_files = apply_filters( 'rocket_minify_deferred_js', get_rocket_option( 'deferred_js_files', array() ) );

	return $deferred_js_files;
}

/**
 * Add defer attribute to script that should be deferred
 *
 * @since 2.10 Use defer attribute instead of labJS
 * @since 1.1.0
 * @deprecated 2.11
 *
 * @param string $buffer HTML content in the buffer.
 * @return string Updated HTML content
 */
function rocket_insert_deferred_js( $buffer ) {
	_deprecated_function( __FUNCTION__, '2.11', 'rocket_defer_js()' );
	if ( get_rocket_option( 'defer_all_js' ) ) {
		return $buffer;
	}

	// Get all JS files with this regex.
	preg_match_all( '#<script.*src=[\'|"]([^\'|"]+\.js?.+)[\'|"].*></script>#iU', $buffer, $tags_match );

	if ( ! isset( $tags_match[0] ) ) {
		return $buffer;
	}

	foreach ( $tags_match[0] as $i => $tag ) {
		// Strip query args.
		$url = strtok( $tags_match[1][ $i ] , '?' );

		$deferred_js_files = array_flip( get_rocket_deferred_js_files() );

		// Check if this file should be deferred.
		if ( isset( $deferred_js_files[ $url ] ) ) {
			$deferred_tag = str_replace( '></script>', ' defer></script>', $tag );
			$buffer = str_replace( $tag, $deferred_tag, $buffer );
		}
	}

	return $buffer;
}

/**
 * Used to display the defered module on settings form
 *
 * @since 1.1.0
 * @deprecated 2.11
 */
function rocket_defered_module() {
	_deprecated_function( __FUNCTION__, '2.11' );
	?>
	<fieldset>
	<legend class="screen-reader-text"><span><?php _e( '<strong>JS</strong> files with Deferred Loading JavaScript', 'rocket' ); ?></span></legend>

	<div id="rkt-drop-deferred" class="rkt-module rkt-module-drop">

		<?php
		$deferred_js_files = get_rocket_option( 'deferred_js_files' );

		if ( $deferred_js_files ) {

			foreach ( $deferred_js_files as $k => $_url ) {
			?>

				<p class="rkt-module-drag">
					<span class="dashicons dashicons-sort rkt-module-move hide-if-no-js"></span>

					<input style="width: 32em" type="text" placeholder="http://" class="deferred_js regular-text" name="wp_rocket_settings[deferred_js_files][<?php echo $k; ?>]" value="<?php echo esc_url( $_url ); ?>" />

					<span class="dashicons dashicons-no rkt-module-remove hide-if-no-js"></span>
				</p>
				<!-- .rkt-module-drag -->

			<?php
			}
		} else {
			// If no files yet, use this template inside #rkt-drop-deferred.
			?>

			<p class="rkt-module-drag">
				<span class="dashicons dashicons-sort rkt-module-move hide-if-no-js"></span>

				<input style="width: 32em" type="text" placeholder="http://" class="deferred_js regular-text" name="wp_rocket_settings[deferred_js_files][0]" value="" />
			</p>
			<!-- .rkt-module-drag -->

				<?php } ?>

	</div>
	<!-- .rkt-drop-deferred -->

	
	<div class="rkt-module-model hide-if-js">

		<p class="rkt-module-drag">
			<span class="dashicons dashicons-sort rkt-module-move hide-if-no-js"></span>

			<input style="width: 32em" type="text" placeholder="http://" class="deferred_js regular-text" name="wp_rocket_settings[deferred_js_files][]" value="" />

			<span class="dashicons dashicons-no rkt-module-remove hide-if-no-js"></span>
		</p>
		<!-- .rkt-module-drag -->
	</div>
	<!-- .rkt-model-deferred-->

	<p><a href="javascript:void(0)" class="rkt-module-clone hide-if-no-js button-secondary"><?php _e( 'Add URL', 'rocket' ); ?></a></p>

<?php
}

/**
 * Force the minification to create only 1 file.
 *
 * @since 2.6
 * @deprecated 2.11
 *
 * @param int    $length maximum URL length.
 * @param string $ext file extension.
 * @return int Updated length
 */
function rocket_force_minify_combine_all( $length, $ext ) {
	_deprecated_function( __FUNCTION__, '2.11' );
	if ( 'css' === $ext && get_rocket_option( 'minify_css_combine_all', false ) ) {
		$length = PHP_INT_MAX;
	}

	if ( 'js' === $ext && get_rocket_option( 'minify_js_combine_all', false ) ) {
		$length = PHP_INT_MAX;
	}

	return $length;
}

/**
 * Add some CSS to display the dismiss cross
 *
 * @since 1.1.10
 * @deprecated 2.11
 */
function rocket_admin_print_styles() {
	_deprecated_function( __FUNCTION__, '2.11' );
}
