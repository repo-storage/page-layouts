<?php

/**
 * A simple page layout plugin for Pico
 *
 * @package Pico
 * @subpackage PrePacked
 * @since version 0.1
 * @author Shawn Sandy
 * @link http://www.shawnsandy.com
 * @license http://opensource.org/licenses/MIT
 */
class Page_Layout {

    private $layout = 'layout_error.html',
            $meta_info = array();

    public function plugins_loaded() {

    }

    public function request_url(&$url) {

    }

    public function before_load_content(&$file) {

    }

    public function after_load_content(&$file, &$content) {

    }

    public function before_404_load_content(&$file) {

    }

    public function after_404_load_content(&$file, &$content) {

    }

    public function config_loaded(&$settings) {

    }

    public function before_read_file_meta(&$headers) {

    }

    public function file_meta(&$meta) {

    }

    public function content_parsed(&$content) {

    }

    public function get_page_data(&$data, $page_meta) {

        //var_dump($page_meta);
    }

    public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page) {

    }

    public function before_twig_register() {

    }

    public function before_render(&$twig_vars, &$twig) {

    }

    public function after_render(&$output) {

    }

    public function get_layout($layout = '',$twig_vars = array()) {

        if(empty($twig_vars))
            return;

        if (!empty($layout) AND file_exists($twig_vars['theme_dir'] . '/' . $layout)):
            $this->layout = $layout;
        endif;

    }

}
