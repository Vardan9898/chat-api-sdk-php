# OpenAPI\Client\Class3ChatsApi

All URIs are relative to https://api.chat-api.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupParticipant()**](Class3ChatsApi.md#addGroupParticipant) | **POST** /addGroupParticipant | Adding participant to a group
[**demoteGroupParticipant()**](Class3ChatsApi.md#demoteGroupParticipant) | **POST** /demoteGroupParticipant | Demote group participant
[**getChats()**](Class3ChatsApi.md#getChats) | **GET** /dialogs | Get the chat list.
[**group()**](Class3ChatsApi.md#group) | **POST** /group | Creates a group and sends the message to the created group.
[**promoteGroupParticipant()**](Class3ChatsApi.md#promoteGroupParticipant) | **POST** /promoteGroupParticipant | Make participant in the group an administrator
[**readChat()**](Class3ChatsApi.md#readChat) | **POST** /readChat | Open chat for reading messages
[**removeGroupParticipant()**](Class3ChatsApi.md#removeGroupParticipant) | **POST** /removeGroupParticipant | Remove participant from a group


## `addGroupParticipant()`

```php
addGroupParticipant($groupParticipantAction): \OpenAPI\Client\Model\GroupParticipantStatus
```

Adding participant to a group

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \OpenAPI\Client\Model\GroupParticipantAction(); // \OpenAPI\Client\Model\GroupParticipantAction

try {
    $result = $apiInstance->addGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->addGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\OpenAPI\Client\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `demoteGroupParticipant()`

```php
demoteGroupParticipant($groupParticipantAction): \OpenAPI\Client\Model\GroupParticipantStatus
```

Demote group participant

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \OpenAPI\Client\Model\GroupParticipantAction(); // \OpenAPI\Client\Model\GroupParticipantAction

try {
    $result = $apiInstance->demoteGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->demoteGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\OpenAPI\Client\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChats()`

```php
getChats(): \OpenAPI\Client\Model\Chats
```

Get the chat list.

The chat list includes avatars.

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->getChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Chats**](../Model/Chats.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `group()`

```php
group($createGroupAction): \OpenAPI\Client\Model\CreateGroupStatus
```

Creates a group and sends the message to the created group.

The group will be added to the queue for sending and sooner or later it will be created, even if the phone is disconnected from the Internet or the authorization is not passed.   2 Oct 2018 update: chatId parameter will be returned if group was created on your phone within 20 second.

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createGroupAction = new \OpenAPI\Client\Model\CreateGroupAction(); // \OpenAPI\Client\Model\CreateGroupAction

try {
    $result = $apiInstance->group($createGroupAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->group: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createGroupAction** | [**\OpenAPI\Client\Model\CreateGroupAction**](../Model/CreateGroupAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreateGroupStatus**](../Model/CreateGroupStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promoteGroupParticipant()`

```php
promoteGroupParticipant($groupParticipantAction): \OpenAPI\Client\Model\GroupParticipantStatus
```

Make participant in the group an administrator

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \OpenAPI\Client\Model\GroupParticipantAction(); // \OpenAPI\Client\Model\GroupParticipantAction

try {
    $result = $apiInstance->promoteGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->promoteGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\OpenAPI\Client\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readChat()`

```php
readChat($readChatAction): \OpenAPI\Client\Model\ReadChatStatus
```

Open chat for reading messages

Use this method to make users see their messages read.

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$readChatAction = new \OpenAPI\Client\Model\ReadChatAction(); // \OpenAPI\Client\Model\ReadChatAction

try {
    $result = $apiInstance->readChat($readChatAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->readChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **readChatAction** | [**\OpenAPI\Client\Model\ReadChatAction**](../Model/ReadChatAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\ReadChatStatus**](../Model/ReadChatStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGroupParticipant()`

```php
removeGroupParticipant($groupParticipantAction): \OpenAPI\Client\Model\GroupParticipantStatus
```

Remove participant from a group

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


$apiInstance = new OpenAPI\Client\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \OpenAPI\Client\Model\GroupParticipantAction(); // \OpenAPI\Client\Model\GroupParticipantAction

try {
    $result = $apiInstance->removeGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->removeGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\OpenAPI\Client\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\OpenAPI\Client\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
