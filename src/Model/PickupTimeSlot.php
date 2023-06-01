<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class PickupTimeSlot extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'fromDateTime' => [ 'model' => null, 'array' => false ],
            'untilDateTime' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The available start date and time for the pickup appointment. In ISO 8601 format.
     */
    public $fromDateTime;

    /**
     * @var string The available end date and time for the pickup appointment. In ISO 8601 format.
     */
    public $untilDateTime;

    public function getFromDateTime(): ?\DateTime
    {
        if (empty($this->fromDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->fromDateTime);
    }

    public function getUntilDateTime(): ?\DateTime
    {
        if (empty($this->untilDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->untilDateTime);
    }
}
