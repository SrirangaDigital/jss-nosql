<?php

define('BASE_URL', 'http://localhost/jssArchives/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('ARCHIVES_URL', BASE_URL . 'public/Archives/');
define('JSON_PRECAST_URL', BASE_URL . 'json-precast/');
define('FLAT_URL', BASE_URL . 'application/views/flat/');
define('STOCK_IMAGE_URL', PUBLIC_URL . 'images/stock/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/html/jssArchives/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_ARCHIVES_URL', PHY_BASE_URL . 'public/Archives/');
define('PHY_JSON_PRECAST_URL', PHY_BASE_URL . 'json-precast/');
define('PHY_FLAT_URL', PHY_BASE_URL . 'application/views/flat/');
define('PHY_STOCK_IMAGE_URL', PHY_PUBLIC_URL . 'images/stock/');

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '27017');
define('DB_NAME', 'jssARCHIVES');
define('DB_USER', 'jssUSER');
define('DB_PASSWORD', 'jss123');

// Git config
define('GIT_USER_NAME', 'shruthisdst');
define('GIT_PASSWORD', 'shruthitr14');
define('GIT_REPO', 'github.com/SrirangaDigital/raza-nosql.git');
define('GIT_REMOTE', 'https://' . GIT_USER_NAME . ':' . GIT_PASSWORD . '@' . GIT_REPO);
define('GIT_EMAIL', 'shruthitr.nayak@gmail.com');

?>
