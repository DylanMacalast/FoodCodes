<?php
use \App\Includes\Views\SignUpView;
use \App\Includes\Views\BaseView;
use PHPUnit\Framework\TestCase;
// This 'use' statement could obviouly change depending on the namespace of the class it is calling

class SignUpViewTest extends TestCase
{
    public function testSignUpView()
    {
        // It is this bit that is changing
        // I think this way looks a lot nicer and easier todo it
        $view = new SignUpView();
        $view->setFirstname('Billy');
        $this->assertEquals($view->getFirstname(), 'Billy');
    }
}