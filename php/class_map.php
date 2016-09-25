<?php
// map the url to the controller class name
return [
    "" => "Home",
    "home" => "Home",
    "categories" => "Categories",  
    PAGE_NOT_FOUND => "PageNotFound",
    "products" => "Products",
    "specifications" => "Specifications",
    "search"=>"Search",
    "contact-response"=>"ContactResponse",
    "info"=>"StaticPages",
    // cart
    "cart"=>"cart\Cart",
    "checkout"=>"cart\Checkout",
    "payment" => "cart\Payment",
    "execute-payment" => "cart\ExecutePayment",    
    // security
    "register" => "security\Register",
    "register-response" => "security\RegisterResponse",
    "sign-in" => "security\SignIn",
    "sign-in-response" => "security\SignInResponse",
    "sign-out" => "security\SignOut",
    //Admin
    "admin" => "admin\Dashboard",
    "users" => "admin\Users",
    "product-data" =>"admin\ProductData",
    "newsletter" => "admin\Newsletter",
    "report"=>"admin\Report",
    "delete"=>"admin\Delete",
    "change-password"=>"admin\ChangePassword",
    "lock"=>"admin\Lock",
    //Customer
    "my-account" => "customer\Account", 
    //Report
    "order-by-name"=>"admin\\report\OrderByName",
    "total-amount-spent"=>"admin\\report\TotalAmountSpent",
    "quantity-price-of-category"=>"admin\\report\QuantityPriceOfCategory",
    "products-in-cart-not-paid"=>"admin\\report\ProductsInCartNotPaid",
    "monthly-salse"=>"admin\\report\MonthlySales",
    "customer-state"=>"admin\\report\CustomState",
    "quantity-ordered-highest"=>"admin\\report\QuantityOrderedHighest",
    "quantity-ordered-lowest"=>"admin\\report\QuantityOrderedLowest",
    "customer-message"=>"admin\\report\CustomerMessage"
    
];

