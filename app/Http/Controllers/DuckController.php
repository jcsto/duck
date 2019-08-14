<?php

namespace App\Http\Controllers;

use App\Http\Traits\DucksTrait;
use App\Http\Traits\LoggingTrait;

class DuckController extends Controller
{
    use DucksTrait;
    use LoggingTrait;
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function walk() {
        $msg = '-- Walking --';
        self::log($msg);
        return $msg;
    }
    
    public function sleep() {
        $msg = '-- Sleeping --';
        self::log($msg);
        return $msg;
    }
    
    public function eat() {
        $msg = '-- Eating --';
        self::log($msg);
        return $msg;
    }
    
    public function breath() {
        $msg = '-- Breathing --';
        self::log($msg);
        return $msg;
    }
    
    public function wakeUp() {
        $msg = $this->squawk();
        self::log($msg);
        return $msg;
    }
    
    public function travelBigDistance() {
        $msg = $this->fly();
        self::log($msg);
        return $msg;
    }
    
    public function show() {
        $ducksModel = new \App\Duck();
        $ducks = $ducksModel::all();
        $color = $ducksModel->getColor();
        $height = $ducksModel->getHeight();
        return view('duck', compact('ducks', 'color', 'height'));
    }
    
}
