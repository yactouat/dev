<?php

namespace Yactouat\Dev;

final class CacheManager
{
    public static function clearCacheFolders(array $cacheFoldersPaths): void {
        foreach ($cacheFoldersPaths as $cacheFolderPath) {
            if (is_dir($cacheFolderPath)) {
                $files = glob($cacheFolderPath.'/*');
                foreach ($files as $file) {
                    if (is_file($file) && !str_ends_with($file, "gitkeep") && !str_ends_with($file, "gitignore")) {
                        unlink($file);
                    }
                }
            }
        }
    }
}