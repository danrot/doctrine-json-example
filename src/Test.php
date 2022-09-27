<?php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Index(name: "value_idx", columns: ["data_value"])]
class Test
{
    public function __construct($name, $data)
    {
        $this->name = $name;
        $this->data = $data;
    }

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private $id;

    #[ORM\Column(type: "string")]
    private $name;

    #[ORM\Column(type: "json")]
    private $data;

    // Just required because schema tool will remove virtual column otherwise
    #[ORM\Column(type: "integer", columnDefinition: "integer GENERATED ALWAYS AS (json_unquote(json_extract(data, _utf8mb4.'$.value'))) VIRTUAL")]
    private $data_value;
}
