<?php
/**
 * Joomlatools Platform - http://developer.joomlatools.org/platform
 *
 * @copyright   Copyright (C) 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/joomlatools/joomlatools-platform-legacy for the canonical source repository
 */

if (!defined('JOOMLATOOLS_PLATFORM')) {
	return;
}

// Add deprecated constants
// @deprecated 4.0
$os = strtoupper(substr(PHP_OS, 0, 3));

if (!defined('IS_WIN')) {
    define('IS_WIN', ($os === 'WIN') ? true : false);
}

if (!defined('IS_UNIX')) {
    define('IS_UNIX', (($os !== 'MAC') && ($os !== 'WIN')) ? true : false);
}

if (!defined('IS_MAC')) {
    define('IS_MAC', (IS_UNIX === true && ($os === 'DAR' || $os === 'MAC')) ? true : false);
}

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
JLoader::register('JError', __DIR__  . '/code/error/error.php');
JLoader::register('JExceptionNotFound', __DIR__  . '/code/exception/notfound.php');

// Set system error handling
JError::setErrorHandling(E_NOTICE, 'message');
JError::setErrorHandling(E_WARNING, 'message');
JError::setErrorHandling(E_ERROR, 'callback', array('JError', 'customErrorPage'));