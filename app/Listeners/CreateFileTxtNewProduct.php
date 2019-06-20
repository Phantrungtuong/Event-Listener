<?php

namespace App\Listeners;

use App\Events\NewProduct;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\File;

class CreateFileTxtNewProduct implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */

    public $tries = 3;
    public $timeout = 60;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewProduct  $event
     * @return void
     */
    public function handle(NewProduct $event)
    {
        sleep(6);
        echo "Start create file";
        $fileName = $event->product->id . '.txt';
        $data = 'Sản phẩm mới tạo: ' . $event->product->name . ' với ID: ' . $event->product->id;
        File::put(public_path('txt\ ' .$fileName), $data);
        echo "End create file";
    }
}
