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

	public function shout() {

		$tagdata = $this->EE->TMPL->tagdata;

		return "<strong>" . $tagdata . "</strong>";

	}
	

}


/* End of file pi.eeci_demo.php */
/* Location: /system/expressionengine/third_party/eeci_demo/pi.eeci_demo.php */