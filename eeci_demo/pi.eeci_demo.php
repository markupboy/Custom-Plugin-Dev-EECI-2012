<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * EECI Demo Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Blake Walters
 * @link		http://markupboy.com
 */

$plugin_info = array(
	'pi_name'		=> 'EECI Demo',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Blake Walters',
	'pi_author_url'	=> 'http://markupboy.com',
	'pi_description'=> 'A demo plugin for EECI 2012'
);


class Eeci_demo {

	public $return_data;
   
	public function __construct()
	{
		$this->EE =& get_instance();
	}

	public function feed_info() {

		$tagdata = $this->EE->TMPL->tagdata;

		$variables = array(
			array(
				'title' => 'My Feed Title',
				'publish_date' => date('F j, Y'),
				'content' => '<p>Lorem ipsum dolor sit amet.</p>'
			),
			array(
				'title' => 'Another Title',
				'publish_date' => date('F j, Y'),
				'content' => '<p>Sed do eiusmod tempor incididunt ut labore.</p>'
			),
			array(
				'title' => 'The Last Title',
				'publish_date' => date('F j, Y'),
				'content' => '<p>Sunt in culpa qui officia deserunt mollit anim.</p>'
			)
		);

		return $this->EE->TMPL->parse_variables($tagdata, $variables);

	}
	
}


/* End of file pi.eeci_demo.php */
/* Location: /system/expressionengine/third_party/eeci_demo/pi.eeci_demo.php */