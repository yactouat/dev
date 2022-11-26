<?php

declare(strict_types=1);

namespace Yactouat\Dev;

/**
 * this class is responsible for handling files during the development phase
 */
final class DevFilesManager
{

    /**
     * clears all files with specified folders except .gitkeep and .gitignore
     *
     * @param array $folders
     * @return void
     */
    public static function clearFolders(array $folders): void {
        foreach ($folders as $folder) {
            if (is_dir($folder)) {
                $files = glob($folder.'/*');
                foreach ($files as $file) {
                    if (is_file($file) && !str_ends_with($file, "gitkeep") && !str_ends_with($file, "gitignore")) {
                        unlink($file);
                    }
                }
            }
        }
    }
}