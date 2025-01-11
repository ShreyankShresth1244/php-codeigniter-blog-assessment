<?php

/**
 * Generate a Bootstrap alert box.
 *
 * @param string $type - The type of alert (e.g., 'success', 'danger', 'warning', 'info').
 * @param string $message - The message to display in the alert box.
 * @return string - The HTML string for the alert box.
 */
function bootstrap_alert($type, $message)
{
    return '<div class="alert alert-' . $type . '" role="alert">' . htmlspecialchars($message) . '</div>';
}
