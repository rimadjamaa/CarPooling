#    🚗 CarPooling Web Application with Geolocation



## ✨  Objective
  **CarPooling** is designed to facilitate users in sharing car rides with others traveling on the same route. Users can either offer to share their car or join another user who is willing to share.

The platform targets frequent travelers seeking an affordable and comfortable mode of transport. It is particularly beneficial for office commuters sharing common routes, enabling them to reduce travel costs. Anyone can choose to offer a ride, contributing to the reduction of their own expenses.

## 📋 Requirements
To run this CarPooling website, you need the following software and technologies:

- Web server (XAMPP)
- PHP (version .....)
- MySQL or any suitable database
- jQuery
- HTML/CSS

## 📥  Installation
1. Clone the repository or download the source code.

3. Create a database in MySQL and import the provided SQL schema to set up the database structure.

5. Configure the database connection in the` config.php` file.

7. Upload the code to your web server's root directory.

9. Access the website through a web browser.

Clone the repo locally:
```shell
git clone https://github.com/rimadjamaa/CarPooling
cd CarPooling
```
## 🧑 User  Authentication
There are two cateogories of users:
- **Driver** : A user who wants to share his ride with other people along the same route or is a full-time driver.
- **Rider** : A user(other than driver) sharing a ride. He can book in realtime and will be assigned a driver from the pool of drivers available.
- Users can sign up for a new account and sign in using their email and password.
- Passwords are securely hashed and stored in the database.

## 🧾 Create invoice
- Invoices are generated for completed rides.
- Invoices contain ride (instead of departure, destination, departure time, etc.).

## 🚗Cars Management

Admin users have the ability to manage car listings, which includes adding, editing, and deleting cars. Cars can be categorized and organized.

### Car Details

Car details include:
- Name
- Description
- Ride Price
- Images

This allows for comprehensive management of the car listings on the platform.


## 👨‍💼 Admin Panel
photo
- Admins can manage user accounts.
- User details, such as name, email, and role, can be edited.
- Admins can also deactivate or delete user accounts.

### 🖼️Banner Management
- Admins can manage website banners, including uploading images and specifying target URLs.
- Banners can be linked to product categories or promotional pages.

## 📖  Overview
This documentation provides an overview of the key features and functionalities of the CarPooling website. For each feature, detailed technical documentation, code examples, and implementation details are provided separately.
