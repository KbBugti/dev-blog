/** Grocery List:
Bananas (5)
Chees Burgar (3)
Chocolate (1)

**/

CREATE TABLE groceries (id INTEGER PRIMARY KEY, name text, Birth INTEGER, pass_id INTEGER);

INSERT INTO groceries VALUES (1, "Bananas", 'Nice', 11123);
INSERT INTO groceries VALUES (2, "Chees Burgar", 3, 12343);
INSERT INTO groceries VALUES (3, "Chocolate", 1, 105454);
INSERT INTO groceries VALUES (4, "Ice cream", 6, 94545);
INSERT INTO groceries VALUES (5, "Butters", 2, 5);

SELECT * FROM groceries WHERE Birth <= 3 AND name <> 'Bananas' ORDER BY pass_id;
SELECT * FROM groceries WHERE name IN ('Bananas', 'Ice cream', 'Butters') AND pass_id > 3;

DROP TABLE groceries;