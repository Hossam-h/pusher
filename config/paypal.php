<?php

return [ 
    'client_id' => 'Ac0cT_b9_4qOFhcfMXaQXO961SjdyG26nhSH-7yZPjEFm0apZPvCVbWvVJuAxJDFCUSe-dg7dSIyD7kQ',
	'secret' => 'EN6oekNyzgJufuV0Znj50oZggiIHIV0yN5AYspz-9A_oKRZql4JAkrhJ8a4eThIgwOsG3ApTl9F_ZXoH',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];

?>