<?php
namespace Ponup\ddd\Shader;

class Geometry extends Code {

    public function __construct($source, $sourceIsCode = false) {
        parent::__construct(self::GEOMETRY, $source, $sourceIsCode);
    }
}

