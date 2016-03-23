<?php

	// ADD REFERENCE TO EXTERNAL STYLESHEET
	function bartiksub_preprocess_html(&$variables) {
  		drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));

  		drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', 'external');
	} 