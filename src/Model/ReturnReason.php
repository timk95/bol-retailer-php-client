<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ReturnReason extends AbstractModel
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
            'mainReason' => [ 'model' => null, 'array' => false ],
            'detailedReason' => [ 'model' => null, 'array' => false ],
            'customerComments' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The main reason describing why the customer returned this product.
     */
    public $mainReason;

    /**
     * @var string The sub reason describing why the customer returned this product in more detail.
     */
    public $detailedReason;

    /**
     * @var string Additional details from the customer as to why this item was returned.
     */
    public $customerComments;
}
