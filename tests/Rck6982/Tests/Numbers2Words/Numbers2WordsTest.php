<?php
namespace Rck6982\Tests\Numbers2Words;

use Rck6982\Numbers2Words\Numbers2Words;

class Numbers2WordsTest extends \PHPUnit_Framework_TestCase
{
    public function testToWords()
    {
        $valores = array(
            45 => 'cuarenta y cinco',
            20 => 'veinte',
            458 => 'cuatrocientos cincuenta y ocho',
            8659 => 'ocho mil seiscientos cincuenta y nueve',
            32126865 => 'treinta y dos millones ciento veintiseis mil ochocientos sesenta y cinco',
        );

        $obj = new Numbers2Words();

        foreach ($valores as $key => $value) {
            $this->assertEquals($value, $obj->toWords($key));
        }
    }

}