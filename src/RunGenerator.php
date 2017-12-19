<?php

namespace App;

use Dotenv\Dotenv;
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
     * Generate WSDL classes
     *
     * @return void
     */
    public static function execute()
    {
        $dotenv = new Dotenv(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);
        $dotenv->load();

        $generator = new Generator();
        $generator->generate(
           new Config(array(
               'inputFile' => getenv('SELLIGENT_SOAP_WSDL'),
               'outputDir' => __DIR__.'/Selligent/MessageStudio',
               'namespaceName' => 'Selligent\MessageStudio'
           ))
        );
    }

    /**
     * Test connection
     *
     * @return void
     */
    public static function test()
    {

    }
}