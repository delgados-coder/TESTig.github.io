<?php
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizeInstagramController;
use App\Http\Controllers\InicioController;


Route::get('/', [InicioController::class, 'index'])->name('home.index');
Route::get('/auth/instagram', [AuthorizeInstagramController::class, 'authorizeInstagram'])->name('auth.instagram');
Route::get('/auth/instagram/callback', [AuthorizeInstagramController::class, 'handleInstagramCallback'])->name('auth.callback');





// Route::get('/', function () {

//     // Reemplaza con los valores que obtuviste durante el tutorial
//     $clientId = '695810408933111';
//     $clientSecret = '6e923342fc0959672eeb9fad326e3953';
//     $redirectUri = 'https://socialsizzle.herokuapp.com/auth/';
//     $code = 'tu_code';

//     // Construye la URL de solicitud de token de acceso
//     $tokenUrl = 'https://api.instagram.com/oauth/access_token';

//     // Configura el cliente Guzzle
//     $client = new Client();

//     try {
//         // Realiza la solicitud POST para intercambiar el código por un token de acceso
//         $response = $client->post($tokenUrl, [
//             'form_params' => [
//                 'client_id' => $clientId,
//                 'client_secret' => $clientSecret,
//                 'grant_type' => 'authorization_code',
//                 'redirect_uri' => $redirectUri,
//                 'code' => $code,
//             ],
//         ]);

//         // Decodifica la respuesta JSON
//         $data = json_decode($response->getBody(), true);

//         // Obtiene el identificador de acceso y el identificador del usuario
//         $accessToken = $data['access_token'];
//         $userId = $data['user_id'];

//         // Construye la URL para consultar el nodo de usuario
//         $userUrl = "https://graph.instagram.com/{$userId}?fields=id,username&access_token={$accessToken}";

//         // Realiza la solicitud GET al nodo de usuario
//         $userResponse = $client->get($userUrl);

//         // Decodifica la respuesta JSON del nodo de usuario
//         $userData = json_decode($userResponse->getBody(), true);

//         // Muestra el resultado
//         dd($userData);

//     } catch (\Exception $e) {
//         // Maneja errores aquí
//         dd('Error: ' . $e->getMessage());
//     }
// });


