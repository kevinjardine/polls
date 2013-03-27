<?php
	/**
	 * Individual poll view
	 *
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 *
	 */
	
	elgg_load_library('elgg:polls');
	
	$widget = elgg_extract("entity", $vars);
	
	$options = array(
		'type' => 'object',
		'subtype'=>'poll',
		'limit' => 1
	);
	
	switch($widget->context){
		case "index":
			if($user_guid = elgg_get_logged_in_user_guid()){
				$options["wheres"] = array("(e.owner_guid <> " . $user_guid . ")");
			}
			break;
		case "dashboard":
			$options["wheres"] = array("(e.owner_guid <> " . $widget->getOwnerGUID() . ")");
			break;
		default:
			$options["container_guid"] = $widget->getOwnerGUID();
			break;
	}
	
	if($polls = elgg_get_entities($options)){
	  $body = elgg_view('polls/poll_widget', array('entity' => $polls[0]));
	} else {
	  $body = elgg_echo('polls:widget:no_polls', array($widget->getOwnerEntity()->name));
	}
	
	echo $body;
