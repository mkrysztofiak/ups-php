# ShipmentShipmentServiceOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**e_mail_information** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsEMailInformation[]**](ShipmentServiceOptionsEMailInformation.md) |  | [optional] 
**pickup_options** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsPickupOptions**](ShipmentServiceOptionsPickupOptions.md) |  | [optional] 
**delivery_options** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsDeliveryOptions**](ShipmentServiceOptionsDeliveryOptions.md) |  | [optional] 
**over_seas_leg** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsOverSeasLeg**](ShipmentServiceOptionsOverSeasLeg.md) |  | [optional] 
**cod** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsCOD**](ShipmentServiceOptionsCOD.md) |  | [optional] 
**dangerous_goods** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsDangerousGoods**](ShipmentServiceOptionsDangerousGoods.md) |  | [optional] 
**sorting_and_segregating** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsSortingAndSegregating**](ShipmentServiceOptionsSortingAndSegregating.md) |  | [optional] 
**declared_value** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsDeclaredValue**](ShipmentServiceOptionsDeclaredValue.md) |  | [optional] 
**excess_declared_value** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsExcessDeclaredValue**](ShipmentServiceOptionsExcessDeclaredValue.md) |  | [optional] 
**handling_charge** | [**\UPS\TForceFreightShipping\TForceFreightShipping\ShipmentServiceOptionsHandlingCharge**](ShipmentServiceOptionsHandlingCharge.md) |  | [optional] 
**freezable_protection_indicator** | **string** | The presence of the tag FreezableProtectionIndicator indicates that the customs clearance is required. | [optional] 
**extreme_length_indicator** | **string** | The presence of the tag ExtremeLengthIndicator indicates that the customs clearance is required. It is recommended to provide &#x27;LinearFeet&#x27; if this indicator is sent. | [optional] 
**linear_feet** | **string** | Dimensional length of the article(s), in &#x27;feet&#x27;. Numeric value greater than �0� (Zero) should be given in LinearFeet. If Proper LinearFeet is not provided, accurate charge for extreme length articles might not be returned. If linear feet �0� (Zero) or any non-numeric/invalid character is sent, accurate charge for extreme length articles might not be returned. Ignored if ExtremeLengthIndicator is not present. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

