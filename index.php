<?php
  require __DIR__ . '/vendor/autoload.php';

  use Dnsimple\Client;

  $client = new Client($_ENV["API_TOKEN"]);

  $response = $client->identity->whoami();
  $whoami = $response->getData();
  $account_id = $whoami->account->id;

  echo "hello world!";
  echo "Account ID: $account_id";
