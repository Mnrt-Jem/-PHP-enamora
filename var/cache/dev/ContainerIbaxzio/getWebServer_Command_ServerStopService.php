<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_stop' shared service.

$this->services['web_server.command.server_stop'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand();

$instance->setName('server:stop');

return $instance;
