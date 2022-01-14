<?php

namespace App\Http\Middleware;

use App\Enum\BreadCrumbsEnum;
use Closure;
use Illuminate\Http\Request;

class BreadCrumbs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path() != '/' && !empty($request->path()) && strpos($request->path(), 'backend') === false ) {
            $breadcrumbs_data = BreadCrumbsEnum::BREAD_CRUMBS;
            $courses = BreadCrumbsEnum::COURSES;
            $path_array = explode('/', $request->path());
            foreach ($path_array as $path_name) {
                if (is_numeric($path_name) || $path_name == 'post') {
                    continue;
                }
                if (array_key_exists($path_name, $courses)) {
                    $path_name = $courses[$path_name];
                }
                $crumbs[$path_name] = $breadcrumbs_data[$path_name] ?? false;
            }
            view()->share([
                'breadcrumbs' => $crumbs,
            ]);
        }

        return $next($request);
    }
}
