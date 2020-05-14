# Magento 2 Module Rafique AdminApi

    rafique/module-adminapi

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
A simple module to GET and SET admin configuration values using Magento API

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Rafique`
 - Enable the module by running `php bin/magento module:enable Rafique_AdminApi`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - public repository `packagist.org`
    - public github repository as vcs
 - Install the module composer by running `composer require rafique/module-adminapi`
 - enable the module by running `php bin/magento module:enable Rafique_AdminApi`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration
No Admin UI



## Specifications

 - API Endpoint
	- GET - Rafique\AdminApi\Api\GetValueManagementInterface > Rafique\AdminApi\Model\GetValueManagement
	        - Make a GET request and pass in the store code and path of config value you want to retrieve.

 - API Endpoint
	- PUT - Rafique\AdminApi\Api\SetValueManagementInterface > Rafique\AdminApi\Model\SetValueManagement
	        Make a POST request with an array in raw format. 
	        
	        
	         {
             	"param": {"path":"web/seo/use_rewrites", "value":"1", "scope":"default", "encrypt":true}
             }
	         

 - Helper
	- Rafique\AdminApi\Helper\Data

 - Configuration Type
	- api


## Attributes



