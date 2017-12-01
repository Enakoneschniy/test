<?php

return [
    'dashboard' => 'Панель',
    '404'       => 'Страница не найдена.',
    'auth'      => [
        'title'          => 'Авторизация',
        'username'       => 'Логин',
        'password'       => 'Пароль',
        'login'          => 'Войти',
        'logout'         => 'Выйти',
        'wrong-username' => 'Неверный логин',
        'wrong-password' => 'или пароль',
        'since'          => 'Зарегистрирован :date',
    ],
    'model'     => [
        'create' => 'Создание документа в разделе :title',
        'edit'   => 'Редактирование записи в разделе :title',
    ],
    'links'     => [
        'index_page' => 'На сайт',
    ],
    'ckeditor'  => [
        'upload'        => [
            'success' => 'Файл был успешно загружен: \\n- Размер: :size кб \\n- ширина/высота: :width x :height',
            'error'   => [
                'common'              => 'Возникла ошибка при загрузке файла.',
                'wrong_extension'     => 'Файл ":file" имеет неверный тип.',
                'filesize_limit'      => 'Максимальный размер файла :size кб.',
                'imagesize_max_limit' => 'Ширина x Высота = :width x :height \\n Максимальный размер изображение должен быть: :maxwidth x :maxheight',
                'imagesize_min_limit' => 'Ширина x Высота = :width x :height \\n Минимальный размер изображение должен быть: :minwidth x :minheight',
            ],
        ],
        'image_browser' => [
            'title'    => 'Вставка изображения с сервера',
            'subtitle' => 'Выберите изображение для вставки',
        ],
    ],
    'table'     => [
        'no-action'       => 'Нет действия',
        'make-action'     => 'Отправить',
        'new-entry'       => 'Новая запись',
        'edit'            => 'Редактировать',
        'restore'         => 'Восстановить',
        'delete'          => 'Удалить',
        'delete-confirm'  => 'Вы уверены, что хотите удалить эту запись?',
        'action-confirm'  => 'Вы уверены, что хотите совершить это действие?',
        'delete-error'    => 'Невозможно удалить эту запись. Необходимо предварительно удалить все связанные записи.',
        'destroy'         => 'Удалить',
        'destroy-confirm' => 'Вы уверены, что хотите удалить эту запись?',
        'destroy-error'   => 'Невозможно удалить эту запись. Необходимо предварительно удалить все связанные записи.',
        'moveUp'          => 'Подвинуть вверх',
        'moveDown'        => 'Подвинуть вниз',
        'error'           => 'В процессе обработки вашего запроса возникла ошибка',
        'filter'          => 'Показать подобные записи',
        'filter-goto'     => 'Перейти',
        'save'            => 'Сохранить',
        'save_and_close'  => 'Сохранить и закрыть',
        'save_and_create' => 'Сохранить и создать',
        'cancel'          => 'Отменить',
        'download'        => 'Скачать',
        'all'             => 'Все',
        'processing'      => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
        'loadingRecords'  => 'Подождите...',
        'lengthMenu'      => 'Отображать _MENU_ записей',
        'zeroRecords'     => 'Не найдено подходящих записей.',
        'info'            => 'Записи с _START_ по _END_ из _TOTAL_',
        'infoEmpty'       => 'Записи с 0 по 0 из 0',
        'infoFiltered'    => '(отфильтровано из _MAX_ записей)',
        'infoThousands'   => '',
        'infoPostFix'     => '',
        'search'          => 'Поиск: ',
        'emptyTable'      => 'Нет записей',
        'paginate'        => [
            'first'    => 'Первая',
            'previous' => '&larr;',
            'next'     => '&rarr;',
            'last'     => 'Последняя',
        ],
        'filters'         => [
            'control' => 'Фильтр',
        ],
        'titles' => [
            'name' => 'Имя',
            'rating' => 'Рейтинг',
            'role' => 'Роль',
            'description' => 'Описание',
            'password' => 'Пароль',
            'avatar' => 'Фото профиля',
            'email' => 'Email',
        ]
    ],
    'tree'      => [
        'expand'   => 'Развернуть все',
        'collapse' => 'Свернуть все',
    ],
    'editable'  => [
        'checkbox' => [
            'checked'   => 'Да',
            'unchecked' => 'Нет',
        ],
    ],
    'select'    => [
        'nothing'     => 'Ничего не выбрано',
        'selected'    => 'выбрано',
        'placeholder' => 'Выберите из списка',
        'no_items'    => 'Нет элементов',
        'init'        => 'Нажмите Enter что бы выбрать',
        'limit'       => 'и еще ${count}',
        'deselect'    => 'Нажмите Enter что бы сбросить',
    ],
    'image'     => [
        'browse'         => 'Выбор изображения',
        'browseMultiple' => 'Выбор изображений',
        'remove'         => 'Удалить',
        'removeMultiple' => 'Удалить',
    ],
    'file'      => [
        'browse' => 'Выбор файла',
        'remove' => 'Удалить',
    ],
    'button'    => [
        'yes' => 'Да',
        'no'  => 'Нет',
        'cancel' => 'Отмена',
        'new_user' => 'Добавить пользователя',
        'new_role' => 'Добавить роль',
    ],
    'message'   => [
        'created'              => '<i class="fa fa-check fa-lg"></i> Запись успешно создана',
        'updated'              => '<i class="fa fa-check fa-lg"></i> Запись успешно обновлена',
        'deleted'              => '<i class="fa fa-check fa-lg"></i> Запись успешно удалена',
        'restored'             => '<i class="fa fa-check fa-lg"></i> Запись успешно восстановлена',
        'something_went_wrong' => 'Что-то пошло не так!',
        'are_you_sure'         => 'Вы уверены?',
        'access_denied'        => 'Доступ запрещен',
        'validation_error'     => 'Ошибка валидации',
    ],
    'titles' => [
        'users' => 'Пользователи',
        'roles' => 'Роли'
    ],
    'actions' => [
        'password_reset' => 'Сброс пароля'
    ]
];
