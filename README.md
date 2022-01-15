# About this application
This is an inventory web application which is able to keep track of inventory items, as well as the ability to create categories and assign them to inventory items.
This application makes use of the Laravel framework.

## Accesing the application
Go to: https://ofek-inventory-app.herokuapp.com/
- The application is already deployed on Heroku and is ready to be used

## Usage: Categories
The home page has a section called `Categories` which displays a table with the current categories that have been created, along side the number of items assigned to each category.

### Add a cateogry: 
Click on the `Create Category` button. This will redirect you to a new page. Enter the name for the category and press `Create Category`

### Delete a cateogry:
Click on the the name of a category under the `Categories` table. This will redirect you to a new page where you can delete the category. Deleting a category will delete all associated items with that category.

## Usage: Items
The home page has a section called `Items` which displays a table with the current items that have been created, along side the qauntity of the item and its related category. If an item is not assigned a category, the default will be `None`.

### Add an Item:
Click on the `+ Add Item` button. This will redirect you to a new page. Enter the name, quantity, and a category (If you do not want to assign a category, leave it as `None`). Press `Add Item` button to add the item.

### Delere or Edit an Item
Click on the name of the item under the `Items` table. This will redirect you to a new page where you can update the item details as well as delete the item.

