#!/usr/bin/php
<?php
/**
 * PopSpider PHP CLI script
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.TXT.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/nicksagona/PopSpider/blob/master/LICENSE.TXT
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@popphp.org so we can send you a copy immediately.
 *
 * Possible arguments
 *
 * -c --check                     Check the current configuration for required dependencies
 * -h --help                      Display this help
 * -i --install file.php          Install a project based on the install file specified
 * -l --lang fr                   Set the default language for the project
 * -m --map folder file.php       Create a class map file from the source folder and save to the output file
 * -r --reconfig projectfolder    Reconfigure the project based on the new location of the project
 * -s --show                      Show project install instructions
 * -v --version                   Display version of Pop PHP Framework
 *
 * IMPORTANT!
 *
 * If you move the 'bootstrap.php' file, make
 * sure you adjust the path to it accordingly
 *
 */

set_time_limit(0);

require_once __DIR__ . '/../bootstrap.php';

// Write header
echo PHP_EOL;
echo 'PopSpider CLI' . PHP_EOL;
echo '=============' . PHP_EOL . PHP_EOL;

print_r($argv);
