<?php
	// get data for next 4 events, (time, type, title, campus, room, address, fb_id, unione_url)
	$get_next_four_query = 'SELECT EVENT_DATA.EVENT_TIME, EVENT_TYPE.EVENT_TYPE_DESCRIPTION, EVENT_DATA.EVENT_TITLE, EVENT_LOCATION.CAMPUS, EVENT_LOCATION.ROOM, EVENT_LOCATION.ADDRESS, EVENT_DATA.EVENT_FACEBOOK_ID, EVENT_DATA.EVENT_UNIONE_URL FROM EVENT_DATA LEFT JOIN EVENT_TYPE ON EVENT_DATA.EVENT_TYPE_ID = EVENT_TYPE.EVENT_TYPE_ID LEFT JOIN EVENT_LOCATION ON EVENT_DATA.EVENT_LOCATION = EVENT_LOCATION.LOCATION_ID WHERE EVENT_DATA.EVENT_TIME >= "'.$time.'" ORDER BY EVENT_DATA.EVENT_TIME LIMIT 4';
	
	$get_next_four_ok = true;
	
	if(!$get_next_four_data = $DB->query($get_next_four_query))
	{
		echo($DB->error);
		echo($get_next_four_query);
		$get_next_four_ok = false;
	}
?>