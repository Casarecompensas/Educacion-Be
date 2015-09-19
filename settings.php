<?php

/*
 * @author    Shaun Daubney
 * @package   theme_educacionbe
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Basic Heading
    $name = 'theme_educacionbe/basicheading';
    $heading = get_string('basicheading', 'theme_educacionbe');
    $information = get_string('basicheadingdesc', 'theme_educacionbe');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Logo file setting
	$name = 'theme_educacionbe/logo';
	$title = get_string('logo','theme_educacionbe');
	$description = get_string('logodesc', 'theme_educacionbe');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);	

	// Hide Menu
	$name = 'theme_aardvark/hidemenu';
	$title = get_string('hidemenu','theme_educacionbe');
	$description = get_string('hidemenudesc', 'theme_educacionbe');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Email url setting
	$name = 'theme_educacionbe/emailurl';
	$title = get_string('emailurl','theme_educacionbe');
	$description = get_string('emailurldesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Custom CSS file
	$name = 'theme_educacionbe/customcss';
	$title = get_string('customcss','theme_educacionbe');
	$description = get_string('customcssdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Frontpage Heading
    $name = 'theme_educacionbe/frontpageheading';
    $heading = get_string('frontpageheading', 'theme_educacionbe');
    $information = get_string('frontpageheadingdesc', 'theme_educacionbe');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

	// Title Date setting
	$name = 'theme_educacionbe/titledate';
	$title = get_string('titledate','theme_educacionbe');
	$description = get_string('titledatedesc', 'theme_educacionbe');
	$default = 1;
	$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// General Alert setting
	$name = 'theme_educacionbe/generalalert';
	$title = get_string('generalalert','theme_educacionbe');
	$description = get_string('generalalertdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Snow Alert setting
	$name = 'theme_educacionbe/snowalert';
	$title = get_string('snowalert','theme_educacionbe');
	$description = get_string('snowalertdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

    // Colour Heading
    $name = 'theme_educacionbe/colourheading';
    $heading = get_string('colourheading', 'theme_educacionbe');
    $information = get_string('colourheadingdesc', 'theme_educacionbe');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Background colour setting
	$name = 'theme_educacionbe/backcolor';
	$title = get_string('backcolor','theme_educacionbe');
	$description = get_string('backcolordesc', 'theme_educacionbe');
	$default = '#fafafa';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);

	// Graphic Wrap (Background Image)
	$name = 'theme_educacionbe/backimage';
	$title=get_string('backimage','theme_educacionbe');
	$description = get_string('backimagedesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

	// Graphic Wrap (Background Position)
	$name = 'theme_educacionbe/backposition';
	$title = get_string('backposition','theme_educacionbe');
	$description = get_string('backpositiondesc', 'theme_educacionbe');
	$default = 'no-repeat';
	$choices = array('no-repeat'=>get_string('backpositioncentred','theme_educacionbe'), 'no-repeat fixed'=>get_string('backpositionfixed','theme_educacionbe'), 'repeat'=>get_string('backpositiontiled','theme_educacionbe'), 'repeat-x'=>get_string('backpositionrepeat','theme_educacionbe'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Menu hover background colour setting
	$name = 'theme_educacionbe/menuhovercolor';
	$title = get_string('menuhovercolor','theme_educacionbe');
	$description = get_string('menuhovercolordesc', 'theme_educacionbe');
	$default = '#f42941';
	$previewconfig = NULL;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$settings->add($setting);	
	
	// Footer Options Heading
    $name = 'theme_educacionbe/footeroptheading';
    $heading = get_string('footeroptheading', 'theme_educacionbe');
    $information = get_string('footeroptdesc', 'theme_educacionbe');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Copyright setting
	$name = 'theme_educacionbe/copyright';
	$title = get_string('copyright','theme_educacionbe');
	$description = get_string('copyrightdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// CEOP
	$name = 'theme_educacionbe/ceop';
	$title = get_string('ceop','theme_educacionbe');
	$description = get_string('ceopdesc', 'theme_educacionbe');
	$default = '';
	$choices = array(''=>get_string('ceopnone','theme_educacionbe'), 'http://www.thinkuknow.org.au/site/report.asp'=>get_string('ceopaus','theme_educacionbe'), 'http://www.ceop.police.uk/report-abuse/'=>get_string('ceopuk','theme_educacionbe'));
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$settings->add($setting);

	// Disclaimer setting
	$name = 'theme_educacionbe/disclaimer';
	$title = get_string('disclaimer','theme_educacionbe');
	$description = get_string('disclaimerdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
	$settings->add($setting);	

	// Social Icons Heading
    $name = 'theme_educacionbe/socialiconsheading';
    $heading = get_string('socialiconsheading', 'theme_educacionbe');
    $information = get_string('socialiconsheadingdesc', 'theme_educacionbe');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
	// Website url setting
	$name = 'theme_educacionbe/website';
	$title = get_string('website','theme_educacionbe');
	$description = get_string('websitedesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Facebook url setting
	$name = 'theme_educacionbe/facebook';
	$title = get_string('facebook','theme_educacionbe');
	$description = get_string('facebookdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Twitter url setting
	$name = 'theme_aardvark/twitter';
	$title = get_string('twitter','theme_educacionbe');
	$description = get_string('twitterdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Google+ url setting
	$name = 'theme_educacionbe/googleplus';
	$title = get_string('googleplus','theme_educacionbe');
	$description = get_string('googleplusdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Flickr url setting
	$name = 'theme_educacionbe/flickr';
	$title = get_string('flickr','theme_educacionbe');
	$description = get_string('flickrdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Pinterest url setting
	$name = 'theme_educacionbe/pinterest';
	$title = get_string('pinterest','theme_educacionbe');
	$description = get_string('pinterestdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Instagram url setting
	$name = 'theme_educacionbe/instagram';
	$title = get_string('instagram','theme_educacionbe');
	$description = get_string('instagramdesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// LinkedIn url setting
	$name = 'theme_educacionbe/linkedin';
	$title = get_string('linkedin','theme_educacionbe');
	$description = get_string('linkedindesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);
	
	// Wikipedia url setting
	$name = 'theme_educacionbe/wikipedia';
	$title = get_string('wikipedia','theme_educacionbe');
	$description = get_string('wikipediadesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// YouTube url setting
	$name = 'theme_educacionbe/youtube';
	$title = get_string('youtube','theme_educacionbe');
	$description = get_string('youtubedesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Apple url setting
	$name = 'theme_educacionbe/apple';
	$title = get_string('apple','theme_educacionbe');
	$description = get_string('appledesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

	// Android url setting
	$name = 'theme_educacionbe/android';
	$title = get_string('android','theme_educacionbe');
	$description = get_string('androiddesc', 'theme_educacionbe');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$settings->add($setting);

}

