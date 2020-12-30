<?php

function binch_enablle_HSTS () {
    header('Strict-Transport-Security: max-age=0');
}

add_action('send_headers', 'binch_enablle_HSTS');