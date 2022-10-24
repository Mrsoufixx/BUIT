<?php

namespace App\Traits;

trait ToastAlert {
    protected function toast($message ,$position='top-center',$timer=2000 ) {
        $this-> dispatchBrowserEvent('toast-alert', [
            'type' => 'success',
            'message' => $message ,
            'position' => $position ,
            'timer' => $timer

        ] ) ;
    }
}
