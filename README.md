# Swiftype Magento 2.x Autosuggestion

This is a very simple extension that gives your Magento 2.x search bar the power of Swiftype's jQuery suggestion function.

You will need to be signed up with Swiftype and have an engine created that has crawled your Magento site. **You can get your Engine Key from app.swiftype.com once you've gotten your engine configured.**

## Installation

Clone this repository somewhere on your server or local system. FTP or otherwise dump the `app/` folder to your Magento application.

Enable the extension.

Go to: `Stores -> Configuration -> Swiftype -> Swiftype Autosuggestion` and enter your Engine Key (available at app.swiftype.com [You'll need to sign in...]) and save.

Now, you're search bar will use the documents indexed by the Swiftype web crawler to make suggestions in the dropdown.

## Customizing the Appearance

In `app/code/Swiftype/Swiftype/view/frontend/css/autocomplete.css` you can change the CSS that targets how everything looks.
