В задаче 6 выводятся числа 1234 так как $x - статическая переменная.
То же происходит и если мы вызываем ее из объектов разных классов.

Однако, при прогоне этих скриптов в "песочницах" на PHP более ранних чем 8.0, выводится 1122. И этому есть объяснение - статическая переменная инициализируется отдельно для каждого класса.
