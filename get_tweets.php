<?php
require_once('twitter_proxy.php');

$oauth_access_token = '2567397180-4kq0KIh17ypsnuFE9o2V1dFh9SfI4J1flejyGvA';
$oauth_access_token_secret = 'AwYNOPyxxSdkiTlCXREOdECD1bxMoworzWFyF10VQFCs3';
$consumer_key = 'E7ddmSw6bx1LgXQv5qCA60mbY';
$consumer_secret = 'tfydzyKOEhhxJEtxdEQdqXvurD01UAy8ZhDewM2BvmAJ2No3Go';
$user_id = '2567397180';
$screen_name = 'CrimsonNinja1';
$count = 10;

$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;

$twitter_proxy = new TwitterProxy(
		$oauth_access_token,
		$oauth_access_token_secret,
		$consumer_key,
		$consumer_secret,
		$user_id,
		$screen_name,
		$count
);

$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;