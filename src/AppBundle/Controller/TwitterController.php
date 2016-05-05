<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class TwitterController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function tweetAction()
    {
        $twitter = $this->get('endroid.twitter');

// Retrieve the user's timeline
$response = $twitter->query('statuses/user_timeline', 'GET', 'json');
$tweets = $response->getContent();
     

     return new response($tweets);


// Or retrieve the timeline using the generic query method

    }
}