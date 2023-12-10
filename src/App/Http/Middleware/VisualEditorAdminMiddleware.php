<?php declare(strict_types=1);

namespace Rchitector\VisualEditor\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisualEditorAdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

}
