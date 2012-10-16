#Diving In: Practical Tips for Writing Custom Plugins

This repository serves as companion code to my talk [Diving In: Practical Tips for Writing Custom Plugins](http://mrkp.me/5j) at EECI 2012. All of the non-client specific code samples are contained in named branches in the repository.  The plugin file (`eeci_demo/pi.eeci_demo.php`) appears as it would exactly in your `third_party` folder in an EE installation and `index.html` contains the tags as they would be used in a template.

The branches match sections in "Section II: Getting it Written" as follows as well as the CI section toward the end of the presentation:

* Blank Plugin Templates - `master`
* The Simplest of Plugins - `simplest_plugins`
* Plugin Methods - `plugin_methods`
* Passing Parameters - `passing_parameters`
* Tag Pairs - `simple_tag_pairs`
* Complex Output - `tag_pairs`
* Returning Muliple Results - `returning_multiple_results`
* Nested Tag Pairs - `nested_tag_pairs`
* Using CI Libraries - `ci_library`
* Using CI Helpers - `ci_helper`

To see the code related to each section, use the built-in Github branch switcher or, once cloned locally, use the command `git checkout origin/branch_name` to view the code or `git checkout -b branch_name origin/branch_name` to work with the code.

The slides are available online at [Speaker Deck](https://speakerdeck.com/u/markupboy/p/diving-in-practical-tips-for-custom-plugin-development).

Additional resources from my talk:

* Ellis Lab's guides for [general development](http://expressionengine.com/user_guide/development/), [plugin development](http://expressionengine.com/user_guide/development/plugins.html), and [general style and syntax guidelines](http://expressionengine.com/user_guide/development/guidelines/general.html)
* CodeIgniter's [user guide](https://speakerdeck.com/u/markupboy/p/diving-in-practical-tips-for-custom-plugin-development) (for loading libraries and helpers)
* Greg Aker's posts on [in-template php performance](http://www.gregaker.net/2010/oct/28/with-great-power-comes-great-responsibility/) and the [session cache for plugins](http://www.gregaker.net/2011/jun/14/session-cache-in-expressionengine/)



