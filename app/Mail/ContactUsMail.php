<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $details;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->details;
        // print_r($data); die();
        $email =  $this->subject($data['subject'])
                    ->view('emails.contactus',["details"=>$data]);
        if(isset($data['attachments']))
        {
         $email = $this->attach($data['attachments']);
        }
        return $email;
                    // ->attachFromStorage($data['attachments']);
    }
}