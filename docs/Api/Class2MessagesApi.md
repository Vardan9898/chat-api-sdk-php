# OpenAPI\Client\Class2MessagesApi

All URIs are relative to https://api.chat-api.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**forwardMessage()**](Class2MessagesApi.md#forwardMessage) | **POST** /forwardMessage | Forwarding messages to a new or existing chat.
[**getMessages()**](Class2MessagesApi.md#getMessages) | **GET** /messages | Get a list of messages.
[**sendContact()**](Class2MessagesApi.md#sendContact) | **POST** /sendContact | Sending a contact or contact list to a new or existing chat.
[**sendFile()**](Class2MessagesApi.md#sendFile) | **POST** /sendFile | Send a file to a new or existing chat.
[**sendLink()**](Class2MessagesApi.md#sendLink) | **POST** /sendLink | Send text with link and link&#39;s preview to a new or existing chat.
[**sendLocation()**](Class2MessagesApi.md#sendLocation) | **POST** /sendLocation | Sending a location to a new or existing chat.
[**sendMessage()**](Class2MessagesApi.md#sendMessage) | **POST** /sendMessage | Send a message to a new or existing chat.
[**sendPTT()**](Class2MessagesApi.md#sendPTT) | **POST** /sendPTT | Send a ptt-audio to a new or existing chat.
[**sendVCard()**](Class2MessagesApi.md#sendVCard) | **POST** /sendVCard | Sending a vcard to a new or existing chat.


## `forwardMessage()`

```php
forwardMessage($forwardMessageRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Forwarding messages to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forwardMessageRequest = new \OpenAPI\Client\Model\ForwardMessageRequest(); // \OpenAPI\Client\Model\ForwardMessageRequest

try {
    $result = $apiInstance->forwardMessage($forwardMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->forwardMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forwardMessageRequest** | [**\OpenAPI\Client\Model\ForwardMessageRequest**](../Model/ForwardMessageRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessages()`

```php
getMessages($lastMessageNumber, $last, $chatId, $limit, $minTime, $maxTime): \OpenAPI\Client\Model\Messages
```

Get a list of messages.

To receive only new messages, pass the **lastMessageNumber** parameter from the last query.  Files from messages are guaranteed to be stored only for 30 days and can be deleted. Download the files as soon as you get to your server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lastMessageNumber = 0; // int | The lastMessageNumber parameter from the last response
$last = true; // bool | Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored.
$chatId = 17633123456@c.us; // string | Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group.
$limit = 100; // int | Sets length of the message list. Default 100. With value 0 returns all messages.
$minTime = 946684800; // int | Filter messages received after specified time. Example: 946684800.
$maxTime = 946684800; // int | Filter messages received before specified time. Example: 946684800.

try {
    $result = $apiInstance->getMessages($lastMessageNumber, $last, $chatId, $limit, $minTime, $maxTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lastMessageNumber** | **int**| The lastMessageNumber parameter from the last response | [optional]
 **last** | **bool**| Displays the last 100 messages. If this parameter is passed, then lastMessageNumber is ignored. | [optional] [default to false]
 **chatId** | **string**| Filter messages by chatId  Chat ID from the message list. Examples: 17633123456@c.us for private messages and 17680561234-1479621234@g.us for the group. | [optional]
 **limit** | **int**| Sets length of the message list. Default 100. With value 0 returns all messages. | [optional]
 **minTime** | **int**| Filter messages received after specified time. Example: 946684800. | [optional]
 **maxTime** | **int**| Filter messages received before specified time. Example: 946684800. | [optional]

### Return type

[**\OpenAPI\Client\Model\Messages**](../Model/Messages.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendContact()`

```php
sendContact($sendContactRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Sending a contact or contact list to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendContactRequest = new \OpenAPI\Client\Model\SendContactRequest(); // \OpenAPI\Client\Model\SendContactRequest

try {
    $result = $apiInstance->sendContact($sendContactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendContactRequest** | [**\OpenAPI\Client\Model\SendContactRequest**](../Model/SendContactRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFile()`

```php
sendFile($sendFileRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Send a file to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendFileRequest = new \OpenAPI\Client\Model\SendFileRequest(); // \OpenAPI\Client\Model\SendFileRequest

try {
    $result = $apiInstance->sendFile($sendFileRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendFileRequest** | [**\OpenAPI\Client\Model\SendFileRequest**](../Model/SendFileRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendLink()`

```php
sendLink($sendLinkRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Send text with link and link's preview to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendLinkRequest = new \OpenAPI\Client\Model\SendLinkRequest(); // \OpenAPI\Client\Model\SendLinkRequest

try {
    $result = $apiInstance->sendLink($sendLinkRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendLinkRequest** | [**\OpenAPI\Client\Model\SendLinkRequest**](../Model/SendLinkRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendLocation()`

```php
sendLocation($sendLocationRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Sending a location to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendLocationRequest = new \OpenAPI\Client\Model\SendLocationRequest(); // \OpenAPI\Client\Model\SendLocationRequest

try {
    $result = $apiInstance->sendLocation($sendLocationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendLocationRequest** | [**\OpenAPI\Client\Model\SendLocationRequest**](../Model/SendLocationRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessage()`

```php
sendMessage($sendMessageRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Send a message to a new or existing chat.

The message will be added to the queue for sending and delivered even if the phone is disconnected from the Internet or authorization is not passed.  Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendMessageRequest = new \OpenAPI\Client\Model\SendMessageRequest(); // \OpenAPI\Client\Model\SendMessageRequest

try {
    $result = $apiInstance->sendMessage($sendMessageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendMessageRequest** | [**\OpenAPI\Client\Model\SendMessageRequest**](../Model/SendMessageRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPTT()`

```php
sendPTT($sendPTTRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Send a ptt-audio to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendPTTRequest = new \OpenAPI\Client\Model\SendPTTRequest(); // \OpenAPI\Client\Model\SendPTTRequest

try {
    $result = $apiInstance->sendPTT($sendPTTRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendPTT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendPTTRequest** | [**\OpenAPI\Client\Model\SendPTTRequest**](../Model/SendPTTRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendVCard()`

```php
sendVCard($sendVCardRequest): \OpenAPI\Client\Model\SendMessageStatus
```

Sending a vcard to a new or existing chat.

Only one of two parameters is needed to determine the destination - chatId or phone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Class2MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendVCardRequest = new \OpenAPI\Client\Model\SendVCardRequest(); // \OpenAPI\Client\Model\SendVCardRequest

try {
    $result = $apiInstance->sendVCard($sendVCardRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class2MessagesApi->sendVCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendVCardRequest** | [**\OpenAPI\Client\Model\SendVCardRequest**](../Model/SendVCardRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\SendMessageStatus**](../Model/SendMessageStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
