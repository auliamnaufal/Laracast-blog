<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;


class MailchimpNewsletter
{

	public function __construct(protected ApiClient $client)
	{
		
	}

	public function subscribe($email)
	{

		return $this->client->lists->addListMember(config('services.mailchimp.list.subscribers'), [
			'email_address' => $email,
			'status' => 'subscribed'
		]);
	}
}
