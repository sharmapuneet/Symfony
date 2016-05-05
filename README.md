Symfony Demo Application
========================

The "Symfony Demo Application" is a reference application created to show how
to develop Symfony applications following the recommended best practices.

[![Build Status](https://travis-ci.org/symfony/symfony-demo.svg?branch=master)](https://travis-ci.org/symfony/symfony-demo)

Requirements
------------

  * PHP 5.3 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements](http://symfony.com/doc/current/reference/requirements.html).

If unsure about meeting these requirements, download the demo application and
browse the `http://localhost:8000/config.php` script to get more detailed
information.

Installation
------------

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

First, install the [Symfony Installer](https://github.com/symfony/symfony-installer)
if you haven't already. Then, install the Symfony Demo Application executing
this command anywhere in your system:

```bash
$ symfony demo

# if you're using Windows:
$ php symfony demo
```

If the `demo` command is not available, update your Symfony Installer to the
most recent version executing the `symfony self-update` command.

> **NOTE**
>
> If you can't use the Symfony Installer, download and install the demo
> application using Git and Composer:
>
>     $ git clone https://github.com/symfony/symfony-demo
>     $ cd symfony-demo/
>     $ composer install --no-interaction

Usage
-----

If you have PHP 5.4 or higher, there is no need to configure a virtual host
in your web server to access the application. Just use the built-in web server:

```bash
$ cd symfony-demo/
$ php app/console server:run
```

This command will start a web server for the Symfony application. Now you can
access the application in your browser at <http://localhost:8000>. You can
stop the built-in web server by pressing `Ctrl + C` while you're in the
terminal.

> **NOTE**
>
> If you're using PHP 5.3, configure your web server to point at the `web/`
> directory of the project. For more details, see:
> http://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html

Twitter Bundle
==============

*By [endroid](http://endroid.nl/)*

[![Build Status](https://secure.travis-ci.org/endroid/EndroidTwitterBundle.png)](http://travis-ci.org/endroid/EndroidTwitterBundle)
[![Latest Stable Version](https://poser.pugx.org/endroid/twitter-bundle/v/stable.png)](https://packagist.org/packages/endroid/twitter-bundle)
[![Total Downloads](https://poser.pugx.org/endroid/twitter-bundle/downloads.png)](https://packagist.org/packages/endroid/twitter-bundle)

This bundle enables you to use Endroid [`Twitter`](https://github.com/endroid/Twitter) as a service in your Symfony project.
It also provides an API controller that takes a local API request, adds an OAuth signature to it and returns the corresponding
Twitter API response. This enables you to expose the Twitter API on your own domain without having to bother about OAuth
signing your requests.

For more information see the [endroid/Twitter](https://github.com/endroid/Twitter) repository and the [Twitter API](https://dev.twitter.com/docs/api/1.1).

[![knpbundles.com](http://knpbundles.com/endroid/EndroidTwitterBundle/badge-short)](http://knpbundles.com/endroid/EndroidTwitterBundle)

## Requirements

* Symfony
* Dependencies:
 * [`Buzz`](https://github.com/kriswallsmith/Buzz)
 * [`Twitter`](https://github.com/endroid/Twitter)

## Installation

Use [Composer](https://getcomposer.org/) to install the bundle.

``` bash
$ composer require endroid/twitter-bundle
```

Then enable the bundle via the kernel.

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Endroid\Bundle\TwitterBundle\EndroidTwitterBundle(),
    );
}
```

## Configuration

### config.yml

```yaml
endroid_twitter:
    consumer_key: "..."
    consumer_secret: "..."
    access_token: "..."
    access_token_secret: "..."
```

## Routing

``` yml
twitter:
    path: /tweety
    defaults: 
        _controller: AppBundle:Twitter:tweet  
```

This exposes the Twitter API via <yourdomain>/twitterapi. This means that instead of sending a signed request to
https://dev.twitter.com/docs/api/1.1/* you can now send an unsigned request to <yourdomain>/twitterapi/*. Make sure you
secure this area if you don't want others to be able to post on your behalf.

## Usage

After installation and configuration, the service can be directly referenced from within your controllers.

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class TwitterController extends Controller
{
    /**
     * @Route("/tweety")
     */
    public function tweetAction()
    {
        $twitter = $this->get('endroid.twitter');

// Retrieve the user's timeline
$response = $twitter->query('statuses/user_timeline', 'GET', 'json');
$tweets = $response->getContent();
     

     return new response($tweets);
```

url - http://localhost:8000/tweety
It will produce Json content for the latest tweets.

## Versioning

Version numbers follow the MAJOR.MINOR.PATCH scheme. Backwards compatible
changes will be kept to a minimum but be aware that these can occur. Lock
your dependencies for production and test your code when upgrading.

## License

This bundle is under the MIT license. For the full copyright and license
information please view the LICENSE file that was distributed with this source code.

