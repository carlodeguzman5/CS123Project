CREATE TABLE Ingredients
(
Ingredient_ID int NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
Name varchar(255) NOT NULL,
Stock int NOT NULL,
Replenish boolean NOT NULL,
Price decimal NOT NULL,
Supplier varchar(255) NOT NULL
);

CREATE TABLE IngredientIn
(
IngredientIn_ID int NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
Ingredient_ID int FOREIGN KEY REFERENCES Ingredients(Ingredient_ID),
Serving_ID int FOREIGN KEY REFERENCES Serving(Serving_ID)
)

CREATE TABLE Serving
(
Serving_ID int NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
Name varchar(255) NOT NULL,

);

CREATE TABLE Dish
(
Item_ID int NOT NULL UNIQUE PRIMARY KEY REFERENCES Item(Item_ID),
Serving_ID int NOT NULL REFERENCES Serving(Serving_ID)
)

CREATE TABLE Gift
(
Item_ID int NOT NULL UNIQUE PRIMARY KEY REFERENCES Item(Item_ID),
Details varchar(255) NOT NULL
)

CREATE TABLE OrderT
(
OrderT_ID NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
DateOfOrder FOREIGN KEY REFERENCES Sales(DateOfSale)
Server_name varchar(255) NOT NULL
TotalCost decimal SUM Item(Price) where Item(Item_ID) equals OrderT(OrderT_ID)
)

CREATE TABLE Sales
(
DateOfSale NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
)

CREATE TABLE Item
(
Item_ID int NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT,
isDish boolean NOT NULL,
isGift boolean NOT NULL,
Name varchar(255) NOT NULL,
Price decimal NOT NULL,
Availability boolean NOT NULL
)