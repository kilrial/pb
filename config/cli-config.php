<?php
// cli-config.php
require_once "/var/www/pb/libs/bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

