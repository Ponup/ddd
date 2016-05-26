<?php
namespace Ponup\ddd;

class Shader
{
    /**
     * @var integer
     */
    public $programId;

    public function __construct() {
    }

    public function compileFromPath($vertexPath, $fragmentPath) {
        $vertexCode = file_get_contents($vertexPath);
        $fragmentCode = file_get_contents($fragmentPath);

        $this->compileFromString($vertexCode, $fragmentCode);
    }

    public function compileFromString($vertexCode, $fragmentCode) {
        // Vertex Shader
        $vertex = glCreateShader(GL_VERTEX_SHADER);
        glShaderSource($vertex, 1, $vertexCode, null);
        glCompileShader($vertex);

        // Fragment Shader
        $fragment = glCreateShader(GL_FRAGMENT_SHADER);
        glShaderSource($fragment, 1, $fragmentCode, null);
        glCompileShader($fragment);

        // Shader Program
        $this->programId = glCreateProgram();
        glAttachShader($this->programId, $vertex);
        glAttachShader($this->programId, $fragment);
        glLinkProgram($this->programId);

        // Delete the shaders as they're linked into our program now and no longer necessery
        glDeleteShader($vertex);
        glDeleteShader($fragment);
    }

    /**
     * @throws ShaderException
     */
    public function use() {
        if(null === $this->programId) {
            throw new ShaderException('Program was not compiled');
        }
        glUseProgram($this->programId);
    }
}

