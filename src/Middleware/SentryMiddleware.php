<?php

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Response;
use Throwable;

class SentryMiddleware
{
    protected array $options;

    public function __construct($options)
    {
        $this->options = $options;
    }

    /**
     * Example middleware invokable class
     *
     * @param  ServerRequest  $request PSR-7 request
     * @param  RequestHandler $handler PSR-15 request handler
     *
     * @return Response
     */
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        try {
            \Sentry\init($this->options);

            return $handler->handle($request);
        } catch (Throwable $exception) {
            \Sentry\captureException($exception);

            $data['$debug'] = [
                'type' => get_class($exception),
                'message' => $exception->getMessage(),
                'file' => $exception->getFile() . ':' . $exception->getLine()
            ];

            return new Response(
                500,
                new Headers(['Content-Type' => 'application/json']),
                (new StreamFactory())->createStream(json_encode($data))
            );
            throw $exception;
        }
    }
}
