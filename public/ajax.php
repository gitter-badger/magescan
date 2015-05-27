<?php
/**
 * Mage Scan
 *
 * PHP version 5
 *
 * @category  MageScan
 * @package   MageScan
 * @author    Steve Robbins <steven.j.robbins@gmail.com>
 * @copyright 2015 Steve Robbins
 * @license   http://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 * @link      https://github.com/steverobbins/magescan
 */

require '../vendor/autoload.php';

use MageScan\Http;

$code = isset($_GET['code']) ? $_GET['code'] : '';
$url = isset($_GET['url']) ? $_GET['url'] : '';

new Http($code, $url);
