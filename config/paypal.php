<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => 'live', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => '',
        'client_secret'     => '',
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => 'ATvmCgnMhshG5k3U_gx4NxB_phHFPl-ZsZiTGvtibkcjvGyF_Mrx5U-0UnrD8YDxrY6nnjT70l6UbtJU',
        'client_secret'     => 'EJWZxmgNuUO6pQbbsuGNPJ14YHAgdlz3bxQn1DKZUn9ts8witczUKzYOZAEoU3iDmbzygUYm07C7KP_O',
        'app_id'            => '',
    ],

    'payment_action' => 'Order', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];
