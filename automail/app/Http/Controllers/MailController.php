<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MailController extends Controller
{
    /**
     * @OA\Swagger(
     *      host="mailhog.php.docker.localhost:8025",
     *      basePath="/",
     *      schemes=("http"),
     *      @OA\Info(
     *          version="1.0",
     *          title="Email API"
     *      ),
     * )
     * @OA\Get(
     *      path="/",
     *      description="Return email view.",
     *      tags={"Email"},
     *      @OA\Response(
     *          response=200,
     *          description="Email view."
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="ENF (Email Not Found)."
     *      )
     * )
     */
    public function index(Request $request)
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                        'name'  => 'Name',
                        'email' => 'user@example.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);

    }

}