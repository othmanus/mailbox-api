<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use Carbon\Carbon;

class MessagesController extends Controller
{
    /**
     * List messages
     * Retrieve a paginateable list of all messages.
     * Show if messages were read already.
     *
     * @return Response
     */
    public function listMessages()
    {
        $messages = Message::paginate();
        return response()->json($messages);
    }

    /**
     * List archived messages
     * Retrieve a paginateable list of all archived messages.
     * Show if messages were read already.
     *
     * @return Response
     */
    public function listArchivedMessages()
    {
        // use a custom scope in the Message model
        $messages = Message::archived()->paginate();
        return response()->json($messages);
    }

    /**
     * Show message
     * Retrieve message by id, include read status and if message is achived.
     *
     * @return Response
     */
    public function showMessage($id)
    {
        $message = Message::find($id);
        return response()->json($message);
    }

    /**
     * Read message
     * This action “reads” a message and marks it as read in database.
     *
     * @return Response
     */
    public function readMessage($id)
    {
        $message = Message::find($id);

        // mark as read
        if($message && !$message->is_read) {
            $message->update([
                'is_read' => true,
                'time_read' => Carbon::now(), // update the read time
            ]);
        }

        return response()->json($message);
    }

    /**
     * Archive message
     * This action sets a message to archived.
     *
     * @return Response
     */
    public function archiveMessage($id)
    {
        $message = Message::find($id);

        // mark as archived
        if($message && !$message->is_archived) {
            $message->update([
                'is_archived' => true,
                'time_archived' => Carbon::now(), // update the archive time
            ]);
        }

        return response()->json($message);
    }
}
