<?php
namespace App\Includes\Views;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Views\BaseView as BaseView;


class SignUpView extends BaseView
{
    public $firstname;
    public function setFirstname($firstName)
    {
        $this->firstname = $firstName;
    }

    public function getFirstname()
    {

        echo "hello";
        return $this->firstname;
    } 

    public function testingSomething()
    {
        return $this->woop();
    }
    
}

$test = new SignUpView();
$test->getFirstname();
$test->testingSomething();