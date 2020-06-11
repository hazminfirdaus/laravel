DELETE
FROM `region`
WHERE `id` = 1;

DELETE
FROM `region`
WHERE `slug` LIKE '%America%';

DELETE
FROM `region`
WHERE `name` LIKE '%Africa%';