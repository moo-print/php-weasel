<?php
namespace Weasel\XmlMarshaller\Config\Annotations;

use Weasel\Annotation\Annotations\Annotation;
use Weasel\Annotation\Annotations\AnnotationCreator;
use Weasel\Annotation\Annotations\Parameter;

/**
 * @Annotation(on={"class"})
 */
class XmlDiscriminatorValue
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $value;
     * @AnnotationCreator({@Parameter(name="value", type="string", required=true)})
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}
