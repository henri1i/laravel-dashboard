# Decisions
I've created this page to document my train of thought and why I made a certain decision.  

## OrderProducts table

### **Problem**
A direct relationship between Orders and Products as shown in the image below would'nt allow the creation of a order with more than one product nor the storage of the product price at the purchase date.
We would'nt know for how much a product was bought after the price adjustment of a product.

![simple order products relation](https://github.com/henri1i/laravel-dashboard/blob/beta/images/decisions/orders-products.png?raw=true)

### **Solution**
I opted for the creation of a third table, responsible by the relationship between Orders and Products, called OrderProducts. Because of that, it will be possible the precisely tracking of the orders information.

![](https://github.com/henri1i/laravel-dashboard/blob/beta/images/decisions/orders-oderproducts-products.png?raw=true)

### ** Split the Controllers between API and Web **
Initially I thought about keep using the same API endpoints for the web interface, but after realize that I would need to create a bunch of other methods, that would be related just to the Web, I preferred to split them into use cases, as taught by Uncle Bob with the single responsibility principle.