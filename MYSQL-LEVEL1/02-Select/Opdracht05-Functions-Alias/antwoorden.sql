-- Opdracht 1 
SELECT Max(wage) As hoogste_loon_speler_fc_utrecht FROM players WHERE club = "FC Utrecht";
-- Opdracht 2 
SELECT ROUND(AVG(value)) AS afgerond_gemiddelde_inkomsten FROM players;
-- Opdracht 3
SELECT SUM(wage) AS som_loon_speler_fc_utrecht FROM players WHERE club= "FC Utrecht";
-- Opdracht 4
SELECT Count(*) AS aantal_spelers_MU_MC FROM players WHERE club = "Manchester United" OR club= "Manchester City";
-- Opdracht 5
SELECT AVG(wage) AS gemiddelde_inkomsten FROM players WHERE `nationality`="Netherlands";
-- Opdracht 6 
SELECT AVG(wage) AS gemiddelde_inkomsten_onder_20 FROM players WHERE age<20
-- Opdracht 7 
SELECT AVG(wage) AS gemiddelde_inkomsten_onder_20 FROM players WHERE age>20
-- Opdracht 8
SELECT SUM(value) AS waarden_spelers_chelsea FROM players WHERE club="Chelsea";
-- Opdracht 9
SELECT ROUND(AVG(age)) AS gemiddlede_leeftijd_spelers FROM players WHERE age
-- Opdracht 10
SELECT club, wage, ROUND(AVG(value)) AS gemiddelde_waarden_spelers_liverpool FROM players WHERE club="Liverpool";