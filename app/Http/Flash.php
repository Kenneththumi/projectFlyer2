<?php


namespace App\Http;

class Flash
{
    public function info($title, $message)
    {
        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'level' => 'info'
        ]);
    }
    public function success($title, $message){

        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'level' => 'success'
        ]);
    }

    public function error($title, $message){

        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'level' => 'error'
        ]);
    }



    public function overlay($title, $message){

        session()->flash('flash_message_overlay', [
            'title' => $title,
            'message' => $message,
            'level' => 'success',
            'key'=>'flash_message_overlay'
        ]);
    }
}
