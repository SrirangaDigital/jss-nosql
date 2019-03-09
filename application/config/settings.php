<?php
//Collections
define('ARTEFACT_COLLECTION', 'artefacts');
define('ARTICLES_COLLECTION', 'articles');
define('ALPHABET_COLLECTION', 'alphabet');
define('ARTEFACT_KEYS_COLLECTION', 'artefacts_keys');
define('FOREIGN_KEY_COLLECTION', 'foreignKeys');
define('FULLTEXT_COLLECTION', 'fulltext');
define('USER_COLLECTION', 'userdetails');

//Default Values
define('PRASADA', '003');
define('SHOW_ONLY_IF_DATA_EXISTS', True);
define('SHOW_PDF', True);
define('DEFAULT_TYPE', 'Letter');
define('DEFAULT_LETTER', 'ಅ');
define('DEFAULT_PARAM', 'year');
define('MISCELLANEOUS_NAME', 'ಇತರೆ');
define('FOREIGN_KEY_TYPE', 'ForeignKeyType');

// Lazy loading setting
define('PER_PAGE', 10);
define('NO_SKIP', 0);
define('NO_LIMIT', 1000000);
define('FULLTEXT_SNIPPET_SIZE', 8);
define('PHOTO_FILE_EXT', '.JPG');

// External resource setting
define('EXTERNAL_RESOURCE', 'external.html');
define('EXTERNAL_RESOURCE_NOT_EXISTS', 'application/views/error/noExternalResource.php');

// user settings (login and registration)
define('REQUIRE_EMAIL_VALIDATION', False);//Set these values to True only
define('REQUIRE_RESET_PASSWORD', False);//if outbound mails can be sent from the server
define('REQUIRE_GIT_TRACKING', True);
define('REQUIRE_GITHUB_SYNC', True);


// archive variables
define('NAV_ARCHIVE_VOLUME', 'ಸಂಪುಟಗಳು');
define('NAV_ARCHIVE_ARTICLES', 'ಲೇಖನಗಳು');
define('NAV_ARCHIVE_AUTHORS', 'ಲೇಖಕರು');
define('NAV_ARCHIVE_FEATURES', 'ಸ್ಥಿರ ಶೀರ್ಷಿಕೆಗಳು');
define('NAV_ARCHIVE_SEARCH', 'ಹುಡುಕಿ');
define('SEARCH_ARTICLE', 'ಲೇಖನ');
define('SEARCH_AUTHOR', 'ಲೇಖಕರು');
define('SEARCH_FEATURE', 'ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ');
define('SEARCH_WORD', 'ಪದ');
define('SEARCH_SEARCH', 'ಹುಡುಕಿ');
define('SEARCH_RESET', 'ಅಳಿಸಿ');
define('SEARCH_RESULTS', 'ಫಲಿತಾಂಶಗಳು');
define('ARCHIVE_STRUCTURE_TYPE', 'pictorial'); //can take either pictorial or textual
define('ARCHIVE_VOLUME', 'ಸಂಪುಟ');
define('ARCHIVE_YEAR', 'ವರ್ಷ');
define('ARCHIVE_ISSUE', 'ಸಂಚಿಕೆ');
define('ARCHIVE_MONTH', 'ತಿಂಗಳು');
define('ARTICLES', 'ಲೇಖನಗಳು');
define('ARCHIVE', 'ಸಂಗ್ರಹ');
define('AUTHORS', 'ಲೇಖಕರು');
define('FEATURE', 'ಸ್ಥಿರ ಶೀರ್ಷಿಕೆ');
define('SEARCH', 'ಹುಡುಕಿ');
define('SERIES', 'ಸರಣಿ ಲೇಖನಗಳು');
define('TOC', 'ಪರಿವಿಡಿ');
define('DOWNLOAD_PDF', 'ಡೌನ್ಲೋಡ್ ಪಿಡಿಎಫ್');

// css variables
define('ARCHIVE_BASE_FONT_SIZE', '14px'); //for Nudi = 18px, English = 16px, Devanagari = 18px
define('AUTHOR_PREFIX', '—');
define('AUTHOR_JOINER', 'ಮತ್ತು');
?>
