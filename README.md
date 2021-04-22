<div>
	<h1 align="center">Travel Company Website</h1>
	<p align="center">
		<a href="https://discord.gg/tachiyomi">
		</a>
	</p>
</div>

Simple **Travel company** application made using **PHP** and **HTML** that uses **MySQL** as the database.

 ### Motivation


The motivation for developing this travel app came about because I love to travel. In addition, using the available sites to buy tours, there is also the possibility to develop your own customized
shopping app from scratch, because specially designed platforms are expensive. Also, I appreciate
the recent learning of the Java and JavaScript programming languages, and how
powerful and dynamic they are when it comes to web design and applications. . The languages used to
build this app are JavaScript, HTML, and Java, because I found them extremely useful.
useful while working on technology in my workplace

### User Interface
In the Travel Company app, you can find two types of interface::
1. **User interface:** The user can view the home page of the application's shopping cart,
view different categories, view any tours, view information about each location, and buy bids .
2. **Admin Interface:** The administrator can view the user information that was entered
during checkout in the database, can update the information, price, ticket price, add or remove tours from the main display.

### Travel Package Function
1. Display all the categories available for travel package on the system’s main page.
2. Display all the items linked to each category listed on the main page.
3. Allow the administrator to add new items to the existing list of available items.
4. Allow users/administrator to remove items.
5. Allow the administrator to modify the price of each item.
6. Allow the administrator to update the description about each item.
7. Allow the administrator to view and edit information about each user that checkouts the
items from the system.

------------

 ### The database has the following layout:
 
 ![image](https://user-images.githubusercontent.com/78639472/115650981-1cbe2f00-a34c-11eb-96c4-5c66ba065d17.png)
 

 ### 👤 Default Account for testing
	
**Admin Default Account**
- Username: admin
- Password: admin

------------

## Home Page
![image](https://user-images.githubusercontent.com/78639472/115626418-49a81d00-a31f-11eb-85f6-2b804dc25900.png)
## Registration Page
![image](https://user-images.githubusercontent.com/78639472/115626563-7fe59c80-a31f-11eb-9ec6-f1babe7110a7.png)
## Travel Package Page
![image](https://user-images.githubusercontent.com/78639472/115626651-a0155b80-a31f-11eb-9824-2b9b44fdee37.png)
## Ticket Page
![image](https://user-images.githubusercontent.com/78639472/115626716-aefc0e00-a31f-11eb-9024-a5659f6acfed.png)
## ADMIN page
![image](https://user-images.githubusercontent.com/78639472/115626816-d652db00-a31f-11eb-97a2-cec600a103a5.png)

# How to use

Clone repo

	git clone https://github.com/inf132-190103353/web.git
Install the composer dependencies

	composer install
	
Save .env.example as .env and put your database credentials

Set application key

	php artisan key:generate        

And Migrate with

`php artisan migrate`

Install node dependencies

`npm install`

Run watcher

`npm run watch`

 


