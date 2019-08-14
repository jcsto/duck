<?php

namespace App\Http\Traits;

trait DucksTrait {
    
    public function squawk() {
        echo '-- Squawking --';
    }
    
    public function fly() {
        echo '-- Flying --';
    }
}
