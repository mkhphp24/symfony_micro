<?php


namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Exception;
class GitService
{
    public function getuser($user='mkhphp24' )
    {
        $client = HttpClient::create();
        $response = $client->request('GET', "https://api.github.com/users/$user");
        $statusCode = $response->getStatusCode();

        if ($statusCode == 404) {
            throw new Exception("User Not Found", $statusCode);
        }
        if ($statusCode !== 200) {
            throw new Exception("Cannot fetch data due to an error", $statusCode);
        }
        return $response->toArray();
    }


}
