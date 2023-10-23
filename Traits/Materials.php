<?php

trait Materials
{

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
