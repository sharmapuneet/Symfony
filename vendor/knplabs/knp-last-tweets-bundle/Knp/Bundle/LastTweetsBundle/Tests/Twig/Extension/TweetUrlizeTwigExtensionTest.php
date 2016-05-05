<?php

namespace Knp\Bundle\LastTweetsBundle\Tests\Twig\Extension;

use Knp\Bundle\LastTweetsBundle\Twig\Extension\TweetUrlizeTwigExtension;

class TweetUrlizeTwigExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getUrlizedData
     */
    public function testUrlize($expected, $text)
    {
        $this->assertEquals($expected, TweetUrlizeTwigExtension::urlize($text));
    }

    public function getUrlizedData()
    {
        return array(
            array(
                'I am <a href="http://twitter.com/mbontemps">@mbontemps</a>. What about you?',
                'I am @mbontemps. What about you?'
            ),
            array(
                'I am <a href="http://twitter.com/search/symfony">#symfony</a>. What about you?',
                'I am #symfony. What about you?'
            ),
            array(
                'I am <a href="http://www.knplabs.com/en">http://www.knplabs.com/en</a> - What about you?',
                'I am http://www.knplabs.com/en - What about you?'
            ),
            array(
                'I am <a href="http://www.knplabs.com/en">www.knplabs.com/en</a> - What about you?',
                'I am www.knplabs.com/en - What about you?'
            ),
            array(
                "I&#039;m here",
                "I&#039;m here"
            ),
            array(
                '<a href="http://twitter.com/search/hashMe">#hashMe</a> atTheBeginning',
                "#hashMe atTheBeginning",
            ),
        );
    }
}
