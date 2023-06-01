<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Shipment extends AbstractModel
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
            'shipmentId' => [ 'model' => null, 'array' => false ],
            'shipmentDateTime' => [ 'model' => null, 'array' => false ],
            'shipmentReference' => [ 'model' => null, 'array' => false ],
            'pickupPoint' => [ 'model' => null, 'array' => false ],
            'order' => [ 'model' => ShipmentOrder::class, 'array' => false ],
            'shipmentDetails' => [ 'model' => ShipmentDetails::class, 'array' => false ],
            'billingDetails' => [ 'model' => BillingDetails::class, 'array' => false ],
            'shipmentItems' => [ 'model' => ShipmentItem::class, 'array' => true ],
            'transport' => [ 'model' => ShipmentTransport::class, 'array' => false ],
        ];
    }

    /**
     * @var string A unique identifier for this shipment.
     */
    public $shipmentId;

    /**
     * @var string The date and time in ISO 8601 format when the order item was shipped.
     */
    public $shipmentDateTime;

    /**
     * @var string Reference supplied by the user when this item was shipped.
     */
    public $shipmentReference;

    /**
     * @var bool Indicates whether this order is shipped to a Pick Up Point.
     */
    public $pickupPoint;

    /**
     * @var ShipmentOrder
     */
    public $order;

    /**
     * @var ShipmentDetails
     */
    public $shipmentDetails;

    /**
     * @var BillingDetails
     */
    public $billingDetails;

    /**
     * @var ShipmentItem[]
     */
    public $shipmentItems = [];

    /**
     * @var ShipmentTransport
     */
    public $transport;

    public function getShipmentDateTime(): ?\DateTime
    {
        if (empty($this->shipmentDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->shipmentDateTime);
    }
}
