<?php
namespace Ponup\ddd\Shader;

class Fragment extends Code {

    public function __construct($source, $sourceIsCode = false) {
        parent::__construct(self::FRAGMENT, $source, $sourceIsCode);
    }
}

