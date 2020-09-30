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
    global $errors;

    if (isset($_POST['next']) && $pageCounter < (count($pages) - 1) &&  count($errors) === 0) return ++$pageCounter;
    if (isset($_POST['previous']) && $pageCounter > 0) return --$pageCounter;
    return $pageCounter;
}


function getArrayValue($array,$value)
{
    return (!empty($array[$value]) ? $array[$value] : '');
}

function showError($nameOfError)
{
    global $errors;

    $string = '';

    if (!empty($errors[$nameOfError]))
        foreach ($errors[$nameOfError] as $error) {
            $string .= "$error <br>";
        }

    return $string;
}

function generateInput($arrays, $valuesArr, $disabled = '')
{
    foreach ($arrays as $array) {
        echo "
        <label for='{$array['name']}'>" . ucfirst($array['name']) . "</label>
        <input type='{$array['type']}' name='{$array['name']}' value='" . getArrayValue($valuesArr,$array['name']) . "' $disabled>
        <p class='alert'>" . showError($array['name']) . "</p>
        ";
    }
}

function pushError($name, $errmsg)
{
    global $errors;

    empty($errors[$name]) ? $errors[$name] = [$errmsg] : array_push($errors[$name], $errmsg);
}

function connectToDB($queryString, $type = '')
{
    global $conn;

    //prepare query
    $stmt = $conn->prepare($queryString);

    //execute
    $stmt->execute();

    if ($type === 'SELECT')
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}