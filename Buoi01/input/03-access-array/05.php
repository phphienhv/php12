<?php
    $arrMenu = [
        'index' => [
            "name"  => "Home",   "link"  => "index.php"
        ],
        'about' => [
            "name"  => "About",  
            "link"  => "data/about.php", 
            "child" => [
                'service'   => [ 
                    "name"  => "Service", 
                    "link"  => "service.php",
                    "child" => [
                        'sale'      => ["name" => "Sale", "link" => "sale.php"],
                        'training'  => ["name" => "Training", "link" => "training.php"]
                    ]
                ], 
                'company'   => [
                    "name" => "Company", 
                    "link" => "company.php",
                    "child" => [
                        'toyota' => ["name" => "Toyota","link"   => "toyota.php"]
                    ]]
        ]],
        'contact' => [
            "name" => "Contact", 
            "link" => "contact.php",
            "child" => [
                'hotline'      => ["name" => "hotline", "link" => "hotline.php"]
            ]
        ]
    ];


    // Yêu cầu: In ra tên của các menu cấp 2, 
    // Output: Service - Company

    foreach ($arrMenu as $keymenuLevel1 => $menuLevel1) {
        if (isset($menuLevel1['child'])) {
            foreach ($menuLevel1['child'] as $keymenuLevel2 => $menuLevel2){
                echo $menuLevel2['name'] . '-';
            }
            
        }
    }
