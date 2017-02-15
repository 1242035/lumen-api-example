<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-09T16:25:42+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-13T11:19:34+07:00
# @Copyright: Onemax.ltd.co


namespace App\Http\Middleware;

use Closure;

class MatchIpMiddleware
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
        $allowIp = config('ip.allow');
        $requestIp = $request->server('REMOTE_ADDR');
        if( ! in_array($requestIp ,$allowIp ) ) {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
