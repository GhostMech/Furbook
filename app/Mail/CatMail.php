<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use App\Cat;

class CatMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Use the Illuminate\Support\Collection class.
     */
     public $cats;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Collection $cats)
    {
        $this->cats = $cats;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('garyhowardpctech@yahoo.com')
                    ->view('sidebar_hero');
    }
}
