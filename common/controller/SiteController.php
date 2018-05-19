<?php

namespace controller;
use rk\base\Controller;
class SiteController extends Controller
{
    public function indexAction(){
        echo $this->render('site.welcome');
    }
    public function signinAction(){
       echo $this->renderHelloWorld();
    }
}