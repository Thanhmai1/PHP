CREATE TABLE students (
                          id INT PRIMARY KEY AUTO_INCREMENT,
                          name VARCHAR(250),
                          email VARCHAR(250)
);

INSERT INTO students (name, email)
VALUES
    ('Mary', 'mary25318@example.com'),
    ('Petter', 'petter364@example.com'),
    ('Join', 'join129@example.com');

DROP TABLE students