<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Log;

class ParseJob extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo "construct..";
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo "Handle job";
    }

    public function fire($job, $data)
    {
        Log::info('We can put this in the database: ' . print_r($data, TRUE));
        $job->delete();
    }
}
