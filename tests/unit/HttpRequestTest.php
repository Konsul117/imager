<?php
#use Codeception\Util\Stub;
#use \Core\Http\HttpRequest;

class HttpRequestTest extends \Codeception\TestCase\Test
{

protected $codeGuy;
    public static function setUpBeforeClass()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST'; // в консоли, вероятнее всего, этого ключа изначально вообще не будет
    }
    public static function tearDownAfterClass()
    {
        unlink('dummy.html'); // стираемый созданный тестом файл
    }
    public function testIsPostRequest()
    {
	$this->assertTrue(true);
         //$request = new HttpRequest; // создаем тестируемый объект. В зависимости от характера теста, создание, возможно, будет разумнее вынести в _before()
         //$this->assertTrue($request->isPostRequest); // выполняем непосредственно проверку поведения, сравнивая isPostRequest с true
    }
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {

    }
}