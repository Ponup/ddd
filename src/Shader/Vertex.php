<?php
namespace Ponup\ddd\Shader;

class Vertex extends Code {

    public function __construct($source, $sourceIsCode = false) {
        parent::__construct(self::VERTEX, $source, $sourceIsCode);
    }
}

