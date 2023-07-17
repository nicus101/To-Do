-- @block List tasks
SELECT * FROM posts
WHERE authorID = 1;

-- @block List newest 3 articles (for testing purpose set to one)
SELECT id, title, date FROM posts ORDER BY date  LIMIT 1;

-- @block Create task "Przerzucić kompost" with content "Trzeba przegrzebać kompost"
INSERT INTO posts (title, content, authorID)
VALUES ('Przerzucić kompost', 'Trzeba przegrzebać kompost', 1);


-- @block Update task above with new content "Trzeba przegrzebać kompost i koniecznie dosypać piachu tym razem!" with title "Przerzucić i zasypać kompost"
UPDATE posts
SET title = 'Przerzucić i zasypać kompost', content = 'Trzeba przegrzebać kompost i koniecznie dosypać piachu tym razem!'
WHERE id = 4 , authorID = 1;
