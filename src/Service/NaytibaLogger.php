<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class NaytibaLogger 
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logInfoAboutNaytiba(string $naytiba, Request $request): string|null
    {
        if(!$naytiba) {
            return "naytiba value is incorrect or null";
        }


        $this->logger->notice("naytiba ". $naytiba ." has been visited and host is " . $request->headers->get('host'));
        return null;
    }
}