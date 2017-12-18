<?php

namespace App;

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

require __DIR__.'/../vendor/autoload.php';

RunGenerator::execute();

/**
*  RunGenerator class
*
*  Generates all PHP classes based on Selligent's SOAP WSDL
*/
class RunGenerator
{
    /**
     *
     *
     * @return void
     */
    public static function execute() {
        $generator = new Generator();
        $generator->generate(
           new Config(array(
               'inputFile' => 'https://activenetwork.hosted.strongview.com:443/sm/services/mailing/v2?wsdl',
               'outputDir' => __DIR__.'/Selligent/MessageStudio',
               'namespaceName' => 'Selligent\MessageStudio'
           ))
        );
    }
}