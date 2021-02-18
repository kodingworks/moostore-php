# Warung BI

## TOC

- [Installation](#installation)
- [Plugin Lists](#plugin-lists)
- [Basic Example](#basic-example)
- [Create Custom Plugin](#create-custom-plugin)

### Installation

Install library using package manager like composer,
to install this library, add this to you composer.json

```json
{
    "require": [
        "warung/warung-bi": "@dev"
    ],
    "repositories": [
        {
            "type": "git",
            "url": "https://gitlab.com/koding-works/warung/warung-bi/warung-bi.git"
        }
    ]
}
```

### Plugin Lists

Warung BI plugin lists

| Plugin    | Version | Description                |
|:----------|:-------:|:---------------------------|
| [Tokopedia](https://gitlab.com/koding-works/warung/warung-bi/warung-bi-tokopedia) | `@dev`  | Official api for tokopedia |

### Basic Usage

Init the base BI class

```php
$bi = new \BI\BI;
```

Then, we can create plugin factory using this command
here we use GuzzleHttp as our http client

```php
$factory = $bi->create(\BI\Plugin\Factory::class, new \GuzzleHttp\Client);
```


### Create Custom Plugin

#### Basic Concept

##### Gateway

Gateway is the main gate for all plugin in warung BI,
it prepare and control flow for the next use

##### Request

Request handle and manipulate parameter that should be sent to destination

##### Response

Response handle and formatting the data that received from the previous process
