<?php
/**
 * Joomla Platform - http://developer.joomlatools.org/platform
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/joomlatools/joomla-platform-legacy for the canonical source repository
 */

// Add deprecated constants
// @deprecated 4.0
define('JPATH_ISWIN', IS_WIN);
define('JPATH_ISMAC', IS_MAC);

// Register J prefix
JLoader::registerPrefix('J', __DIR__.'/code');

// Register classes where the names have been changed to fit the autoloader rules
// @deprecated  4.0
JLoader::register('JSimpleCrypt', __DIR__ . '/code/simplecrypt/simplecrypt.php');
JLoader::register('JTree', __DIR__  . '/code/base/tree.php');
JLoader::register('JNode', __DIR__  . '/code/base/node.php');
JLoader::register('JObserver', __DIR__  . '/code/base/observer.php');
JLoader::register('JObservable', __DIR__  . '/code/base/observable.php');
JLoader::register('LogException', __DIR__  . '/code/log/logexception.php');
JLoader::register('JXMLElement', __DIR__  . '/code/utilities/xmlelement.php');
JLoader::register('JRule', __DIR__  . '/code/access/rule.php');
JLoader::register('JRules', __DIR__  . '/code/access/rules.php');
JLoader::register('JCli', __DIR__  . '/code/application/cli.php');
JLoader::register('JApplication', __DIR__  . '/code/application/application.php');