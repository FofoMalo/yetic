<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
   public function testIsTrue()
   {
        $user = new User();
        $user->setName('Malo')
                ->setFirstname('Florent')
                ->setEmail('malo@florent.com')
                ->setRoles(['ROLE_USER'])
                ->setPassword(('password'));

        $this->assertTrue ($user->getName() === 'Malo');
        $this->assertTrue($user->getFirstname() ==='Florent');
        $this->assertTrue($user->getEmail() ==='malo@florent.com');
        $this->assertTrue($user->getRoles() ===['ROLE_USER']);
        $this->assertTrue($user->getPassword() ==='password');

   }
   public function testIsFalse()
   {
        $user = new User();
        $user     ->setName('False')
                        ->setFirstname('False')
                        ->setEmail('false@.com')
                        ->setRoles(['ROLE_ADMIN'])
                        ->setPassword(('false'));
         $this->assertFalse($user->getName() === 'Malo');
        $this->assertFalse($user->getFirstname() ==='Florent');
        $this->assertFalse($user->getEmail() ==='malo@florent.com');
        $this->assertFalse($user->getRoles() ===['ROLE_USER']);
        $this->assertFalse($user->getPassword() ==='password');

   }
   public function testIsEmpty()
   {
        $user = new User();

        $this->assertEmpty ($user->getName() ); 
        $this->assertEmpty($user->getFirstname() );
        $this->assertEmpty($user->getEmail() );
          
   }
   
}
