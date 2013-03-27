<?php
	/**
	 * Elgg Poll post widget view
	 *  
	 * @package Elggpoll
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author John Mellberg
	 * @copyright John Mellberg 2009
	 * 
	 * @uses $vars['entity'] Optionally, the poll post to view
	 */

	elgg_load_library('elgg:polls');
	
	$widget = elgg_extract("entity", $vars);
	
	//get the num of polls the user want to display
	$limit = (int) $widget->limit;
		
	//if no number has been set, default to 5
	if($limit < 1){
		$limit = 5;
	}
	
	// the page owner
	$options = array(
		'type' => 'object',
		'subtype'=>'poll',
		'limit' => $limit,
	);
	
	switch($widget->context){
		case "groups":
			$options["container_guid"] = $widget->getOwnerGUID();
			break;
		case "index":
			if($user_guid = elgg_get_logged_in_user_guid()){
				$options["wheres"] = array("(e.owner_guid <> " . $user_guid . ")");
			}
			break;
		default:
			$options["wheres"] = array("(e.owner_guid <> " . $widget->getOwnerGUID() . ")");
			break;
	}
	
	if ($polls = elgg_get_entities($options)){	
		foreach($polls as $poll) {
			echo elgg_view("polls/widget", array('entity' => $poll));
		}	
	} else {
		echo "<p>" . elgg_echo("polls:widget:nonefound") . "</p>";	
	}
