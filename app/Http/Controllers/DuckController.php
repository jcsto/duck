<?php

namespace App\Http\Controllers;

use App\Http\Traits\DucksTrait;

class DuckController extends Controller
{
    use DucksTrait;
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function walk() {
        echo '-- Walking --';
    }
    
    public function sleep() {
        echo '-- Sleeping --';
    }
    
    public function eat() {
        echo '-- Eating --';
    }
    
    public function breath() {
        echo '-- Breathing --';
    }
    
    public function wakeUp() {
        $this->squawk();
    }
    
    public function travelBigDistance() {
        $this->fly();
    }
    
    public function show() {
        $ducks = \App\Duck::all();
        return view('duck', compact('ducks'));
    }
    
}
