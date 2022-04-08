1) 1- Liste des fournisseurs français

SELECT * FROM `customers` WHERE Country = 'France';

2) Liste des produits vendus par le fournisseur "Exotic Liquids" :

SELECT * FROM `products` WHERE SupplierID = 1;

3)Nombre de produits mis à disposition par les fournisseurs français (ordre décroissant) :

SELECT suppliers.CompanyName, (SELECT COUNT(*) FROM products WHERE products.SupplierID = suppliers.SupplierID) as Nbr_produits FROM products, suppliers
WHERE suppliers.country = 'France'
GROUP BY suppliers.CompanyName
ORDER BY Nbr_produits DESC;

4) Liste des clients français ayant passé plus de 10 commandes :
SELECT customers.CompanyName as client , (SELECT COUNT(*) FROM orders WHERE customers.CustomerID = orders.CustomerID) as Nbr_commande
FROM orders, customers
WHERE LOWER(customers.Country) = "france"
GROUP BY customers.ContactName HAVING Nbr_commande > 10;

5) Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 10000 € :
SELECT customers.CompanyName, SUM(`order details`.`UnitPrice` * `order details`.`Quantity`) as CA, customers.Country FROM `order details`, orders, customers
WHERE orders.OrderID = `order details`.`OrderID`
AND orders.CustomerID = customers.CustomerID
GROUP BY customers.CustomerID
HAVING CA > 10000
ORDER BY CA DESC;

6) Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés :

SELECT DISTINCT(customers.Country) FROM `order details`, customers, suppliers, orders, products
WHERE `order details`.`OrderID`= orders.OrderID
AND orders.CustomerID = customers.CustomerID
AND `order details`.ProductID = products.ProductID
AND products.SupplierID=suppliers.SupplierID
AND LOWER(suppliers.CompanyName)="exotic liquids" ORDER BY customers.Country ASC;

7) Chiffre d'affaires global sur les ventes de 1997 :

SELECT SUM(`order details`.`UnitPrice` * `order details`.`Quantity`) as CA FROM `order details`, orders
WHERE orders.OrderID = `order details`.`OrderID`
AND orders.OrderDate LIKE '%1997%';

8)Chiffre d'affaires détaillé par mois, sur les ventes de 1997 :

SELECT MONTH(orders.OrderDate) as mois, SUM(`order details`.`UnitPrice` * `order details`.`Quantity`) as CA FROM `order details`, orders
WHERE orders.OrderID = `order details`.`OrderID`
AND orders.OrderDate LIKE '%1997%'
    GROUP BY mois;

9) A quand remonte la dernière commande du client nommé "Du monde entier" ? :

SELECT orders.OrderDate FROM orders, customers
WHERE orders.CustomerID = customers.CustomerID
    AND LOWER(customers.CompanyName) = "du monde entier"
    ORDER BY orders.OrderDate DESC LIMIT 0,1;

10) Quel est le délai moyen de livraison en jours ?
