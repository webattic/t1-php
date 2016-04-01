<?php

namespace MediaMath\TerminalOneAPI\Transport;

use GuzzleHttp\Exception\RequestException;
use MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;

use GuzzleHttp\Client;

class GuzzleTransporter implements Transportable
{

    private $guzzle, $authenticator, $parameter_handler;

    public function __construct(Authenticable $authenticator)
    {
        $this->guzzle = new Client();
        $this->authenticator = $authenticator;
        $this->parameter_handler = new GuzzleParameterHandler($authenticator);
    }

    public function read($url, $options)
    {

        try {
            $res = $this->guzzle->request('GET', $url, $this->parameter_handler->read($options, $url));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    public function create($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    public function update($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    public function authUniqueId()
    {
        return $this->authenticator->authUniqueId();
    }

    private function headers($headers)
    {
        $tmp = [];

        foreach ($headers AS $key => $value) {
            $tmp[strtolower(str_replace('-', '_', $key))] = $value[0];
        }

        return new HttpResponseHeaders($tmp);
    }

}