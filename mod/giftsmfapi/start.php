<?php

elgg_ws_expose_function(
        "test.echo",
        "my_echo",
        [
                'username' => [
                        'type' => 'string',
                        'required' => true,
                ],
                'password' => [
                        'type' => 'string',
                        'required' => true,
                        'default' => '12345678',
                ],
				'displayName' => [
                        'type' => 'string',
                        'required' => true,
                ],
                'email' => [
                        'type' => 'string',
                        'required' => true,
                        'default' => 'contact@synapticsparks.org',
                ],
		],
        'A testing method to add a user',
        'GET',
        false,
        false
);

elgg_ws_expose_function(
        "addNewGroup.echo",
        "addNewGroup",
        [
                'username' => [
                        'type' => 'string',
                        'required' => true,
						'default' => 'ChrisMeyer',
                ],
		],
        'A testing method to add a group',
        'GET',
        false,
        false
);

elgg_ws_expose_function(
        "addCourseToGroup.echo",
        "addCourseToGroup",
        [
                'groupGuid' => [
                        'type' => 'int',
                        'required' => true,
                ],
				'username' => [
                        'type' => 'string',
                        'required' => true,
                ],
		],
        'A testing method to add a course to a users group',
        'GET',
        false,
        false
);
 
function my_echo($username, $password, $displayName, $email)
{
	return $username . " " . $password . " " . $displayName . " " . $email;
	#return _elgg_services()->usersTable->register($username, $password, $displayName, $email, true);
}

function addCourseToGroup($groupGuid, $username)
{
	$group = get_entity($groupGuid);
	echo "\n*** fetch user=($username)";
	echo "\n*** get_user_by_username";
	$user = get_user_by_username($username);
	if ($user) 
	{
		echo "\n*** user($username) FND OK ";
		#$group->join($user);
		echo "\nAdded $username to $group->name";
		return 1;
	}
	return -1;
}

function addNewGroup($username)
{
	$user = get_user_by_username($username);
	login($user);
	$group = new ElggGroup();
	#$group = get_entity(785);
	$group->membership = ACCESS_PRIVATE;
	$group->access_id = ACCESS_PUBLIC;
	$group->name = $username . "s Courses";
	
	echo "\n*** fetch user=($username)";
	echo "\n*** get_user_by_username";
	if ($user) {
			echo "\n*** user($username) FND OK ";
			$userGuid = $user->getGUID();
			echo "$userGuid ";
			$group->owner_guid = $userGuid;
	}
	else 
	{
		echo "FAILED TO FIND OWNER GUID";
		return;
	}
	echo "\nSUCCESS";
	#$group->save();
	return $group->guid;
}

#return _elgg_services()->usersTable->register($username, $password, $name, $email, $allow_multiple_emails);
