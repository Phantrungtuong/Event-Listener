<?php

namespace App\Listeners;

use App\Events\NewProduct;
use App\Mail\MailContentAddProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\File;
class SendEmailAfterNewProduct implements ShouldQueue
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
        echo "Start send Email";
        $email = new MailContentAddProduct($event);
        Mail::to('phantrungtuong95@gmail.com')->send($email);
        echo "End send Email";



    }
}
