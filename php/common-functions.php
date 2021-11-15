<?php
function getTemplate($templateName)
{
    $content = file_get_contents('templates/' . $templateName);
    if ($content) {
        echo($content);
    }
}

function getNavigation($templateName, $triggerName, $active = 'active')
{
    $content = file_get_contents('templates/' . $templateName);
    if ($content) {
        echo(str_replace($triggerName, $active, $content));
    }
}
