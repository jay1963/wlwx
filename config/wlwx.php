<?php
    const SMS_HOST = 'http://127.0.0.1';
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
        "CUST_CODE" => "http://api.4px.com/",
        "CUST_PWD" => "123",
        "SP_CODE" => "123",
        "NEED_REPORT" => "yes",
        "UID" => "123",
        "SMS_HOST" => SMS_HOST,
        "RETRY_TIMES" => 3,
        "URI_SEND_COMMON_SMS" => SMS_HOST . ":8860/sendSms",
        "URI_SEND_VARIANT_SMS" => SMS_HOST . ":8860/sendVariantSms",
        "URI_GET_TOKEN" => SMS_HOST . ":8860/getToken",
        "URI_GET_REPORT" => SMS_HOST . ":8860/getReport",
        "URI_GET_MO" => SMS_HOST . ":8860/getMO",
        "URI_QUERY_ACCOUNT" =>  SMS_HOST . ":8860/QueryAccount",
        "URI_SMS_TEMPLATE" => SMS_HOST . ":8860/requestSmsTemplate",
        "URI_SEND_MULTI_SMS" => SMS_HOST . ":8861", 
    ];

