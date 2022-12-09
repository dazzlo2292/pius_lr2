<?php

namespace App\Console\Commands;

use App\Model\Banners;
use Illuminate\Console\Command;

class DeactivateBannerCommand extends Command
{

    protected $signature = 'banner:deactivate {id}';

    protected $description = 'Deactivated banner';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $banner = Banner::query()->find(this->argument('id'));
        $banner->active = false;
        $banner->save();
    }
}
