<?php
namespace app\index\controller;

class Admin
{
    public function index()
    {
		if(isset($_GET["content"])){
			file_put_contents("ip.list",$_GET["content"]);
			$content = $_GET["content"];
		}else{
			$content = file_get_contents("ip.list");
		}
		$this->content = $content;
	   return view('index',['content'=>$content]);
	}
}
