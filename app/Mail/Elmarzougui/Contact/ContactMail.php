<?php

declare(strict_types=1);

namespace App\Mail\Elmarzougui\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    private $data;

    /**
     * ContactMail constructor.
     * @param $data
     */
    public function __construct(
        $data
    )
    {
        $this->data = $data;
    }

    /**
     * @return $this
     */
    public function build(): self
    {
        return $this->from('no-replay@' . request()->getHost(), 'website')
            ->subject('Contact website :')
            ->view('emails.ContactUs')
            ->with('data', (object)$this->data);
    }
}
