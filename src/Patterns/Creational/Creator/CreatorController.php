<?php


namespace Patterns\Creational\Creator;


class CreatorController
{

    public function index()
    {
        echo "Testing ConcreteCreator1:\n";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "\n\n";

        echo "Testing ConcreteCreator2:\n";
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));

    }

    function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }
}