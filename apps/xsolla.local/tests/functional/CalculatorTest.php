<?

namespace App\Tests\Util\Functional;

use App\Controller\CalculatorController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorTest extends WebTestCase
{
    public function testAddTwo()
    {
        $client = static::createClient();

        $client->request('GET', '/add/12345654789723489823795283405/0.123172386178236182361823');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testAddThree()
    {
        $client = static::createClient();

        $client->request('GET', '/add/10.2/8.8/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSub()
    {
        $client = static::createClient();

        $client->request('GET', '/sub/12/3');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testMult()
    {
        $client = static::createClient();

        $client->request('GET', '/mult/3/4');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
