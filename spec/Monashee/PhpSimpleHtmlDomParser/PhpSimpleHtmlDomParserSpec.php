<?php

namespace spec\Monashee\PhpSimpleHtmlDomParser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PhpSimpleHtmlDomParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Monashee\PhpSimpleHtmlDomParser\PhpSimpleHtmlDomParser');
    }
}
