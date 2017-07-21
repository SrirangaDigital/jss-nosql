<?php

define('ARTEFACT_COLLECTION', 'artefacts');
define('USER_COLLECTION', 'userdetails');

define('DEFAULT_TYPE', 'Letter');

define('MISCELLANEOUS_NAME', 'Miscellaneous');

// Lazy loading setting
define('PER_PAGE', 10);
define('PHOTO_FILE_EXT', '.JPG');

// user settings (login and registration)
define('SALT', 'jssArchives');
define('REQUIRE_EMAIL_VALIDATION', False);//Set these values to True only
define('REQUIRE_RESET_PASSWORD', False);//if outbound mails can be sent from the server
define('REQUIRE_GIT_TRACKING', True);

?>
