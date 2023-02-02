<?php
// This is PHP code which helps in illustrating the working
// of the ob_start() Function of PHP Language
function callback($buffer1)
{
// This function Returns Everything of output in CAPS.
	return (strtoupper($buffer1));
}

ob_start("callback");
echo "Hello Educba!!";
ob_end_flush();