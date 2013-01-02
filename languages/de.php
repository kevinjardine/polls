<?php

	$german = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => "Umfrage",
            'polls:add' => "Neue Umfrage",
			'polls' => "Umfragen",
			'polls:votes' => "Stimme",
			'polls:user' => "%s's Umfrage",
			'polls:group_polls' => "Gruppen Umfragen",
			'polls:group_polls:listing:title' => "%s's Umfragen",
			'polls:user:friends' => "Freunde von %s's Umfragen",
			'polls:your' => "Meine Umfragen",
			'polls:not_me' => "%s's Umfragen",
			'polls:posttitle' => "%s's Umfragen: %s",
			'polls:friends' => "Umfragen von Freunden",
			'polls:not_me_friends' => "Umfragen von %s's Freunden",
			'polls:yourfriends' => "aktuellste Umfragen meiner Freunde",
			'polls:everyone' => "Alle Umfragen der Seite",
			'polls:read' => "Umfrage lesen",
			'polls:addpost' => "Umfrage anlegen",
			'polls:editpost' => "Umfrage %s editieren",
			'polls:edit' => "Umfrage editieren",
			'polls:text' => "Umfragentext",
			'polls:strapline' => "%s",			
			'item:object:poll' => 'Umfrage',
			'item:object:poll_choice' => "Antwortmöglichkeiten",
			'polls:question' => "Frage",
			'polls:responses' => "Antwortmöglichkeiten",
			'polls:results' => "[+] Ergebnisse anzeigen",
			'polls:show_results' => "Ergebnisse anzeigen",
			'polls:show_poll' => "Umfrage anzeigen",
			'polls:add_choice' => "Antwort hinzufügen",
			'polls:delete_choice' => "Antwort löschen",
			'polls:settings:group:title' => "Gruppenumfragen",
			'polls:settings:group_polls_default' => "ja, default ein",
			'polls:settings:group_polls_not_default' => "ja, default aus",
			'polls:settings:no' => "nein",
			'polls:settings:group_profile_display:title' => "Wenn Gruppenabfragen aktiviert sind, wo sollen sie im Gruppenprofile angezeigt werden?",
			'polls:settings:group_profile_display_option:left' => "links",
			'polls:settings:group_profile_display_option:right' => "rechts",
			'polls:settings:group_profile_display_option:none' => "nirgends",
			'polls:settings:group_access:title' => "Wenn Gruppenabfragen aktiviert sind, wer darf welche anlegen?",
			'polls:settings:group_access:admins' => "Gruppen Gründer und Admins",
			'polls:settings:group_access:members' => "JEdes Gruppenmitglied",
			'polls:settings:front_page:title' => "Admins können eine front page Umfrage anlegen (benötigt theme support)",
			'polls:none' => "Keine Umfragen gefunden.",
			'polls:permission_error' => "Sie haben keine Berechtigung die Umfrage zu editieren.",
			'polls:vote' => "Abstimmen",
			'polls:login' => "Bitte loggen Sie sich ein um an der Umfrage teilzunehmen",
			'group:polls:empty' => "Keine Umfragen",
			'polls:settings:site_access:title' => "Wer darf Umfragen für die ganze Seite (site-wide) anlegen?",
			'polls:settings:site_access:admins' => "Nur Admins",
			'polls:settings:site_access:all' => "Jeder angemeldete Benutzer",
			'polls:can_not_create' => "Sie haben nicht die Berechtigung Umfragen anzulegen",
			'polls:front_page_label' => "Diese Umfrage auf der Hauptseite (front-page) anzeigen.",
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "aktuellste Community Umfragen",
			'polls:latest_widget_description' => "Zeige die neuesten Umfragen an",
			'polls:my_widget_title' => "Deine Umfragen",
			'polls:my_widget_description' => "Dieses Widget zeigt Deine Umfragen an",
			'polls:widget:label:displaynum' => "Wieviele Umfragen möchtest Du anzeigen?",
			'polls:individual' => "aktuellste Umfrage",
			'poll_individual_group:widget:description' => "Zeige die aktuellste Umfrage der Gruppe an.",
			'poll_individual:widget:description' => "Zeige Deine aktuellste Umfrage an.",
			'polls:widget:no_polls' => "Es gibt noch keine Umfragen für %s.",
			'polls:widget:nonefound' => "Keine Umfragen gefunden.",
			'polls:widget:think' => "Sage %s was Du davon hältst.",
			'polls:enable_polls' => "Umfragen aktivieren",
			'polls:group_identifier' => "(in %s)",
			'polls:noun_response' => "Rückmeldung",
			'polls:noun_responses' => "Rückmeldungen",
	        'polls:settings:yes' => "ja",
			'polls:settings:no' => "nein",
			
         /**
	     * poll river
	     **/
	        'polls:settings:create_in_river:title' => "Zeige das Anlegen einer Umfrage in Aktivitäten",
			'polls:settings:vote_in_river:title' => "Zeige Umfrageergebnisse in Aktivitäten",
			'river:create:object:poll' => '%s hat die Umfrage %s angelegt',
			'river:vote:object:poll' => '%s hat an der Umfrage %s teilgenommen',
			'river:comment:object:poll' => '%s hat die Umfrage %s kommentiert',
		/**
		 * Status messages
		 */
	
			'polls:added' => "Deine Umfrage wurde angelegt.",
			'polls:edited' => "Deine Umfrage wurde gespeichert.",
			'polls:responded' => "Danke für deine Rückmeldung, Deine Antwort wurde gespeichert.",
			'polls:deleted' => "Deine Umfrage wurde gelöscht.",
			'polls:totalvotes' => "abgegebene Stimmen: ",
			'polls:voted' => "Deine Antwort wurde gespeichert. Danke für die Teilnahme an der Umfrage.",
			
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => "Deine Umfrage wurde nicht gespeichert. Bitte versuche es nochmal.",
			'polls:blank' => "Sorry: Du musst Frage und Antwortmöglichkeiten ausfüllen um eine Umfrage anzulegen.",
			'polls:novote' => "Sorry: Du musst eine Antwortmöglichkeit wählen.",
			'polls:notfound' => "Sorry: Die Umfrage konnte nicht gefunden werden.",
			'polls:nonefound' => "Es wurden keine Umfragen von %s gefunden.",
			'polls:notdeleted' => "Sorry: Die Umfrage konnte nicht gelöscht werden."
	);
					
	add_translation("de",$german);

?>