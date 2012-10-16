<?php
// Thank You Joseph! http://wildlyinaccurate.com/testing-laravel-controllers

abstract class ControllerTestCase extends PHPUnit_Framework_TestCase
{

    public function call($destination, $parameters = array(), $method = 'GET')
    {
        \Laravel\Request::foundation()->server->add(array(
            'REQUEST_METHOD' => $method,
        ));

        return \Laravel\Routing\Controller::call($destination, $parameters);
    }

    public function get($destination, $parameters = array())
    {
        return $this->call($destination, $parameters, 'GET');
    }

    public function post($destination, $post_data, $parameters = array())
    {
        $this->clean_request();
        \Laravel\Request::foundation()->request->add($post_data);

        return $this->call($destination, $parameters, 'POST');
    }

    private function clean_request()
    {
        $request = \Laravel\Request::foundation()->request;

        foreach ($request->keys() as $key)
        {
            $request->remove($key);
        }
    }

}

/*
How to use it

    public function testSignupWithValidData()
    {
        $response = $this->post('account@signup', array(
            'username' => 'validusername',
            'email' => 'some@validemail.com',
            'password' => 'passw0rd',
            'password_confirm' => 'passw0rd',
        ));
        $this->assertEquals('302', $response->foundation->getStatusCode());

        $session_errors = \Laravel\Session::instance()->get('errors');
        $this->assertNull($session_errors);
    }

}

*/