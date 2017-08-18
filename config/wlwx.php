<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    "debug" => [
        "url" => "http://open.sandbox.4px.com/",
        "clientId" => "867fc2b6-8684-47b8-a929-04fa1a866b71",
        "clientSecret" => "d667353e-2016-4ea3-81f2-f2b8e7006c95",
        "uri" => "router/api/service",
        "redirectUri" => "http://iwms.eservicesgroup.com/authorize-callback/4px"
    ],
    "live" => [
        "url" => "http://api.4px.com/",
        "clientId" => "",
        "clientSecret" => "",
        "uri" => "router/api/service",
        "redirectUri" => "http://iwms.eservicesgroup.com/authorize-callback/4px"
    ]
];

