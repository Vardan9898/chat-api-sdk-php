# # CreateGroupAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupName** | **string** | Name of the group being created |
**chatIds** | **string[]** | **Required if phones is not set**  An array of new participients chatIds. | [optional]
**phones** | **int[]** | **Required if chatIds is not set**  An array of phones starting with the country code. You do not need to add your number.   USA example: [17472822486&#39;]. | [optional]
**messageText** | **string** | The text of the message that will be sent to the group when it is created. If you do not set a parameter, the message will not be sent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
