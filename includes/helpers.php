<?php

/**
 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
 *  file's mtime, i.e. /css/base.1221534296.css.
 * 
 *  @author https://stackoverflow.com/a/118886
 *  
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
function auto_version($file)
{
    if (strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
        return $file;

    $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
    return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

/**
 * Changes counter based on length of provided array
 * @param nubmer $pageCounter Any number 
 * @param Array $pages Array
 * @return number returns number higher or equal to 0
 */
function changePage($pageCounter, $pages)
{
    if (isset($_POST['next']) && $pageCounter < (count($pages) - 1)) return ++$pageCounter;
    if (isset($_POST['previous']) && $pageCounter > 0) return --$pageCounter;
    return $pageCounter;
}
