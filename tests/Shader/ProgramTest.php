<?php
namespace Ponup\ddd\Shader;

class ProgramTest extends \PHPUnit\Framework\TestCase {

    public static function setUpBeforeClass() {
        extension_loaded('opengl') || dl('opengl.' . PHP_SHLIB_SUFFIX);
    }

    /**
     * @requires extension opengl
     */
    public function testProgramIdIsInteger() {
        $program = new Program;
        $this->assertInternalType('int', $program->getId());
    }

    /**
     * @requires extension opengl
     */
    public function testNewProgramHasNoShaders() {
        $program = new Program;
        $this->assertCount(0, $program->getShaders());
    }
}

