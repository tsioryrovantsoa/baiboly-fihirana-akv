<?php

namespace App\Console\Commands;

use App\Jobs\ContenuInfoFile;
use App\Jobs\ContenuInfoLatest;
use Illuminate\Console\Command;

class ContenuInfoUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contenu:update {date?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update date and size file of contenu';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if((!empty($this->argument('date')))){
            ContenuInfoLatest::dispatch($this->argument('date'));
            $this->info("The job ContenuInfoLatest was in process! Date : {$this->argument('date')}");
        }else{
            ContenuInfoFile::dispatch();
            $this->info("The job ContenuInfoFile is in process");
        };
    }
}
