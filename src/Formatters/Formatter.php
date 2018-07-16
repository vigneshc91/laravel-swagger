<?php

namespace Vigneshc91\LaravelSwagger\Formatters;

abstract class Formatter
{
    protected $docs;

    public function __construct($docs)
    {
        $this->docs = $docs;
    }

    abstract public function format();
}