<?php
 
namespace App\Http\Middleware;
 
use Closure;
 
class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( \Session::has('locale')) {
            // Récupération de la 'lang' dans Session et activation
            \App::setLocale(\Session::get('locale'));
            //You know default Language in Locale is French
        }
 
        return $next($request);
    }
}