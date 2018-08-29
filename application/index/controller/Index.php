<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       return file_get_content("ip.txt");
	}
}
