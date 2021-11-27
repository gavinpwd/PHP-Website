# PHP-Website

### by Gavin Pili

### **TL;DR**  This is a working PHP website as part of my Web Development Diploma project. Additional add-ons to follow will be shopping cart, admin panel for maintaining products, login and validation, and JS slideshow
**You can view the webpage here: http://hornsbytafe.com/magenta12/Deliverable-C/index.php**

This webpage was created using the following:

* HTML5, CSS3 PHP, MySQL
* Google Fonts API
* Font Awesome Icons v4.7.0 library

**The Brief**
* Design a website using a client approved PSD layout

**Purpose**
* This document outlines the requirements for the online sports shop (sports warehouse).
* The shop is selling sport equipment. This system has 2 types of users:
* Public/Customer – This type of user can browse the items for sale and add them to a shopping cart
* Staff – This type of user can maintain the data in the application
* The items for sale are stored in a database so that the staff members can easily maintain the
items and the categories the items belong to.
* The customer purchases are stored in a database along with the payment details.
* The website is responsive so that it displays and functions well on both a desktop layout and a mobile device.

**Customer Browsing**
- For this deliverable the application enables customers to view featured items on the home page, browse, search for items and contact sports warehouse using the contact page.

1. Home page requirements
- The home page for the website displays the store’s featured items. These are items that have been marked as featured in the database. For each item display the item photo, price, sale price (if applicable) and product name.

2. Categories
- The items for sale are organised into categories. An item belongs to just one category and categories can have many items. The categories displayed in the website are stored in the database.
- These categories are displayed towards the top of the page and in the footer.

3. Contact us page
- The contact page was created in deliverable A – pre-launch. For this deliverable you will need to edit the layout of the page so that it fits in with the rest of the website design. The contact page can be accessed by clicking on the “Contact Us” link in the top navigation, and at the bottom of the page.

4. Browsing by category
- The user can browse the site to view the items for sale. The items can be browsed by selecting the category. When a category is selected all the items that belong to the category are displayed.
- For each item, display: Item name, Price and sale price if applicable, Photo of item
- Items are grouped into categories. An item belongs to one category only and categories may contain more than one item.

5. Searching for an item
- The user can search for an item by providing the item name or part of the name.
- For each item, display: Item name, Price and sale price if applicable, Photo of item

6. Viewing an item
- When an item is displayed the user can click on the item to view the items:
  - Item name
  - Price and sale price if applicable
  - Photo of item – you may choose to display a larger photo for the item. That is an optional requirement.
  - Description of the item

7. Testing requirements for deliverable C
- The website functions well in edge and Chrome
- The website validates against W3C HTML 5 and CSS
- The website is uploaded to the allocated web server and tested


**What needs to be done (currently in Progress):**
*** Customers purchasing items
- Items can be added to a shopping cart for purchase. The customer may purchase as many items as they like. For each item a quantity can be supplied.
1. Checkout
- When the customer is checking out, they will provide some personal and delivery details. The data gathered includes:
  - First name
  - Last name
  - Delivery address
  - Contact number
  - Email address

- When paying, the following details are supplied:
  - Credit card number
  - Expiry date
  - Name on credit card

- No other forms of payment will be accepted.
- The form data is validated using a client-side programming language, all the fields are required.
- Once payment is completed the customer receives an order number to keep for future reference. We will not be using a payment gateway. The credit card details will instead be stored in the database.


***Staff requirements***

1. Login
- Staff members can login using a username and password.
- For the purpose of this project please make sure at least one staff login has a login name of “admin” and a password of “password”. Update password
- Staff members can update their own password.

2. Maintain categories
- Staff members can add and modify categories. When adding and modifying a category the staff member can add/edit the category:
  - Name 

3. Maintain items
- Staff members will can add and modify items. When adding and modifying an item the staff member can add/edit the item:
  - Name
  - Description
  - Price
  - Sale price
  - Category it belongs to (this should be displayed as a drop-down list)
  - Photo

4. Customize user interface
- The staff member must be able to customize their user interface in some way. For example, they may want to choose their own theme.

**Here is a sample screenshots of the webpage:**
Homepage

![Homepage](/images/ss-homepage.jpg)




Search Result

![Search Result](/images/ss-search-result.jpg)



Contact Page

![Contact Page](/images/ss-contact.jpg)


