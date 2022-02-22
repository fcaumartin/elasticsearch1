<?php
// api/src/Model/Tweet.php
namespace App\Model;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

 #[ApiResource]
class Tweet
{
    #[ApiProperty(identifier: true)]
    public string $id = '';

    public User $author;

    public \DateTimeInterface $date;

    public string $message;
}


