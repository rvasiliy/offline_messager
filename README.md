# Offline messager

## Описание

Приложение представляет чат для обмена сообщениями между двумя пользователями.

Для того, чтобы обмениваться сообщениями пользователь должен быть зарегистрирован и получатель должен быть добавлен в список его контактов. Незарегистрированный пользователь может видеть только список доступных для общения пользователей, но отправлять сообщения не может.

Приложение предоставляет возможность узнать количество непрочитанных сообщений, от кого пришли сообщения, а также статус пользователей (online/offline).

## Установка

### Установка зависимостей
Приложение разработано с использованием *Yii2 Framework* и использует *Composer* для управления своими зависимостями. После скачивания исходных кодов приложения выполните в командной строке

``` cmd
composer install
```

в корневом каталоге с приложением. Это требуется для установки зависимостей.

### Настройка базы данных

В качестве хранилища данных используется база данных *MySQL*. Для начала требуется создать файл настроек для подключения к ней. Как образец можно использовать файл ``config/db.example.php``. Переименуйте его в ``config/db.php`` и отредактируйте, введя нужные параметры для подключения.

Для создания таблиц в базе данных можно использовать миграции. Выполните в командной строке в каталоге с приложением команду

``` cmd
php yii migrate
```

### Настройка web сервера

Для работы приложения потребуется rewrite модуль на сервере. Используйте инструкции для вашего сервера.

В качестве web каталога приложения используйте каталог ``web`` при настройке хоста на сервере.