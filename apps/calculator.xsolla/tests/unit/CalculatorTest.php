<?

namespace App\Tests\Util\Unit;

use App\Helpers\MathHelper as MathHelper;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new MathHelper();
        $result = $calculator->add('12345654789723489823795283405', '0.123172386178236182361823');

        $this->assertEquals('12345654789723489823795283405.123172386178236182361823', $result);
    }

    public function testSub()
    {
        $calculator = new MathHelper();
        $result = $calculator->sub(115.280, 15.3);

        $this->assertEquals(99.98, $result);
    }

    public function testMult()
    {
        $calculator = new MathHelper();
        $result = $calculator->mult(12, 13);

        $this->assertEquals(156, $result);
    }
}
