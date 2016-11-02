<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // disable mass assignment
        Message::unguard();

        // Load the json file using File facade
        $path = storage_path("app/messages_sample.json");
        if(File::exists($path)) {
            $content = File::get($path);
            // get the list of messages from json
            $jsonArray = json_decode($content);

            foreach($jsonArray->messages as $item) {
                // save each message in db, using Message model

                $message = Message::create([
                    'id' => $item->uid,
                    'sender' => $item->sender,
                    'subject' => $item->subject,
                    'message' => $item->message,
                    'time_sent' => $item->time_sent,
                ]);
            }
        }
    }
}
