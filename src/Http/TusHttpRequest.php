<?php
namespace TusPhpS3\Http;

use TusPhp\Request as TusRequest;
use Symfony\Component\HttpFoundation\Request as HttpRequest;

class UploadHttpRequest
extends TusRequest
{
    public function __construct(HttpRequest $request)
    {
        $this->request = $request;
    }
}
