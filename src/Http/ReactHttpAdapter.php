<?php
namespace Ruan\DP\Http;

class ReactHttpAdapter implements HttpAdapter
{
    /**
     * Summary of post
     * @return void
     */
    public function post(string $url, array $data = []):void
    {
      echo "react php";
    }

}