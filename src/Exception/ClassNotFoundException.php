<?php

namespace BI\Exception;

class ClassNotFoundException extends \Exception implements BIException
{
    protected $message = 'Class Not Found';
}