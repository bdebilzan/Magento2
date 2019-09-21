# Magento2
An e-commerce website using Magento 2 filled with sample data. I've created a new theme based on Luma and I've programmatically added a new block on the homepage above the "Hot Seller" section named "Custom CMS Block." On the product listing page I've programmatically added a display of SKU. On the product detail page I've programmatically added the product details paragraph above the color selection swatches and removed it from the bottom tab section.

## Appearance

![Screen Shot 2019-09-12 at 8 59 17 PM](https://user-images.githubusercontent.com/25471394/64836768-4cb62580-d5a0-11e9-88ce-341383a227ca.png)

![Screen Shot 2019-09-12 at 8 54 58 PM](https://user-images.githubusercontent.com/25471394/64836647-beda3a80-d59f-11e9-831e-540186cb6e9a.png)

![Screen Shot 2019-09-12 at 8 53 37 PM](https://user-images.githubusercontent.com/25471394/64836650-c26dc180-d59f-11e9-9143-41a897b118ca.png)

## Getting Started

### Prerequisites

Magento 2.3 technology stack requirements

<https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements-tech.html>

### Installing

Clone the repository

    git clone https://github.com/bdebilzan/Magento2.git

Run from the command line in the root folder:

    composer install

*You must enter authentication keys when prompted for username and password in CLI.*

To create authentication keys:

1) Log in to the [Magento Marketplace](https://marketplace.magento.com).

2) If you don’t have an account, click Register. Click your account name in the top-right of the page and select My Profile.

3) Click Access Keys in the Marketplace tab.

4) Click Create a New Access Key. Enter a specific name for the keys (e.g., the name of the developer receiving the keys) and click OK.

5) New public and private keys are now associated with your account that you can click to copy. Save this information or keep the page open when working with 	your Magento project. Use the Public key as your username and the Private key as your password.

Run from the command line in the root folder:

    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy
