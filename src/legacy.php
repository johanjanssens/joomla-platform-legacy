<?php
/**
 * Bootstrap file for the Joomla Platform [with legacy libraries].  Including this file into your application
 * will make Joomla Platform libraries [including legacy libraries] available for use.
 *
 * @package    Joomla.Platform
 *
 * @copyright  Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Add deprecated constants
// @deprecated 4.0
define('JPATH_ISWIN', IS_WIN);
define('JPATH_ISMAC', IS_MAC);

// Register J prefix
JLoader::registerPrefix('J', __DIR__);

// Register classes where the names have been changed to fit the autoloader rules
// @deprecated  4.0
JLoader::register('JSimpleCrypt', __DIR__ . '/simplecrypt/simplecrypt.php');
JLoader::register('JTree', __DIR__  . '/base/tree.php');
JLoader::register('JNode', __DIR__  . '/base/node.php');
JLoader::register('JObserver', __DIR__  . '/lbase/observer.php');
JLoader::register('JObservable', __DIR__  . '/base/observable.php');
JLoader::register('LogException', __DIR__  . '/log/logexception.php');
JLoader::register('JXMLElement', __DIR__  . '/utilities/xmlelement.php');
JLoader::register('JRule', __DIR__  . '/access/rule.php');
JLoader::register('JRules', __DIR__  . '/access/rules.php');
JLoader::register('JCli', __DIR__  . '/application/cli.php');
JLoader::register('JApplication', __DIR__  . '/application/application.php');
