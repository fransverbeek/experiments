<?php
if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
	ob_start(null, 0, PHP_OUTPUT_HANDLER_STDFLAGS ^
		PHP_OUTPUT_HANDLER_REMOVABLE);
	echo "Your PHP version is greater than or equal to PHP 5.4.0 version";
} else {
	ob_start(null, 0, false);
	echo "Your PHP Version is less than PHP 5.4.0 version";
}

