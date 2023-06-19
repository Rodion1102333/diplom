<?php

namespace Tests;

use App\Models\User;
use  Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class AuthTest extends TestCase
{
    public function test_userCanViewLoginForm()
    {
        $response = $this->get('login');
        $response->assertSuccessful();
        $response->assertViewIs('login');
    }

    public function test_the_application_returns_a_successful_response()
    {


        $user = User::factory()->create();

        $response = $this->actingAs($user)->withSession([
            'user' => "1"
        ])->get('/home');
        $response->assertStatus(404);

    }

//

    public function test_userCanViewRegisterForm()
    {
        $response = $this->get('register');
        $response->assertSuccessful();
        $response->assertViewIs('register');
    }

    public function testNull()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_cart()
    {
        $response = $this->get('/cart/show');
        $response->assertViewIs('cart.cart-modal');
    }

    public function test_Authenticated()
    {
        Auth::loginUsingId(1);
        $this->assertAuthenticated();
    }
    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
//    public function testHeader()
//    {
//        $response = $this
//            ->withHeader([
//                "ExampleHeader" => "Example"
//            ])
//            ->json('POST','/users',['data' => "HelloWorld"]);
//        $response->assertStatus(200)->assertJson([
//            'status' =>  "success"
//        ])->assertHeader("ResponseHeader","Response");
//    }
}
//    public function test_userCanNotViewLoginWhenAuthentFicated()
//    {
//        $user = factory(User::class)->create();
//
//        $response = $this->actingAs($user)->get('login');
//        $response->assertRedirect('/home');
//    }
//
//    public function test_userCanLoginWithCorrectCredentials()
//    {
//        $password = 'pa';
//
//        $user = factory(User::class)->create([
//            'password' => bcrypt($password)
//        ]);
//        $response = $this->post('/login', [
//            'email' => $user->email,
//            'password' => $password,
//        ]);
//        $response->assertRedirect('/public');
//        $this->assertAuthenticatedAs($user);
//    }
//
//    public function test_userRememberMe()
//    {
//        $password = 'parol';
//        $user = factory(User::class)->create([
//            'id' => random_int(1, 100),
//            'password' => bcrypt($password)
//        ]);
//        $response = $this->post('/login' . [
//                'email' => $user->email,
//                'password' => $password,
//                'remember' => 'on'
//            ]);
//        $response->assertRedirect('/home');
//        $this->assertAuthenticatedAs($user);
//
//        $response->assertCookie(Auth::guard()->getRecallerName(), vsprintf("sdasd213", [
//            $user->id,
//            $user->getRememberToken(),
//            $user->password
//        ]));
//    }
//}
