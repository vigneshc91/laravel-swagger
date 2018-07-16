<?php

namespace Vigneshc91\LaravelSwagger\Parameters;

interface ParameterGenerator
{
    public function getParameters();

    public function getParamLocation();
}