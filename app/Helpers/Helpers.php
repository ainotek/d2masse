<?php


namespace App\Helpers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class Helpers
{
    const IPINFOTOKEN = "d28eac13ffda00";

    public static function getCountries()
    {
        return json_decode(file_get_contents(storage_path() . "/data/countries.json"));
    }

    public static function getIpInfo(string $ip)
    {
        $url = "https://www.ipinfo.io/$ip?token=" . self::IPINFOTOKEN;
        return self::fetch($url);
    }

    public static function getDevice(Agent $agent)
    {
        try {
            if ($agent->isDesktop())
                $device = trim($agent->device() . ' ' . $agent->platform() . ' ' . $agent->version($agent->platform()) . ' ' . $agent->browser() . ' ' . $agent->version($agent->browser()));
            elseif ($agent->isPhone())
                $device = trim( $agent->device() . ' ' . $agent->platform() . ' ' . $agent->version($agent->platform()).' '.$agent->browser() . ' ' . $agent->version($agent->browser()));
            elseif ($agent->isRobot())
                $device = trim($agent->device() . ' ' . $agent->robot());
            else
                $device = $agent->device();
        } catch (\Exception $e) {
            $device = __('Inconnue');
        }
        if(!$device || $device == "")
            $device = __('Inconnue');
        return $device;
    }

    public static function fetch($url, $data = false)
    {
        $guzClient = new Client(['base_uri' => $url]); //GuzzleHttp\Client
        $response = $guzClient->request('GET');
        if ($data) {
            try {
                $response = $guzClient->request('POST', '', ['json' => $data]);
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
        return json_decode($response->getBody()->getContents(), true);
    }

    public static function validation(Request $request,  array $rules) {
        $validator = Validator::make($request->all(), $rules);
        $errors = null;
        if (count($validator->messages()) != 0) {
            $errors = $validator->messages();
        }
        return $errors;
    }

    public static function generateRandomString($num){
        $permitted_chars = strtoupper('0123456789abcdefghijklmnopqrstuvwxyz');
        // Output: 54esmdr0qf
        return substr(str_shuffle($permitted_chars), 0, $num);
    }
}
