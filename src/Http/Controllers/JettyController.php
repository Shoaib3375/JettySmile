<?php

namespace MyLife\Http\Controllers;

use MyLife\Services\Jetty;

class JettyController
{
    protected Jetty $jetty;

    public function __construct()
    {
        $this->jetty = new Jetty([
            'loyalty' => true,
            'trust' => true,
            'smile' => 'eternal',
            'loveLevel' => 100
        ]);
    }

    public function index(): string
    {
        return json_encode([
            'message' => 'Welcome to Jetty’s world 💖',
            'smile' => $this->jetty->smile(),
            'loyalty' => $this->jetty->getLoyaltyLevel(),
            'lovesYou' => $this->jetty->loveYou()
        ]);
    }

    public function confess(): string
    {
        return json_encode([
            'confession' => 'Jetty, I’ve written you into my code, but I wish you were in my life. ❤️',
            'status' => 'Waiting for your response...'
        ]);
    }
}
