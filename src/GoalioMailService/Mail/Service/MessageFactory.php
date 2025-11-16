<?php
namespace GoalioMailService\Mail\Service;

use Zend\Mail\Transport\TransportInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\View\Renderer\RendererInterface;

class MessageFactory implements FactoryInterface {

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Message
     */
    public function createService(ServiceLocatorInterface $serviceLocator) {

        /** @var RendererInterface $renderer */
        $renderer = $serviceLocator->get('goaliomailservice_renderer');

        /** @var TransportInterface $transport */
        $transport = $serviceLocator->get('goaliomailservice_transport');

        return new Message($renderer, $transport);
    }
}
