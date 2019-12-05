# SwaggerClient-php
This document describes the API of the A-maze-ing evening server.    This API consists of three different endpoints, which are detailed below.   - To register yourself as a player use the Player endpoint.   - To get information about the available mazes and enter a specific maze use the Mazes endpoint.   - To navigate a maze use the Maze endpoint.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->collectScore();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->collectScore: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MazeApi* | [**collectScore**](docs/Api/MazeApi.md#collectscore) | **POST** /api/maze/collectScore | 💰 Collect score from your hand to your bag.
*MazeApi* | [**exitMaze**](docs/Api/MazeApi.md#exitmaze) | **POST** /api/maze/exit | 🚪 Exit the maze.
*MazeApi* | [**move**](docs/Api/MazeApi.md#move) | **POST** /api/maze/move | Move in the supplied direction.
*MazeApi* | [**possibleActions**](docs/Api/MazeApi.md#possibleactions) | **GET** /api/maze/possibleActions | 👀 Get the list of possible actions, from the tile where you are standing.
*MazesApi* | [**all**](docs/Api/MazesApi.md#all) | **GET** /api/mazes/all | 📜 All the mazes that exist in the game.
*MazesApi* | [**enter**](docs/Api/MazesApi.md#enter) | **POST** /api/mazes/enter | 🌟 Enter a maze.
*PlayerApi* | [**forget**](docs/Api/PlayerApi.md#forget) | **DELETE** /api/player/forget | 🙈 Forget your current progress.
*PlayerApi* | [**get**](docs/Api/PlayerApi.md#get) | **GET** /api/player | 👤 Obtain information about yourself.
*PlayerApi* | [**register**](docs/Api/PlayerApi.md#register) | **POST** /api/player/register | 📝 Register yourself here.


## Documentation For Models

 - [MazeInfo](docs/Model/MazeInfo.md)
 - [MoveAction](docs/Model/MoveAction.md)
 - [PlayerInfo](docs/Model/PlayerInfo.md)
 - [PossibleActionsAndCurrentScore](docs/Model/PossibleActionsAndCurrentScore.md)


## Documentation For Authorization


## User token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




