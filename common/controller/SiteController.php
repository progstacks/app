<?php

namespace app\common\controller;
use rk\base\Controller;
class SiteController extends Controller
{
    public function indexCallback(){
        $this->renderHelloWorld();
    }
}