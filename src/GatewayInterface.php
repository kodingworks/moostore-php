<?php

namespace BI;

interface GatewayInterface
{
    public function getName();

    public function getModuleName();

    public function getDefaultParameters();

    public function getParameters();

    public function initialize();
}