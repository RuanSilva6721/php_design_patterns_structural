<?php
namespace Ruan\DP\Http;

interface HttpAdapter {
    public function post(string $url, array $data = []):void;

} 