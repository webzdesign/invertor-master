<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('product_xml:cron')->daily();
Schedule::command('ebike:generate-sitemap')->daily();
