<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as  ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Hello
 * @package App\Entity
 * @ORM\Entity
 * @ApiResource()
 */
class Hello
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var string
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name;
}