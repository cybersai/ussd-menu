<?php

namespace Cybersai\UssdMenu\Tests;

use Cybersai\UssdMenu\UssdMenu;
use PHPUnit\Framework\TestCase;

class UssdMenuTest extends TestCase
{
    public function testCanBeCreatedFromNothing()
    {
        $this->assertInstanceOf(UssdMenu::class, UssdMenu::instance());
    }
    public function testCanBeCreatedFromValidString()
    {
        $this->assertInstanceOf(UssdMenu::class, UssdMenu::title('Hello Ussd'));
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals('Hello Ussd', UssdMenu::title('Hello Ussd'));
    }

    public function testCanBeConvertedToStringExplicitly()
    {
        $this->assertEquals('Hello Ussd', UssdMenu::title('Hello Ussd')->toString());
    }

    public function testCanHaveSpaces()
    {
        $this->assertEquals("\n", UssdMenu::instance()->space());
    }

    public function testCanHaveDoubleSpaces()
    {
        $this->assertEquals("\n\n", UssdMenu::instance()->space(2));
    }

    public function testCanHaveTextWithSpace()
    {
        $this->assertEquals("Hello Ussd\n", UssdMenu::instance()->line("Hello Ussd"));
    }

    public function testCanHaveTextWithNoSpace()
    {
        $this->assertEquals("Hello Ussd", UssdMenu::instance()->text("Hello Ussd"));
    }

    public function testCanParseAListToString()
    {
        $this->assertEquals("1.New Gen\n2.Old Gen",
            UssdMenu::instance()->list(['New Gen', 'Old Gen']));
    }

    public function testCanPaginateAndParseAListToString()
    {
        $this->assertEquals("3.Extra",
            UssdMenu::instance()->paginateList(['New Gen', 'Old Gen', 'Extra'], 2, 2));
    }

    public function testMethodCanBeChained()
    {
        $this->assertEquals("Hello Ussd\n1.Ok\n2.Fine\nBye",
            UssdMenu::instance()->line('Hello Ussd')->list(['Ok', 'Fine'])->space()->text('Bye'));
    }
}