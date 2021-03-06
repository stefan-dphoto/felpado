<?php

namespace felpado\tests;

use felpado as f;

/*
 * Code from https://github.com/nikic/iter/blob/master/test/IterFnTest.php
 */
class not_fnTest extends felpadoTestCase
{
    public function testIt() {
        $constFalse = f\not_fn(function() { return true; });
        $constTrue = f\not_fn(function() { return false; });
        $invert = f\not_fn(function($bool) { return $bool; });
        $nand = f\not_fn(f\operator('&&'));

        $this->assertEquals(false, $constFalse());
        $this->assertEquals(true, $constTrue());
        $this->assertEquals(false, $invert(true));
        $this->assertEquals(true, $invert(false));
        $this->assertEquals(false, $nand(true, true));
        $this->assertEquals(true, $nand(true, false));
    }
}
