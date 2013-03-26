<?php
	/**
	 * Elgg Polls plugin
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 */
	
	elgg_load_library('elgg:polls');
	
	$widget = elgg_extract("entity", $vars);
	
	//get the num of polls the user want to display
	$limit = (int) $widget->limit;
	
	//if no number has been set, default to 3
	if($limit < 1) {
		$limit = 3;
	}
	
	//the page owner
	$owner = $widget->getOwnerEntity();
	
	$options = array(
		'type' => 'object',
		'subtype' => 'poll',
		'container_guid' => $owner->getGUID(),
		'limit' => $limit
	);
	
	echo '<h3 class="poll-widget-title">' . elgg_echo('polls:widget:think', array($owner->name)) . "</h3>";
	
	if ($polls = elgg_get_entities($options)){
		foreach($polls as $pollpost) {
			echo elgg_view("polls/widget", array('entity' => $pollpost));
		}
	} else {
		echo "<p>" . elgg_echo('polls:widget:no_polls', array($owner->name)) . "</p>";
	}
