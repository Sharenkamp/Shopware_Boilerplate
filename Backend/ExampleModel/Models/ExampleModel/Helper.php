<?php
namespace Shopware\CustomModels\ExampleModel;

use Shopware\Components\Model\ModelEntity,
    Doctrine\ORM\Mapping AS ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="example_model_helper")
 */
class Helper extends ModelEntity
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $sandboxSecretId
     *
     * @ORM\Column(name="sandboxsecretid", type="string", length=100, nullable=false)
     */
    private $sandboxSecretId;

    public function getId()
    {
        return $this->id;
    }

    public function getSandboxSecretId()
    {
        return $this->sandboxSecretId;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setSandboxSecretId($sandboxSecretId)
    {
        $this->sandboxSecretId = $sandboxSecretId;
    }

}
