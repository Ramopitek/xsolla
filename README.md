# Xsolla-calculator
## Запуск
Устнови docker

В коммандной строке запусти, чтоб собрать проект
```
docker-compose build
```
Чтоб запустить проект введи
```
docker-compose up -d
```
Приложение будет доступно по адресу [localhost](http://localhost:80)

## Тесты
Чтоб запустить тесты введи в консоли
```
docker-compose exec php bin/phpunit
```
