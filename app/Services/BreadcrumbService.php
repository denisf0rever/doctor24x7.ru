<?php

namespace App\Services;

class BreadcrumbService
{
    protected $breadcrumbs = [];

    public function add(string $name, string $title, string $url)
    {
        $this->breadcrumbs[$name][] = ['title' => $title, 'url' => $url];
    }

    public function getAll(string $name): array
    {
        return $this->breadcrumbs[$name];
    }
}