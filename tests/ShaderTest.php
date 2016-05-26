<?php
namespace Ponup\ddd;

class ShaderTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException \Ponup\ddd\ShaderException
     * @expectedExceptionMessage Program was not compiled
     */
    public function testExceptionIsThrownWhenProgramIsNotCompiled() {
        $shader = new Shader;
        $shader->use();
    }
}

