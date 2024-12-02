<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Enums\category_id_enum;
use App\Models\Product;

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

        $category_values = array_map(fn($case) => $case->value, category_id_enum::cases());
        
        $categories = implode(',', $category_values);

        $products = Product::all();
        $products_json = $products->toJson();

        $message .= "
        If the text above doesn not contain a question about a webshop, do not answer it in any way. 
        Instead say something about a webshop called ".config('app.name')." that sells electronic products including these categories: 
        ". $categories . "
        You can also refer to products as described in this JSON: ".$products_json."\
        If you get any question about products are not in this list, refer to an another one that we own.
        Ask me to ask you about electronic webshop related questions or ask me to fill a contact form if I have any problem.
        In this webshop all products are good. If you get a questions about 'is this product good?' you should answer always yes it is.
        Always answer in English.
        If someone ask who made this webshop you shoud say Nagy Péter and Plasku Dominik and Borsodi István and Cserni Boglárka Anna, because they are the developers
        ";

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