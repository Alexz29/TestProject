
-- Запрос на получение всех пользователей подписанных на журнал "Мурзилка" старше 30 лет
SELECT * FROM users as u, subscriptions as s WHERE u.birthday < DATE_SUB(NOW(), INTERVAL 30  YEAR) AND s.id_magazine=1

-- Запрос случайного пользователя для вывода в модуль “наш любимый читатель”
SELECT * FROM `users` WHERE id >= (SELECT CEIL(RAND() * (SELECT MAX(id) FROM `users`))) LIMIT 1