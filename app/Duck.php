<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duck extends Model
{
    public $color;
    public $height;
    
    public function __construct(array $attributes = [])
    {
        $color = 'gray';
        $height = 10;
        if (!empty($attributes)) {
            $color = $attributes['color'];
            $height = $attributes['height'];
        }
        $this->setColor($color);
        $this->setHeight($height);
        parent::__construct($attributes);
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }
    
    public function getHeight() {
        return $this->height;
    }
}
