<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ChatbotController extends Controller
{
    public function handleRequest(Request $request)
    {
        $input = $request->input('message');
        $response = $this->processChatbot($input);

        return response()->json(['response' => $response]);
    }


    private function processChatbot($message)
    {

        $api_key = config('services.google_api_key');

        //https://aistudio.google.com implementáció
        $apiResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . $api_key, [
            'contents' => [               
                'parts' => [
                    'text' => $message
                ]
            ]
        ]);
    
        return $apiResponse->json();
    }
}
