Цель
Нам необходимо проверить уровень ваших знаний в области понимания задач и
принятия самостоятельных решений.

Задача
Написать скрипт на PHP который будет запускаться как консольная команда.
Скрипт должен быть реализован стандартными средствами PHP без использования
сторонних библиотек.
Скрипт на вход должен принимать несколько значений, например:
main.php 1 2 3 4 same hello world true false
Слова true и false должны быть преобразованы в boolean типы true и false
соответственно.
В самом скрипте должен быть массив следующего вида:
$main_array = ['vasya', 'pupkin', 'apple', 23, 41, 55, 1, 2];
В main.php необходимо реализовать несколько задач:
● Убедиться что в $main_array нету булевского значение true
● Убедиться что во входящих параметрах есть булевского значение true (если оно
было введено)
● Объединить массив и входящие параметры
● Определить каких данных нету в $main_array но они есть во входящих
параметрах
● Определить какие данные есть в $main_array и во входящих параметрах
● Все строковые значения в $main_array перевести в верхний регистр символов
● Получить массив чисел из входящих параметров если были введены цифры
● Отсортировать $main_array таким образом чтобы цифры стали первыми
элементами массива
Выложить результат тестового в публичный репозиторий на github.
