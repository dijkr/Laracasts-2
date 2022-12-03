<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
       die('subscribing with Drip');
    }
}

class NewsletterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'johndoe@example.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();
$controller->store(new Drip());