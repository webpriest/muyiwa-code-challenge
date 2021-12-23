1. Clone the Repo at https://github.com/Ademuyi001/laravel-assignment.git
2. Run `composer install`
3. Run `npm install` for dependencies
4. Create a database `laravel_assignment`, and run `php artisan migrate` to migrate the database
5. Use an API client (e.g Postman), and use the following end points;

---------------
User Model
---------------
POST http://localhost:8000/api/auth/register (register user)
	- firstname: 
	- middlename: 
	- lastname:
	- email:
	- phone:
	- password:
	- password_confirmation:
	- avatar: (type of file)
	- is_disabled: false
POST http://localhost:8000/api/auth/login (login user)
	- email: aderintomuyiwa@gmail.com
	- password: admin@12
	Returns access_token and user data
	Copy access token and create Authorization Bearer token on Postman

-----------------
Asset Model (for authenticated user)
-----------------
GET http://localhost:8000/api/assets (get all assets)
GET http://localhost:8000/api/assets/{asset} (get single record)
POST http://localhost:8000/api/assets (create new record)
	- type:
	- serial_number:
	- description:
	- mode:
	- picture_path:
	- purchase_date:
	- start_use_date:
	- purchase_price:
	- warranty_expiry_date:
	- degradation:
	- currency_value:
	- location:
PATCH http://localhost:8000/api/assets/{asset} (update record)
	- id:
	- type:
	- serial_number:
	- description:
	- mode:
	- picture_path:
	- purchase_date:
	- start_use_date:
	- purchase_price:
	- warranty_expiry_date:
	- degradation:
	- currency_value:
	- location:
DELETE http://localhost:8000/api/assets/{asset} (delete record)

-------------------
Vendor
-------------------
GET http://localhost:8000/api/vendors (get all vendors)
GET http://localhost:8000/api/vendors/{vendor} (get single record)
POST http://localhost:8000/api/vendors (create new record)
	- name:
	- category:
	
PATCH http://localhost:8000/api/vendors/{vendor} (update record)
	- id:
	- name:
	- category:

DELETE http://localhost:8000/api/vendors/{vendor} (delete record)

-------------------
Asset Assignment
-------------------
GET http://localhost:8000/api/asset-assignments (get all vendors)
GET http://localhost:8000/api/asset-assignments/{asset-assignment} (get single record)
POST http://localhost:8000/api/asset-assignments (create new record)
	- asset_id:
	- assignment_date:
	- due_date:
	- status:
	- is_due:
	- assigned_by:
	- assigned_user_id:
	
PATCH http://localhost:8000/api/asset-assignments/{asset-assignment} (update record)
	- id:
	- asset_id:
	- assignment_date:
	- due_date:
	- status:
	- is_due:
	- assigned_by:
	- assigned_user_id:
	
DELETE http://localhost:8000/api/asset-assignments/{asset-assignment} (delete record)
