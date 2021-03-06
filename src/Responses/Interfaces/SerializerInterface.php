<?php

namespace Instagram\SDK\Responses\Interfaces;

use Instagram\SDK\DTO\Interfaces\ResponseMessageInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Interface SerializerInterface
 *
 * @package Instagram\SDK\Responses\Interfaces
 */
interface SerializerInterface
{

    /**
     * Decodes the response message.
     *
     * @param HttpResponseInterface $response
     * @return ResponseMessageInterface
     */
    public function decode(HttpResponseInterface $response): ResponseMessageInterface;
}
