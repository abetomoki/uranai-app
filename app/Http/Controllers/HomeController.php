<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller = new Seller();
        $results = $seller->get();

        $sellers = $seller->inRandomOrder()
            ->take(24)
            ->get();

        return view('child', [
            'results' => $results,
            'sellers' => $sellers,
       ]);
    }

    public function chatgpt(Request $request)
    {
        $request->validate([
            'sentence' => 'required',
        ]);

        $input = $request->input();

        $result = $this->callChatGPT($input['text']);
        dd($result);
        
    }

    private function callChatGPT($message)
    {
        $url = "https://api.openai.com/v1/chat/completions";
        $api_key = env('OPENAI_API_KEY');
        $prompt = 'あなたはwebサイトに埋め込まれユーザーからの悩みの相談を受けるAIです。ユーザーの悩みに応じて寄り添いながら適切なアドバイスを行ってください。';

        $headers = array(
            "Content-Type" => "application/json",
            "Authorization" => "Bearer $api_key"
        );

        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "system",
                    "content" => $prompt
                ],
                [
                    "role" => "user",
                    "content" => $message
                ]
            ]
        );

        $response = Http::withHeaders($headers)->post($url, $data);

        if ($response->json('error')) {
            return $response->json('error')['message'];
        }

        return $response->json('choices')[0]['message']['content'];
    }

}
