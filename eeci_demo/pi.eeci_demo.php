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

	public function inflector() 
	{
		$this->EE->load->helper('inflector');

		$text = $this->EE->TMPL->fetch_param('text');
		$method = $this->EE->TMPL->fetch_param('method');

		$out = $text;

		switch ($method) 
		{
			case 'singluar':
				$out = singular($text);
				break;

			case 'plural':
				$out = plural($text);
				break;
			
			case 'camel':
				$out = camelize($text);
				break;

			case 'underscore':
				$out = underscore($text);
				break;

			case 'human':
				$out = humanize($text);
				break;

		}

		return $out;
	}
	
}


/* End of file pi.eeci_demo.php */
/* Location: /system/expressionengine/third_party/eeci_demo/pi.eeci_demo.php */