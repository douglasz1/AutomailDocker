<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class mailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://mailhog.php.docker.localhost:8025/api/v2/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS =>'[
                {
                    "name": "start",
                    "in": "query",
                    "description": "Start index",
                    "required": false,
                    "type": "number",
                    "format": "int64",
                    "default": 0
                },
                {
                    "name": "limit",
                    "in": "query",
                    "description": "Number of messages",
                    "required": false,
                    "type": "number",
                    "format": "int64",
                    "default": 50
                }
            ]',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
        }

}
