<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Введенные IP адрес или домен не преобразуются в IP-адрес.',
        'fqdn_required_for_ssl' => 'Для использования SSL на этом узле необходимо полное доменное имя, преобразующееся в действительный публичный IP-адрес.',
    ],
    'notices' => [
        'allocations_added' => 'Allocations have successfully been added to this node.',
        'node_deleted' => 'Узел успешно удален из панели.',
        'node_created' => 'Узел успешно создан. Вы можете автоматически настроить демон на нем, используя вкладку Конфигурация. <strong>Перед созданием серверов на этом узле Вы должны выделить как минимум один IP-адрес и порт.</strong>',
        'node_updated' => 'Информация об узле успешно обновлена. Если Вы изменили настройки демона, нужно будет перезагрузить его на узле для применения изменений.',
        'unallocated_deleted' => 'Удалены все не назначенные порты для <code>:ip</code>.',
    ],
];
