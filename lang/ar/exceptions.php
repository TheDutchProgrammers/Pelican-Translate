<?php

return [
    'daemon_connection_failed' => 'حدث استثناء أثناء محاولة التواصل مع الدايمون مما أدى إلى رمز استجابة HTTP/:code. تم تسجيل هذا الاستثناء.',
    'node' => [
        'servers_attached' => 'يجب ألا يكون هناك أي خوادم مرتبطة بالعقدة لكي يتم حذفها.',
        'daemon_off_config_updated' => 'تم تحديث تكوين الدايمون <strong>لكن</strong>، واجهت مشكلة أثناء محاولة تحديث ملف التكوين تلقائيًا على الدايمون. ستحتاج إلى تحديث ملف التكوين (config.yml) يدويًا لتطبيق هذه التغييرات.',
    ],
    'allocations' => [
        'server_using' => 'تم تعيين خادم حاليًا لهذا التخصيص. لا يمكن حذف التخصيص إلا إذا لم يكن هناك خادم معين حاليًا.',
        'too_many_ports' => 'لا يتم دعم إضافة أكثر من 1000 منفذ في نطاق واحد دفعة واحدة.',
        'invalid_mapping' => 'التعيين المقدم للمنفذ :port كان غير صالح ولا يمكن معالجته.',
        'cidr_out_of_range' => 'تسمح ترميزات CIDR فقط بالأقنعة بين /25 و /32.',
        'port_out_of_range' => 'يجب أن تكون المنافذ في التخصيص أكبر من 1024 وأقل من أو يساوي 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'لا يمكن حذف بيضة تحتوي على خوادم نشطة مرتبطة بها من اللوحة.',
        'invalid_copy_id' => 'البيضة المختارة لنسخ سكربت منها إما أنها غير موجودة، أو أنها تقوم بنسخ سكربت نفسها.',
        'has_children' => 'هذه البيضة هي الوالد لواحدة أو أكثر من البيض الأخرى. يرجى حذف تلك البيض قبل حذف هذه البيضة.',
    ],
    'variables' => [
        'env_not_unique' => 'يجب أن تكون المتغيرات البيئية :name فريدة لهذه البيضة.',
        'reserved_name' => 'المتغير البيئي :name محمي ولا يمكن تخصيصه لمتغير.',
        'bad_validation_rule' => 'قاعدة التحقق ":rule" ليست صالحة لهذا التطبيق.',
    ],
    'importer' => [
        'json_error' => 'حدث خطأ أثناء محاولة تحليل ملف JSON: :error.',
        'file_error' => 'ملف JSON المقدم لم يكن صالحًا.',
        'invalid_json_provided' => 'الملف JSON المقدم ليس بتنسيق يمكن التعرف عليه.',
    ],
    'subusers' => [
        'editing_self' => 'لا يُسمح بتعديل حساب المستخدم الفرعي الخاص بك.',
        'user_is_owner' => 'لا يمكنك إضافة مالك الخادم كمستخدم فرعي لهذا الخادم.',
        'subuser_exists' => 'المستخدم ذو البريد الإلكتروني هذا مُعين بالفعل كمستخدم فرعي لهذا الخادم.',
    ],
    'databases' => [
        'delete_has_databases' => 'لا يمكن حذف مضيف قاعدة البيانات الذي يحتوي على قواعد بيانات نشطة مرتبطة به.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'أقصى فترة زمنية لمهمة متسلسلة هي 15 دقيقة.',
    ],
    'locations' => [
        'has_nodes' => 'لا يمكن حذف موقع يحتوي على عقد نشطة مرتبطة به.',
    ],
    'users' => [
        'node_revocation_failed' => 'فشل في إلغاء المفاتيح على <a href=":link">العقدة #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'لم يتم العثور على عقد تلبي المتطلبات المحددة للنشر التلقائي.',
        'no_viable_allocations' => 'لم يتم العثور على تخصيصات تلبي المتطلبات للنشر التلقائي.',
    ],
    'api' => [
        'resource_not_found' => 'المورد المطلوب غير موجود على هذا الخادم.',
    ],
];