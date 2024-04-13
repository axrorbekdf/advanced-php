<?php

namespace App\Telegram;
use Illuminate\Support\Facades\Http;

class Telegram {

    const TOKEN = "6759926560:AAG5k2DHboBhKhv0-fU7bIyWQ-37cGnBMk0";
    const BASE = "https://api.telegram.org/bot";

    public function sendMessage($chat_id, $text){

        return Http::post(self::BASE.self::TOKEN.'/'.__FUNCTION__, [
            'chat_id' => $chat_id,
            'text' => $text,
        ]);

    }

    public function sendMediaGroup($chat_id, $media){

        return Http::post(self::BASE.self::TOKEN.'/'.__FUNCTION__, [
            'chat_id' => $chat_id,
            'media' => $media,
        ]);
    }

    public function editMessageMedia($chat_id, $message_id, $media){

        return Http::post(self::BASE.self::TOKEN.'/'.__FUNCTION__, [
            'chat_id' => $chat_id,
            'media' => $media,
            'message_id' => $message_id
        ]);
    }

    public function deleteMessage($chat_id, $message_id){

        return Http::post(self::BASE.self::TOKEN.'/'.__FUNCTION__, [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
        ]);
    }

    public function deleteMessages($chat_id, $message_ids){

        return Http::post(self::BASE.self::TOKEN.'/'.__FUNCTION__, [
            'chat_id' => $chat_id,
            'message_ids' => $message_ids,
        ]);
    }
}