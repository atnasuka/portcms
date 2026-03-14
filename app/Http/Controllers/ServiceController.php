<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $siteSetting = SiteSetting::query()->first();

        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('order_no')
            ->get();

        return view('services.index', compact('siteSetting', 'services'));
    }

    public function show(string $slug): View
    {
        $siteSetting = SiteSetting::query()->first();

        $service = Service::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('services.show', compact('siteSetting', 'service'));
    }
}