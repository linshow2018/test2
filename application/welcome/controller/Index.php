<?php
namespace app\welcome\controller;
use think\Controller;
class Index extends Controller{
    public function home() 
    { 
       //return '主页'; 
        return view();
    } 
    public function help() 
    { 
        //return '帮助'; 
        return view();
    } 
    public function about() 
    { 
        //return '关于'; 
        return view();
    } 
};

