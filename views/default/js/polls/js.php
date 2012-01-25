elgg.provide('elgg.polls');

elgg.polls.init = function() {
	$('#poll-show-link').live('click',elgg.polls.toggleResults);
	$('#poll-vote-button').live('click',function(e) {
		e.preventDefault();
		// prevent multiple clicks
		$('#poll-vote-button').attr("disabled", "disabled");
		// submit the vote and display the response when it arrives 	 
	    elgg.action('action/polls/vote', {data: $('#poll-vote-form').serialize(),
			success : function(response) {
			        	$('#poll-container').html(response.result);
			        }
	        });
    });
};

elgg.polls.toggleResults = function() {
	if ($("#poll_vote_form_container").is(":visible")) {
		$("#poll_vote_form_container").hide();
		$("#resultsDiv").show();
		$("#poll-show-link").html("<?php echo elgg_echo('polls:show_poll'); ?>");
	} else {
		$("#poll_vote_form_container").show();
		$("#resultsDiv").hide();
		$("#poll-show-link").html("<?php echo elgg_echo('polls:show_results'); ?>");
	}	
}

elgg.register_hook_handler('init', 'system', elgg.polls.init);
