# Go to checkout for WooCommerce
Send the visitor to the checkout page of your WooCommerce store

## Usage
You can use a link to directly add a product to you cart with something like this:

Add Product ID 25 with quantity of 1
```
https://example.com/?add-to-cart=25&quantity=1
```

Add Product ID 25 with quantity of 3
```
https://example.com/?add-to-cart=25&quantity=3
```

Using this plugin, you simply have to add the `gotocheckout=true` parameter to redirect to the checkout:

Add Product ID 25 with quantity of 1 and redirect to checkout
```
https://example.com/?add-to-cart=25&quantity=1&gotocheckout=true
```
