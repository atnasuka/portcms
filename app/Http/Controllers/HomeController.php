<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\View\View;
use App\Models\Stat;

class HomeController extends Controller
{
    public function index(): View
    {
        $siteSetting = SiteSetting::query()->first();

        $projects = Project::query()
            ->where('is_active', true)
            ->orderBy('order_no')
            ->get();

        $testimonials = Testimonial::query()
            ->where('is_active', true)
            ->orderBy('order_no')
            ->get();

        $faqs = Faq::query()
            ->where('is_active', true)
            ->orderBy('order_no')
            ->get();

        $latestPosts = Post::query()
            ->where('is_published', true)
            ->latest('published_at')
            ->limit(3)
            ->get();

        $stats = Stat::query()
            ->where('is_active', true)
            ->orderBy('order_no')
            ->limit(5)
            ->get();

        return view('home', compact(
            'siteSetting',
            'projects',
            'testimonials',
            'faqs',
            'latestPosts',
            'stats'
        ));
    }
}