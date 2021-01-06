<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
            'category_img'           => 'Category Img',
            'category_img_helper'    => ' ',
            'category_code'          => 'Category Code',
            'category_code_helper'   => ' ',
            'category_name'          => 'Category Name',
            'category_name_helper'   => ' ',
            'category_status'        => 'Category Status',
            'category_status_helper' => ' ',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'price'                 => 'Price',
            'price_helper'          => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
            'product_img'           => 'Product Img',
            'product_img_helper'    => ' ',
            'catid'                 => 'Category',
            'catid_helper'          => ' ',
            'subcatid'              => 'Subcategory',
            'subcatid_helper'       => ' ',
            'product_name'          => 'Product Name',
            'product_name_helper'   => ' ',
            'gst'                   => 'Gst',
            'gst_helper'            => ' ',
            'final_price'           => 'Final Price (including gst)',
            'final_price_helper'    => ' ',
            'hsn_code'              => 'Hsn Code',
            'hsn_code_helper'       => ' ',
            'offer_price'           => 'Offer Price',
            'offer_price_helper'    => ' ',
            'product_status'        => 'Product Status',
            'product_status_helper' => ' ',
            'stock'                 => 'Stock',
            'stock_helper'          => ' ',
        ],
    ],
    'subCategory'       => [
        'title'          => 'Sub Categories',
        'title_singular' => 'Sub Category',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'subcategory_name'          => 'Subcategory Name',
            'subcategory_name_helper'   => ' ',
            'subcategory_img'           => 'Subcategory Img',
            'subcategory_img_helper'    => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'subcategory_code'          => 'Subcategory Code',
            'subcategory_code_helper'   => ' ',
            'cat'                       => 'Category',
            'cat_helper'                => ' ',
            'subcategory_status'        => 'Subcategory Status',
            'subcategory_status_helper' => ' ',
        ],
    ],
    'featuredProduct'   => [
        'title'          => 'Featured Products',
        'title_singular' => 'Featured Product',
        'fields'         => [
            'id'                             => 'ID',
            'id_helper'                      => ' ',
            'featured_product'               => 'Featured Product',
            'featured_product_helper'        => ' ',
            'created_at'                     => 'Created at',
            'created_at_helper'              => ' ',
            'updated_at'                     => 'Updated at',
            'updated_at_helper'              => ' ',
            'deleted_at'                     => 'Deleted at',
            'deleted_at_helper'              => ' ',
            'featured_product_status'        => 'Featured Product Status',
            'featured_product_status_helper' => ' ',
        ],
    ],
    'offerProduct'      => [
        'title'          => 'Offer Products',
        'title_singular' => 'Offer Product',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'offer_product'               => 'Offer Product',
            'offer_product_helper'        => ' ',
            'offer_product_status'        => 'Offer Product Status',
            'offer_product_status_helper' => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
        ],
    ],
    'coupon'            => [
        'title'          => 'Coupons',
        'title_singular' => 'Coupon',
    ],
    'manageCoupon'     => [
        'title'          => 'Manage Coupons',
        'title_singular' => 'Manage Coupon',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'coupon_code'          => 'Coupon Code',
            'coupon_code_helper'   => ' ',
            'coupon_value'         => 'Coupon Value',
            'coupon_value_helper'  => ' ',
            'coupon_status'        => 'Coupon Status',
            'coupon_status_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'feedbackView'      => [
        'title'          => 'Feedback View',
        'title_singular' => 'Feedback View',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'customerfeedback_email'        => 'Customerfeedback Email',
            'customerfeedback_email_helper' => ' ',
            'description'                   => 'Description',
            'description_helper'            => ' ',
            'product'                       => 'Product',
            'product_helper'                => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
        ],
    ],
    'auditLog'          => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'customer'          => [
        'title'          => 'Customer',
        'title_singular' => 'Customer',
    ],
    'manageCustomer'    => [
        'title'          => 'Customer Details',
        'title_singular' => 'Customer Detail',
    ],
    'report'            => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
    ],
    'manageOrder'       => [
        'title'          => 'Manage Orders',
        'title_singular' => 'Manage Order',
        'fields' => [

            'id'                  => 'ID',
            'id_helper'           => ' ',
            'bill_no'         => 'Bill No',
            'customer_id'  => 'Customer Id',
            'total_items'          => 'Total Items',
            'total_amount'   => 'Total Amount',
            'total_delivery_amount'        => 'Total Delivery Charge',
            'subject_type_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'status' =>   'Order Status',
        
        ],
    ],
];
