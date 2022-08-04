<?php

namespace Yactouat\Dev;

final class Dumper
{

    public static function dumpAndDieHtml($var, bool $die = true): void {
        echo "<div style='margin: 1em;'><pre style='background-color: black; color: white;'>";
        var_dump($var);
        echo "</pre></div>";
        if ($die) {
            die();
        }
    }

    public static function dumpAndDie($var, bool $die = true): void {
        var_dump($var);
        if ($die) {
            die();
        }
    }

}