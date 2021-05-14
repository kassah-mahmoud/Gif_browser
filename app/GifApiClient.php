<?php 

namespace App;

use Illuminate\Support\Facades\Http;

class GifApiClient  
{
    private static $api_key = 'dc6zaTOxFJmzC';

    private static $host = 'https://api.giphy.com/v1/gifs';

    private static $search_action = '/search';

    public static function search($data) {
        $request_data = \array_merge($data, ['api_key' => self::$api_key]);

        return Http::withOptions([
            'verify' => false,
        ])->get( self::$host . self::$search_action, $request_data)->throw()->json();
    }
}
