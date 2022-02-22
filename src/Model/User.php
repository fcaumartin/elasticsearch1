<?php
// api/src/Model/User.php
namespace App\Model;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource]
class User
{
    #[ApiProperty(identifier: true)]
    public string $id = '';

    public string $gender;

    public int $age;

    public string $first_name;

    public string $last_name;

    /**
     * @var Tweet[]
     */
    public iterable $tweets = [];
}