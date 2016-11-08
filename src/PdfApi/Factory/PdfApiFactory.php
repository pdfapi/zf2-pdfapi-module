<?php

/**
 * Created by IntelliJ IDEA.
 * User: tobre
 * Date: 07/11/2016
 * Time: 17:41
 */

namespace PdfApi\Factory;

use PdfApi\PdfApi;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PdfApiFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = new PdfApi($serviceLocator->get('config')['pdfapi']['apiKey']);
        return $service;
    }
}