-- Opdracht 1 
SELECT * FROM videogamesales;
-- Opdracht 2 
SELECT Count(id) AS totalgames FROM videogamesales WHERE year=1999;
-- Opdracht 3
SELECT COUNT(id) AS salesna FROM videogamesales WHERE genre="sports" AND NA_Sales;
-- Opdracht 4
SELECT name, platform, year FROM videogamesales WHERE publisher="Nintendo" AND year>= 1990 AND year<= 2005;
-- Opdracht 5
SELECT `name`, MAX(`Global_Sales`) AS max_sales  FROM videogamesales
-- Opdracht 6 
SELECT AVG(`EU_Sales`) AS gemiddelde_sales_puzzle FROM videogamesales WHERE genre="puzzle";
-- Opdracht 7 
SELECT name, genre, publisher FROM videogamesales WHERE `JP_Sales`= 532;
-- Opdracht 8
SELECT SUM(Global_Sales) AS max_sales_nintendo FROM videogamesales WHERE publisher="Nintendo" AND `Global_Sales`;
-- Opdracht 9
SELECT name, year FROM videogamesales  WHERE genre="Racing" AND publisher="Nintendo" OR publisher="Activision";
-- Opdracht 10
SELECT AVG(`EU_Sales` ),  AVG(`JP_Sales` ), AVG(`NA_Sales` ) AS gemiddelde_sales FROM videogamesales ;
-- Opdracht 11
DELETE FROM videogamesales WHERE name="Halo 2" AND platform="XB";
-- Opdracht 12
DELETE FROM videogamesales WHERE year=2012 OR publisher="Ubisoft";
-- Opdracht 13
DELETE FROM videogamesales WHERE genre=" Adventure" AND publisher= "Nintendo";
-- Opdracht 14
DELETE FROM videogamesales WHERE publisher="Nintendo" AND `Global_Sales`<1000;
-- Opdracht 15
DELETE FROM videogamesales WHERE year=1997 AND `NA_Sales`>200000