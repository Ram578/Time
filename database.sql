
CREATE DATABASE aimstonal;

CREATE USER "aimstonaladmin" IDENTIFIED BY "aimstonaladmin";

GRANT ALL PRIVILEGES  ON aimstonal.* TO "aimstonaladmin"@'%' WITH GRANT OPTION;