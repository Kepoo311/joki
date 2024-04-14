<?php

namespace App\Providers;

use App\Models\chat;
use Illuminate\Support\Number;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('uang', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });

        
        
    }
}
