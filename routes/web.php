<?php

use App\Http\Controllers\ImageViewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(RedirectIfAuthenticated::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/battles', function () {
    function getContrastColor($hexColor)
{
        // hexColor RGB
        $R1 = hexdec(substr($hexColor, 1, 2));
        $G1 = hexdec(substr($hexColor, 3, 2));
        $B1 = hexdec(substr($hexColor, 5, 2));

        // Black RGB
        $blackColor = "#000000";
        $R2BlackColor = hexdec(substr($blackColor, 1, 2));
        $G2BlackColor = hexdec(substr($blackColor, 3, 2));
        $B2BlackColor = hexdec(substr($blackColor, 5, 2));

         // Calc contrast ratio
         $L1 = 0.2126 * pow($R1 / 255, 2.2) +
               0.7152 * pow($G1 / 255, 2.2) +
               0.0722 * pow($B1 / 255, 2.2);

        $L2 = 0.2126 * pow($R2BlackColor / 255, 2.2) +
              0.7152 * pow($G2BlackColor / 255, 2.2) +
              0.0722 * pow($B2BlackColor / 255, 2.2);

        $contrastRatio = 0;
        if ($L1 > $L2) {
            $contrastRatio = (int)(($L1 + 0.05) / ($L2 + 0.05));
        } else {
            $contrastRatio = (int)(($L2 + 0.05) / ($L1 + 0.05));
        }

        // If contrast is more than 5, return black color
        if ($contrastRatio > 5) {
            return '#2e3440';
        } else {
            // if not, return white color.
            return '#d8dee9';
        }
}

    $battles = [
        [
            'battle_id' => 1,
            'battle_title' => 'Bitwa Kizgadzka',
            'battle_image' => 'nord.jpg',
            'battle_countries' => [
                [
                    'country_image' => 'karbadia.png',
                    'country_name' => 'Karbadia',
                    'country_color' => '#2A6B11',
                    'text_color' => getContrastColor('#2A6B11')
                ],
                [
                    'country_image' => 'neuord.png',
                    'country_name' => 'Neuord Drakonis',
                    'country_color' => '#7F1B10',
                    'text_color' => getContrastColor('#7F1B10')
                ]
            ]
        ],
        [
            'battle_id' => 2,
            'battle_title' => 'Bitwa Nordycka',
            'battle_image' => 'pagan.jpg',
            'battle_countries' => [
                [
                    'country_image' => 'karbadia.png',
                    'country_name' => 'Karbadia',
                    'country_color' => '#2A6B11',
                    'text_color' => getContrastColor('#2A6B11')
                ],
                [
                    'country_image' => 'neuord.png',
                    'country_name' => 'Neuord Drakonis',
                    'country_color' => '#7F1B10',
                    'text_color' => getContrastColor('#7F1B10')
                ]

            ]
        ],
        [
            'battle_id' => 3,
            'battle_title' => 'Bitwa Słowiańska',
            'battle_image' => 'viking.png',
            'battle_countries' => [
                [
                    'country_image' => 'karbadia.png',
                    'country_name' => 'Karbadia',
                    'country_color' => '#2A6B11',
                    'text_color' => getContrastColor('#2A6B11')
                ],
                [
                    'country_image' => 'neuord.png',
                    'country_name' => 'Neuord Drakonis',
                    'country_color' => '#7F1B10',
                    'text_color' => getContrastColor('#7F1B10')
                ],
                [
                    'country_image' => 'sylvania.webp',
                    'country_name' => 'Nieumarli',
                    'country_color' => '#AEDAED',
                    'text_color' => getContrastColor('#AEDAED')
                ]

            ]
        ]
    ];

    return view('battles', ['battles' => $battles]);
})->middleware(['auth'])->name('battles');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::get('/images/{img}', [ImageViewController::class,'img'])->name('images');

//$url = route('profile');
