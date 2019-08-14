<?php

namespace App\Http\Traits;

trait DucksTrait {
    
    public function squawk() {
        return '-- Squawking --';
    }
    
    public function fly() {
        return '-- Flying --';
    }
}
