# Banksite application

1. app - бизнес-логика, фреймворконезависимая
1. migrations - миграции
1. packages - composer-пакеты
1. public - публичная директория веб-сервера
   1. bitrix
   1. local - local
      1. js - стандартные js расширения (https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=11981&LESSON_PATH=3913.3516.4776.3635.11981)
   1. upload - upload symlink /storage/app/upload
   1. ... urlrewrite, robots, etc
1. storage - сторадж
   1. app
      1. upload - upload
   1. framework
      1. tmp - tmp каталог
1. vendor
1. node_modules
