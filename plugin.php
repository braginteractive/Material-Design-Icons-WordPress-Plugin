<?php
/*
Plugin Name: Material Design Icons
Plugin URI: http://braginteractive.com
Description: Use the Material Design icon set within WordPress. Icons can be inserted using either HTML or a shortcode.
Version: 0.0.1
Author: Brad Williams
Author URI: http://braginteractive.com
Author Email: info@braginteractive.com
Credits:
    Copyright (c) 2014, Austin Andrews (http://materialdesignicons.com/),
    with Reserved Font Name Material Design Icons.
    Copyright (c) 2014, Google (http://www.google.com/design/)
    uses the license at https://github.com/google/material-design-icons/blob/master/LICENSE

License:

  Copyright (C) 2015  Brad Williams

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

class MaterialDesignIcons {
    private static $instance;
    const VERSION = '0.0.1';

    private static function has_instance() {
        return isset(self::$instance) && self::$instance != null;
    }

    public static function get_instance() {
        if (!self::has_instance())
            self::$instance = new MaterialDesignIcons;
        return self::$instance;
    }

    public static function setup() {
        self::get_instance();
    }

    protected function __construct() {
        if (!self::has_instance()) {
            add_action('init', array(&$this, 'init'));
        }
    }

    public function init() {
        add_action('wp_enqueue_scripts', array(&$this, 'register_plugin_styles'));
        add_shortcode('mdi-icon', array($this, 'setup_shortcode'));
        add_filter('widget_text', 'do_shortcode');
    }

    public function register_plugin_styles() {
        global $wp_styles;
        wp_enqueue_style('material-design-icon-styles', plugins_url('bower_components/mdi/css/materialdesignicons.min.css', __FILE__), array(), self::VERSION, 'all');
    }

    public function setup_shortcode($params) {
        extract(shortcode_atts(array(
                    'name'  => '',
                ), $params));

        return '<i class="mdi mdi-'. $params['name'] . '">&nbsp;</i>';
    }
}

MaterialDesignIcons::setup();
