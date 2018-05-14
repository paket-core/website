<?php

namespace TokenChef\IcoTemplate\Jobs;

use TokenChef\IcoTemplate\Mail\EventEmail;

class SendEventEmail extends SimpleJob
{

    protected $notify;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($notify, $data)
    {
        $this->notify = $notify;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to($this->notify)->send(new EventEmail($this->data));
        try {
            if (count(\Mail::failures()) > 0) {
                \Log::info('Error with sending email with nofitaction to ' . $this->notify);
            }
        } catch (\Exception $err) {
            \Log::info($err->getMessage());
        }
    }
}
