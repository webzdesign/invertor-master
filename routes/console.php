<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('product_xml:cron')->daily();
Schedule::command('invotor:generate-sitemap')->daily();
