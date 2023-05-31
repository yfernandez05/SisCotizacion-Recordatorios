/*add colum url_documento*/
-- 31-05-23
ALTER TABLE servicios
ADD COLUMN url_documento TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL;
