<?php
/**
 * Challenge Yourselph - 044
 * Recreate Conway's Look and Say sequence
 *
 * Usage: php lookandsay.php <starting sequence> <# of iterations>
 *
 * @author Jon Wurtzler <jon.wurtzler@gmail.com>
 * @date 03/21/2016
 */

use LookAndSay\LookAndSay;

require_once __DIR__ . '/vendor/autoload.php';

$startingSequence = (string) isset($argv[1]) ? $argv[1] : "1";
$iterations       = (string) isset($argv[2]) ? $argv[2] : 10;

$lookAndSay = new LookAndSay();

$output = $lookAndSay->run($startingSequence, $iterations);

echo ("After {$iterations} iterations, the new sequance is: {$output}\n\n");
