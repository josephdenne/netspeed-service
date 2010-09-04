# Netspeed Service

* Version: 1.0
* Author: Joseph Denne (me@josephdenne.com)
* Build Date: 04th September 2010
* Requirements: Symphony 2.0.3 or later

## Summary

Uses Symphony's services API to provide the type of the users Internet connection.

What is the services API? A set of tools designed to extend Symphony's functionality via webservices. It's nothing but a proposal and an example service (this one) at this stage, so don't get too excited.

## Installation

** Note: The latest version can alway be grabbed with
"git clone git@github.com:josephdenne/netspeed-service.git"

1. Rename the extension folder to 'netspeed_service' and upload it to your Symphony 'extensions' folder
2. Enable it by selecting "Netspeed Service", choose Enable from the with-selected menu, then click Apply

## Usage

1. Add the "Netspeed Service" Data source to your page
2. You will notice a <netspeed> element in your page XML. This will contain the users connection type if successful, or an <error> element if not

## Examples

![Data Source attached to a page and working](http://josephdenne.com/workspace/images/screenshots/netspeed-service/attached-to-a-page.png)

![Data Source attached to a page and erroring](http://josephdenne.com/workspace/images/screenshots/netspeed-service/attached-to-a-page.error.png)

## Paraeter key

1. "ID" is the lookup number for the associated request
2. "Connection" is the type of connection of the current user
3. "Error" provides information in the event of an error

## Netspeed results key

1. Dailup is returned for connections capable of speeds less than 512 kbps
2. Cable/DSL is returned for Cable and DSL connections, typically of speeds between 512 kbps and 25 Mbps
3. Corporate is returned for dedication fibre lines, typical of speeds of 1 Mbps and up
4. Unknown is returned where we don't hold any information on the users connection type

[NOTES]

We track the requesting domain, IP and Symphony version number of all requests along with the service response. This is used for further enhancing the service and for giving us a view of the versions of Symphony in the wild.

You can contact me directly at me@josephdenne.com

