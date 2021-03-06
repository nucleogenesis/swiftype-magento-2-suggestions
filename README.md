# Swiftype Magento 2.x Autosuggestion

This is a very simple extension that gives your Magento 2.x search bar the power of Swiftype's jQuery suggestion function. By pulling in and configuring the basics using this jQuery plugin from Swiftype: https://github.com/swiftype/swiftype-autocomplete-jquery

You will need to be signed up with Swiftype and have an engine created that has crawled your Magento site. 

**You can get your Engine Key from app.swiftype.com once you've gotten your engine configured.**

## Installation

Clone this repository somewhere on your server or local system. FTP or otherwise dump the `app/` folder to the root directory of your Magento 2.x application.

Enable the extension. (http://devdocs.magento.com/guides/v2.0/install-gde/install/cli/install-cli-subcommands-enable.html)

Go to: `Stores -> Configuration -> Swiftype -> Swiftype Autosuggestion` and enter your Engine Key.

You'll need to know the id value of your search's input tag. It will look like `<input id="search" ... />` - 'search' is the default in the Luma theme but your theme might have its own. 

Now, you're search bar will use the documents indexed by the Swiftype web crawler to make suggestions in the dropdown.

## Customizing the Appearance

In `app/code/Swiftype/Swiftype/view/frontend/css/autocomplete.css` you can change the CSS that targets how everything looks.

## TODO

- Allow use of other options for further customization
- Add the ability to create an engine for your site directly from the module
