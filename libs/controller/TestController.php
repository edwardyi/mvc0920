<?php
class TestController{
	 function getData(){
	 	 $testModel =new TestModel();
	 	 $data = $testModel->setData();
	 	 $testView = new TestView();
	 	 $testView->display($data);
	 }
	
}