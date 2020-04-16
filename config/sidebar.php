<?php
return [
    [
        'name' => 'Ql sản phẩm',
        'list-check' => ['attribute','category','keyword','product'],
        'icon' => 'fa fa-database',
        'sub'  => [
            [
                'name'  => 'Thuộc tính',
                'namespace' => 'attribute',
                'route' => 'admin.attribute.index',
                'icon'  => 'fa fa-key'
            ],
            [
                'name'  => 'Danh mục',
                'namespace' => 'category',
                'route' => 'admin.category.index',
                'icon'  => 'fa fa-edit'
            ],
            [
                'name'  => 'Từ khoá',
                'namespace' => 'keyword',
                'route' => 'admin.keyword.index',
                'icon'  => 'fa fa-key'
            ],
            [
                'name'  => 'Sản phẩm',
                'namespace' => 'product',
                'route' => 'admin.product.index',
                'icon'  => 'fa fa-database'
            ],
        ]
    ],
    [
        'name' => 'Tin tức',
        'list-check' => ['menu','article'],
        'icon' => 'fa fa-edit',
        'sub'  => [
            [
                'name'  => 'Menu',
                'namespace' => 'menu',
                'route' => 'admin.menu.index',
                'icon'  => 'fa fa-key'
            ],
            [
                'name'  => 'Bài viết',
                'namespace' => 'article',
                'route' => 'admin.article.index',
                'icon'  => 'fa fa-key'
            ],
        ]
    ],
	[
		'name' => 'Đối tác',
		'list-check' => ['user','ncc'],
		'icon' => 'fa fa-user',
		'sub'  => [
			[
				'name'  => 'Khách hàng',
				'route' => 'admin.user.index',
				'namespace' => 'user',
				'icon'  => 'fa fa-user'
			],
			[
				'name'  => 'Nhà cung cấp',
				'route' => 'admin.ncc.index',
				'namespace' => 'user',
				'icon'  => 'fa fa-users'
			],
		]
	],
//    [
//        'name' => 'Account',
//        'list-check' => ['user','rating','comment','contact'],
//        'icon' => 'fa fa-user',
//        'sub'  => [
//            [
//                'name'  => 'User',
//                'route' => 'admin.user.index',
//                'namespace' => 'user',
//                'icon'  => 'fa fa-user'
//            ],
//            [
//                'name'  => 'Rating',
//                'namespace' => 'rating',
//                'route' => 'admin.rating.index',
//                'icon'  => 'fa fa-star'
//            ],
//            [
//                'name'  => 'Comment',
//                'namespace' => 'comment',
//                'route' => 'admin.comment.index',
//                'icon'  => 'fa fa-star'
//            ],
//            [
//                'name'  => 'Contact',
//                'namespace' => 'contact',
//                'route' => 'admin.contact',
//                'icon'  => 'fa fa-star'
//            ],
//        ]
//    ],
    [
        'name' => 'Đơn hàng',
        'list-check' => ['transaction'],
        'icon' => 'fa-shopping-cart',
        'sub'  => [
            [
                'name'  => 'Danh sách',
                'namespace' => 'transaction',
                'route' => 'admin.transaction.index',
                'icon'  => 'fa-opencart'
            ]
        ]
    ],
//    [
//        'name' => 'SystemPay',
//        'list-check' => ['pay-in'],
//        'icon' => 'fa  fa-usd',
//        'sub'  => [
//            [
//                'name'  => 'Nạp tiền',
//                'route' => 'admin.system_pay_in.index',
//                'namespace' => 'pay-in',
//                'icon'  => 'fa fa-money'
//            ]
//        ]
//    ],
    [
        'name'  => 'System',
        'label' => 'true'
    ]
];
