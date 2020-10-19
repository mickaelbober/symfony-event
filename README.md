Symfony Event Application
============

The "Symfony Event Application" is a simple application to show how to response a 
request with an event following the [Symfony Best Practices][1].

Requirements
------------

Require the [usual Symfony application requirements][2].

  * PHP 7.2.9 or higher
  * Some PHP extensions
  * Composer
  * Symfony CLI

Installation
------------

Clone the [repository][3] on your computer:

```bash
$ git clone https://github.com/mickaelbober/symfony-event.git symfony-event
```

Composer
------------

[Download Composer][4] to install the `composer` binary on your computer and install
dependencies to the `./vendor` directory.

```bash
$ cd symfony-event/
$ composer install
```

Symfony CLI
------------

[Download Symfony][5] to install the `symfony` binary on your computer. 

```bash
$ wget https://get.symfony.com/cli/installer -O - | bash
```

Run this command and access the application in your
browser at the given URL (<https://localhost:8000> by default):

```bash
$ cd symfony-event/
$ symfony server:start
```

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][6] like Nginx or
Apache to run the application.

References
------------

 * [The EventDispatcher Component][7]
 * [Built-in Symfony Events][8]
 * [Symfony Demo autoconfigure][9]
 * [Class Event][10]
 * [Class KernelEvent extends Event][11]
 * [Class FilterControllerEvent extends KernelEvent][12]
 * [Class GetResponseEvent extends KernelEvent][13]
 * [Class GetResponseForExceptionEvent extends GetResponseEvent][14]
 * [Openclassrooms : Tutorial][15]

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/setup.html
[3]: https://github.com/mickaelbober/symfony-event
[4]: https://getcomposer.org/download/
[5]: https://symfony.com/download
[6]: https://symfony.com/doc/current/setup/web_server_configuration.html
[7]: https://symfony.com/doc/current/components/event_dispatcher.html
[8]: https://symfony.com/doc/current/reference/events.html
[9]: https://github.com/symfony/demo/blob/v1.2.5/config/services.yaml#L13
[10]: https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/EventDispatcher/Event.php
[11]: https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/HttpKernel/Event/KernelEvent.php
[12]: https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/HttpKernel/Event/FilterControllerEvent.php
[13]: https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/HttpKernel/Event/GetResponseEvent.php
[14]: https://github.com/symfony/symfony/blob/4.1/src/Symfony/Component/HttpKernel/Event/GetResponseForExceptionEvent.php
[15]: https://openclassrooms.com/fr/courses/5489656-construisez-un-site-web-a-l-aide-du-framework-symfony-4/5516991-realisez-une-application-configurable-et-extensible
