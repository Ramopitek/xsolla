# xsolla-calculator
## Запуск
Устнови docker

В коммандной строке запусти, чтоб собрать проект
```
docker-compose build
```
Чтоб запустить проект введи
```
docker-compose run -d
```
Приложение будет доступно по адресу [localhost](http://localhost)

## Тесты
Чтоб запустить тесты введи в консоли
```
docker-compose exec php bin/phpunit
```
