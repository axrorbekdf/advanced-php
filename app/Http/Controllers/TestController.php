<?php

namespace App\Http\Controllers;

use App\Models\MediaGroup;
use App\Telegram\Telegram;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public $telegram;

    public function __construct()
    {
        $this->telegram = new Telegram();
    }

    public function index(Request $request){

        // if(isset($request->message['media_group_id'])){

        //     $media = MediaGroup::where('media_group_id', $request->message['media_group_id'])->first();

        //     if(!$media){
        //         $media = MediaGroup::create([
        //             "media_group_id" => $request->message['media_group_id'],
        //             "files" => [
        //                 [
        //                     "type" => "photo",
        //                     "media" => $request->message['photo'][0]['file_id'],
        //                     "caption" => isset($request->message["caption"]) ? $request->message["caption"] : ""
        //                 ],
        //             ],
        //             "message_id" => json_encode([]),
        //         ]);
            
        //     }else{

        //         $items = $media->files;
        //         $items[] = [
        //             "type" => "photo",
        //             "media" => isset($request->message['photo'][0]['file_id']) ? $request->message['photo'][0]['file_id'] : [],
        //         ];
                
        //         $media = $media->update([
        //             "files" => $items,
        //         ]);
        //     }
            
        //     $media = MediaGroup::where('media_group_id', $request->message['media_group_id'])->first();
            
        //     if(is_array(json_decode($media->message_id, true))){
        //         $this->telegram->deleteMessages('909945209', json_decode($media->message_id, true));
        //     }

        //     $messa = $this->telegram->sendMediaGroup('909945209', $media->files);
            
        //     $ids = [];
        //     foreach($messa->object()->result as $item){
        //         $ids[] = ($item->message_id)? $item->message_id: 0;
        //     }

        //     $media->update([
        //         "message_id" => json_encode($ids),
        //     ]);

        //     return $messa;
        //     // return isset($messa->object()->result[0]->message_id)? $messa->object()->result[0]->message_id: 0;
        // }
        

        return $this->telegram->sendMediaGroup('909945209', [
            [
                "type" => "photo",
                "media" => "https://t.me/vuejs_uz/122833",
                "caption" => "test"
            ],
            [
                "type" => "photo",
                "media" => null,
            ],
            [
                "type" => "photo",
                "media" => null,
            ],
            [
                "type" => "photo",
                "media" => null,
            ],
        ]);
    }
}
