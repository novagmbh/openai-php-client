<?php

declare(strict_types=1);

namespace OpenAI\Exceptions;

use Exception;

final class HttpErrorException extends Exception
{
    /**
     * Creates a new Exception instance.
    */
    public function __construct(private readonly int $statusCode, private readonly string $responseContent, $message)
    {
        parent::__construct($message);
    }

    /**
     * Returns the http status code message.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Returns the response body.
     */
    public function getResponseContent(): string
    {
        return $this->responseContent;
    }
}
