<?php

declare(strict_types=1);

namespace Yactouat\Dev;

/**
 * this class is responsible for dumping values during development time
 */
final class Dumper
{

    /**
     * dumps the contents of a variable in a prettified HTML way
     *
     * @param mixed $var the value to dump
     * @param boolean $die (default: true) if set to true, stops the execution of the script
     * @return void
     */
    public static function dumpAndDieHtml($var, bool $die = true): void {
        echo "<div style='margin: 1em;'><pre style='background-color: black; color: white;'>";
        var_dump($var);
        echo "</pre></div>";
        if ($die) {
            die();
        }
    }

    /**
     * dumps the contents of a variable raw
     *
     * @param mixed $var the value to dump
     * @param boolean $die (default: true) if set to true, stops the execution of the script
     * @return void
     */
    public static function dumpAndDie($var, bool $die = true): void {
        var_dump($var);
        if ($die) {
            die();
        }
    }

}