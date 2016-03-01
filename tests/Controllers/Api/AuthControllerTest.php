<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthControllerTest extends TestCase
{
    protected $params = [
        'email' => 'phamkykhoi@framgia.com',
        'password' => '12345678'
    ];

    
    public function testDeviceId()
    {
        $this->assertEmpty('');
    }

    public function testValidation()
    {
        // When all params correct
        $validator = Validator::make($this->params, [
            'email' => 'required|email|min:5',
            'password' => 'required|min:6'
        ]);
        $this->assertFalse($validator->fails());

        // When email == NULL
        $validator = Validator::make(['email' => ''], ['email' => 'required']);
        $this->assertTrue($validator->fails());

        // When email != NULL
        $validator = Validator::make(['email' => 'phamkykhoi@gmail.com'], ['email' => 'required']);
        $this->assertFalse($validator->fails());

        // When email correct format
        $validator = Validator::make(['email' => 'phamkykhoi@gmail.com'], ['email' => 'email']);
        $this->assertFalse($validator->fails());

        // When email not correct format
        $validator = Validator::make(['email' => 'phamkykhoi#gmail.com'], ['email' => 'email']);
        $this->assertTrue($validator->fails());

        // When email small 5 words
        $validator = Validator::make(['email' => 'abcd'], ['email' => 'min:5']);
        $this->assertTrue($validator->fails());
    }

    public function testAuth()
    {
        $this->assertFalse(Auth::attempt($this->params));
        $this->assertTrue(Auth::attempt(['email' => 'phamkykhoi.info@gmail.com', 'password' => '11111111']));
    }
}
