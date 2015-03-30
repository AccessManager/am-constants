<?php

/**
 * Time Unit Constants.
 */
if( ! defined('Mins') )
define('Mins', 60);

if( ! defined('Hrs') )
define('Hrs', 3600);

if( ! defined('DAY'))
	define('DAY', 1);

if( ! defined('DAYS'))
	define('DAYS', 1);

if( ! defined('MONTH'))
	define('MONTH', 30);

if( ! defined('MONTHS'))
	define('MONTHS', 30);

if( ! defined('YEAR'))
	define('YEAR', 365);

if( ! defined('YEARS'))
	define('YEARS', 365);

/**
 * Data Unit Constants.
 */
if( ! defined('KB') )
define('KB', 1024);

if( ! defined('MB') )
define('MB', 1048576);

if( ! defined('GB') )
define('GB', 1073741824);

if( ! defined('FOUR_GB') )
define('FOUR_GB', 4294967296);

/**
 * Constants from am-invoicing module.
 */

if( ! defined('BILL_DURATION_CYCLE'))
	define('BILL_DURATION_CYCLE', 1);

if( ! defined('BILL_DURATION_FULL'))
	define('BILL_DURATION_FULL', 2);

if( ! defined('RECURRING'))
	define('RECURRING', 1);

if( ! defined('NON_RECURRING'))
	define('NON_RECURRING', 0);

/**
 * Constants from am-radius module.
 */

/**
 * Policy Schema Constants.
 */
if( ! defined('NOT_ALLOWED') )
define('NOT_ALLOWED', 0);

if( ! defined('ALLOWED') )
define('ALLOWED', 1);

if( ! defined('PARTIAL') )
define('PARTIAL', 2);


/**
 * Constants from AM Core Project.
 */

/**
 * Status Constants.
 */
if( ! defined('ACTIVE') )
	define('ACTIVE',1);

if( ! defined('DEACTIVE'))
	define('DEACTIVE',0);

if( ! defined('TERMINATED'))
	define('TERMINATED', 2);

if( ! defined('ENABLED') )
	define('ENABLED',1);

if( ! defined('DISABLED') )
	define('DISABLED',0);


/**
 * Limit type Constants.
 */
if( ! defined('UNLIMITED') )
	define('UNLIMITED', 0);

if( ! defined('LIMITED') )
	define('LIMITED', 1);

if( ! defined('TIME_LIMIT') )
	define('TIME_LIMIT', 0);

if( ! defined('DATA_LIMIT') )
	define('DATA_LIMIT', 1) ;

if( ! defined('BOTH_LIMITS') )
	define('BOTH_LIMITS',2 );


/**
 * Plan Type Constants.
 */
if( ! defined('FREE_PLAN'))
define('FREE_PLAN', 0 );

if( ! defined('PREPAID_PLAN'))
	define('PREPAID_PLAN', 1 );

if( ! defined('ADVANCEPAID_PLAN'))
	define('ADVANCEPAID_PLAN', 2 );

/**
 * Billing Duration Constants.
 */
if( ! defined('BILL_DURATION_CYCLE_START'))
	define('BILL_DURATION_CYCLE_START', 0);

if( ! defined('BILL_DURATION_CYCLE'))
	define('BILL_DURATION_CYCLE', 1);

if( ! defined('BILL_DURATION_FULL'))
	define('BILL_DURATION_FULL', 2);

if( ! defined('RECURRING'))
	define('RECURRING', 1);

if( ! defined('NON_RECURRING'))
	define('NON_RECURRING', 0);

//end of file Constants.php