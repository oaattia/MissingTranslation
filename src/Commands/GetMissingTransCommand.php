<?php

namespace Oaattia\MissingTranslation\Commands;

use Illuminate\Console\Command;
use Oaattia\MissingTranslation\Helper;

class GetMissingTransCommand extends Command
{
    /**
     * @var Helper
     */
    private $manager;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oaattia:missing';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $description = 'find the missing translations string in file';

    /**
     * GetMissingTransCommand constructor.
     *
     * @param Helper $manager
     */
    public function __construct(Helper $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // get all views from the current file
        // $this->factory->getViews($path);
        echo $this->ask("do you want to get missing string in the file");
    }

}