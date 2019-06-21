<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string
<<<<<<< HEAD
     */
    protected $proxies;
=======
     */ 
    protected $proxies;   
>>>>>>> 1c8e40e6b76c408e27fb531c950c0a2d732d5e71

    /**
     * The headers that should be used to detect proxies.
     *
<<<<<<< HEAD
     * @var int
=======
     * @var int 
>>>>>>> 1c8e40e6b76c408e27fb531c950c0a2d732d5e71
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
