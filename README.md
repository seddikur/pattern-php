# Паттерны с примерами на php

## Содержание
### Порождающие
#### [1. Одиночка (singleton)](creational/singleton.php)
#### Основное назначение
– гарантировать существование только одно экземпляра класса. Причиной обычно является следующее: требуется только один объект исходного класса и Вам необходимо, что бы объект был доступен в любом месте приложения, т.е. глобальный доступ.
#### Определение
Шаблон Singleton предполагает наличие статического метода для создания экземпляра класса, при обращении к которому возвращается ссылка на оригинальный объект.

---
