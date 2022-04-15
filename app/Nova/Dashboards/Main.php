<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewProject;
use App\Nova\Metrics\ProjectPerMonths;
use App\Nova\Metrics\ProjectPerUser;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            //new Help,
            new NewProject ,
            new ProjectPerMonths ,
            new ProjectPerUser
        ];
    }
}
