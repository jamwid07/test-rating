## Выполнение тестовой задачи
Так как задача была не точной выполнил только то что требовалось. Не описанные в задаче моменты выполнил на свое усмотрение. Если есть недочеты, откройте **issue** напишите мне на **jamwid07@mail.ru**

### Запуск сайта
Чтобы запустить сайт сначала скопируйте этот репозиторий стандартным способом: `git clone`

После выполните комманду в корневом каталоге проекта
```
comoser install
```
После того как composer загрузить все библиотеки выполните комманду
```
php init
```
Следующим шагом скопируйте файл `.env.example` находившийся в корневой папке, в ту же папку под именем `.env`. Потом откройте этот файл и измените значение переменных на ваши настройки

Следующим шагом выполните комаду в терминале в корневой папке проекта 
```
./yii migrate
```
После этого можете открывать сайт в браузере. Адрес сайта может быть разным смотря в каком окружении вы запускаете сервер.