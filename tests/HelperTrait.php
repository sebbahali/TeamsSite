<?php

namespace Tests;

trait HelperTrait
{
    public function dashboardUrl(string $url, string|array $param = []): string
    {
        return route($url, $param);
    }
}
