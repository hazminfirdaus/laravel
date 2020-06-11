SELECT *
FROM `country`;

SELECT *
FROM `country`
WHERE `population` > 20000000;

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;
-- or LIMIT 0, 10 (to skip, limit)

SELECT *
WHERE `city`
LIMIT 0, 100;

SELECT *
WHERE `city`
ORDER BY `population` DESC
LIMIT 0, 100;

SELECT *
FROM `city`
WHERE `District` LIKE '%Holland';

SELECT *
FROM `city`
WHERE `name` LIKE '%ville%';

SELECT *
FROM `city`
WHERE `CountryCode` IN ('CZE', 'SVK', 'POL', 'HUN');
ORDER BY `population` DESC
LIMIT 10;
