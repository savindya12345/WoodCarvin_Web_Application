<h2>Introducing the project</h2>

<p>This is an e-commerce application. Through this web-based application it is possible to purchase an item made using wood.  Customers can select the desired item and order it.
Now let's see how to install and run this.</p>

<h2>Installation Notes</h2>

<p>To run the project you need to have installed XAMPP or WampServer and Composer on your local computer. According to your operating system, you can download it from the following links. Also install it on your computer.</p>

<p>XAMPP
https://www.apachefriends.org/download.html</p>

<p>WampServer
https://www.wampserver.com/en</p>

<p>Download composer
https://getcomposer.org/download</p>

<p>After installing XAMPP or WampServer successfully, then download or clone this github repository to your local computer.</p>

<p>After that, copy and paste the zip folder to the following path in your computer.
C:\xampp\htdocs
Then unzip it</p>

<p>Not required for beginners.! Open the project folder via text editor software (Like VSCode, Sublime Text)</p>

<p>Rename .env.example file to .env inside your project root and fill the database information.</p>

<p>Open the terminal and cd your project root directory</p>

<p>Run composer install or php composer.phar install</p>

<p>Run php artisan key:generate</p>

<p>Run php artisan migrate</p>

<p>Run php artisan db:seed to run seeders, if any.
How to run</p>

<p>Run php artisan serve on project root directory using your terminal</p>

<p>Then you can run the project. Laravel development server started on http://localhost:8000 </p>

<p>Then you will direct to the Home page of Wood Carving. It contains essential information about the website.</p>

<h2>Functions that are included/ workflow</h2>
<p>Users can create a user account using the register button. 
After the registration process completes users will be able to log into their account. 
Then you can do the following functionalities.
Can view all products -> If you click the Home or Product button in navbar, You can see all products. </p>

<p>Can search for products by category -> In the search bar, You can search any product using category. Ex: If you want to search rings, You can type “ring” in the search bar and then you can see all the ring products.</p>

<p>Can view details-> If you want to see more details, you can click the product and after that you will go to the product detail page and you can see product detail what you select.</p>

<p>Add any product to the cart -> After view detail you can click the “Add to Cart” button and then you can add the product to the cart list. As well as you can see your cart list after clicking the “Cart” button on your right side. There is a button called “Cart” and click it. You can see your cart list.</p>

<p>Remove Product from your cart list -> If you don't want to buy any product after adding the cart list, You can remove that product using the “Remove from cart” button. By clicking it, the product will be removed from the cart list.</p>

<p>Order the product -> After adding the product to cart, you can order that product using the “Order Now” button. If you wish to buy the product you can click that button and make your order. </p>

<p>Make order/s via cart -> After clicking the “Order Now” button you will direct to another page. That page shows you the details about the item (Like amount and etc). It shows how much you have to pay to buy the item.  You must enter your address if purchasing it.  Also you pay. Select the mode of execution and finally click on the "Order Now" button and your order will be confirmed. After that your cart list will be empty.</p>

<p>Order Items -> After making your order you can see your order using the “Order” page. That page shows you after clicking the “Order” Button. There is an “Order” button on your left side in the navbar. Displayed the order as pending order (This need to be implement as a admin part)
Logout -> After all, if you want to logout the system, you can use the “Logout” button and log out. There is a logout button on your right side in the navbar and clicking your name and you will see a dropdown menu. “Logout” button is there.</p>

<h2>Technologies that I have applied for this project</h2>
<p>
HTML
CSS
Bootstrap
Laravel
PHP
JavaScript</p>

<p>During my university period, I did my projects using PHP and Laravel framework. So I have applied some of that technology for this application as well.</p>
<p>Laravel scores more than any other framework because of its superior features and advanced tools that facilitate the development of online applications. Laravel helps website developers simplify their development processes with clean and reusable code.</p>
<p>Websites built on Laravel are often easy to maintain overtime. A new developer can easily bring it back from scratch when previous developers have left the site. Because of Laravel’s unique features such as clean code, MVC structure and OOP principles, maintaining a Laravel site over time goes a long way.</p>

<h2>Changes and key features that I have done</h2>
<p>According to the project requirements, it required only a cart. Instead of that I have added an order function. Basically users can add item/s to their cart. Then the user can go to the cart and make an order via cart. After making the order, the selected item/s will be removed from the card accordingly. The item/s will be placed on the order page and it will show as pending order. That is a new feature I have applied for this project.</p>

<h2>Future development plans</h2>
<p>Also, more functions can be developed here in the future. That is, the "admin" side can be created. Here's just how to contact a buyer.  If the 'admin' represents this side, the customer can get feedback from the seller.  The web-based application can also be upgraded so that the customer can make a suggestion or allegation.  It can also be improved to enable the admin to respond to them. 'Admin' can add functions such as adding new products and removing expired ones.Therefore, more requirements may be added to this in the future.</p>


<p>Here is the database, attached.  It is contained in a folder called ecom-project.</p>