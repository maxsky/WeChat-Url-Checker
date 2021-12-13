<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxsky
 * Date: 2021/12/13
 * Time: 6:24 PM
 */

use MaxSky\WeChat\UrlChecker;
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {

    public function testUrlCheck() {
        $checker = new UrlChecker();

        $this->assertTrue($checker->check('https://github.com'));
    }
}
