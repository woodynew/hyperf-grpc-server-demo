<?php

namespace App\Controller;


use GrpcDemo\HiReply;
use GrpcDemo\HiUser;

class HiController extends AbstractController
{
    public function sayHello(HiUser $user)
    {
        $message = new HiReply();
        $message->setMessage("Hello World Grpc");
        $message->setUser($user);
        return $message;
    }
}