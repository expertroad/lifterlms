<?php
/**
 * @author 		codeBOX
 * @category 	Admin
 * @package 	LifterLMS/Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function get_course( $the_course = false, $args = array() ) {
	return LLMS()->course_factory->get_course( $the_course, $args );
}

function get_lesson( $the_lesson = false, $args = array() ) {
	return LLMS()->course_factory->get_lesson( $the_lesson, $args );
}