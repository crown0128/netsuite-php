<?php

class UpdateInviteeStatusReference {
	public $eventId;
	public $responseCode;
	static $paramtypesmap = array(
		"eventId" => "RecordRef",
		"responseCode" => "CalendarEventAttendeeResponse",
	);
}

