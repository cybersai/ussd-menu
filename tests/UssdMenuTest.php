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
        $this->assertInstanceOf(UssdMenu::class, UssdMenu::from('Hello Ussd'));
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals('Hello Ussd', UssdMenu::from('Hello Ussd'));
    }

    public function testCanBeConvertedToStringExplicitly()
    {
        $this->assertEquals('Hello Ussd', UssdMenu::from('Hello Ussd')->toString());
    }

    public function testCanHaveLineBreak()
    {
        $this->assertEquals("\n", UssdMenu::instance()->lineBreak());
    }

    public function testCanHaveDoubleLineBreak()
    {
        $this->assertEquals("\n\n", UssdMenu::instance()->lineBreak(2));
    }

    public function testCanHaveTextWithLineBreak()
    {
        $this->assertEquals("Hello Ussd\n", UssdMenu::instance()->line("Hello Ussd"));
    }

    public function testCanHaveTextWithNoLineBreak()
    {
        $this->assertEquals("Hello Ussd", UssdMenu::instance()->text("Hello Ussd"));
    }

    public function testCanParseAListToString()
    {
        $this->assertEquals("1.New Gen\n2.Old Gen",
            UssdMenu::instance()->listing(['New Gen', 'Old Gen']));
    }

    public function testCanPaginateAndParseAListToString()
    {
        $this->assertEquals("3.Extra",
            UssdMenu::instance()->paginateListing(['New Gen', 'Old Gen', 'Extra'], 2, 2));
    }

    public function testMethodCanBeChained()
    {
        $this->assertEquals("Hello Ussd\n1.Ok\n2.Fine\nBye",
            UssdMenu::instance()->line('Hello Ussd')->listing(['Ok', 'Fine'])->lineBreak()->text('Bye'));
    }
}