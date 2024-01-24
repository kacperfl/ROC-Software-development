-- Opdracht 1 
SELECT * FROM players WHERE nationality = "Spain" AND club = "Chelsea";
-- Opdracht 2 
SELECT * FROM players WHERE nationality = "Spain" AND age = 17;
-- Opdracht 3
SELECT * FROM players WHERE club = "Liverpool" AND age = 20;
-- Opdracht 4
SELECT * FROM players WHERE nationality = "Netherlands" AND club = "Ajax";
-- Opdracht 5
SELECT * FROM players WHERE club= "Ajax" AND`nationality`="Cameroon";
-- Opdracht 6 
SELECT age, name FROM players WHERE club= "AZ Alkmaar";
-- Opdracht 7 
SELECT age, name, club FROM players WHERE club= "AZ Alkmaar";
-- Opdracht 8
SELECT name, wage FROM players WHERE club= "Manchester City" AND`nationality`="brazil";
-- Opdracht 9
SELECT name FROM players WHERE wage<10000 AND age=30;
-- Opdracht 10
SELECT name, age FROM players WHERE `nationality`="Spain" OR `nationality`="Portugal";
-- Opdracht 11
SELECT name, age, club FROM players WHERE `nationality`="Portugal" AND club= "Chelsea";
-- Opdracht 12
SELECT name, club FROM players WHERE age>30 AND wage>10000;
-- Opdracht 13
SELECT * FROM players WHERE `nationality`="Netherlands" AND club="Ajax" OR club= "FC Utrecht";
-- Opdracht 14
SELECT * FROM players WHERE `nationality`="England" AND age>20 AND wage>100000
-- Opdracht 15
SELECT name, age, nationality FROM players WHERE `nationality`="argentina" AND age>25
