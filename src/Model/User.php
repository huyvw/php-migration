<?php

namespace Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="place", indexes={@ORM\Index(columns={"business_id"})})
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="created_at", type="bigint")
    */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_at", type="bigint")
    */
    private $updatedAt;
}
