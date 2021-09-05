<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        $rows = [

            [
                'parent_id' => '0',
                'menu_name' => 'Roles Management',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_icon' => 'fa fa-key',
                'menu_status' => '1',
                'menu_order' => '8',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '1',
                'menu_name' => 'User Types',
                'menu_link' => '/roles/type',
                'menu_controller' => 'UserTypeController',
                'menu_icon' => 'fa fa-user-plus',
                'menu_status' => '1',
                'menu_order' => '1',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '1',
                'menu_name' => 'Role Access',
                'menu_link' => '/roles/userTypeRoleAccess',
                'menu_controller' => 'RoleAccessController',
                'menu_icon' => 'fa fa-unlock',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Menu Management',
                'menu_link' => '/roles/menu',
                'menu_controller' => 'MenuController',
                'menu_icon' => 'fa fa-list',
                'menu_status' => '0',
                'menu_order' => '9',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Users Management',
                'menu_link' => '/users',
                'menu_controller' => 'UserController',
                'menu_icon' => 'fa fa-users',
                'menu_status' => '1',
                'menu_order' => '10',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Logs Management',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_icon' => 'fa fa-wrench',
                'menu_status' => '1',
                'menu_order' => '10',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '6',
                'menu_name' => 'Login Logs',
                'menu_link' => '/logs/loginLogs',
                'menu_controller' => 'LoginLogsController',
                'menu_icon' => 'fa fa-user-plus',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '0',
            ],

            [
                'parent_id' => '6',
                'menu_name' => 'Failed Login Logs',
                'menu_link' => '/logs/failLoginLogs',
                'menu_controller' => 'FailedLoginLogsController',
                'menu_icon' => 'fa fa-user-times',
                'menu_status' => '1',
                'menu_order' => '10',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '6',
                'menu_name' => 'Action Logs',
                'menu_link' => 'logs/actionLogs',
                'menu_controller' => 'ActionLogsController',
                'menu_icon' => 'fa fa-tasks',
                'menu_status' => '1',
                'menu_order' => '1',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'System Setting',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_icon' => 'fa fa-tasks',
                'menu_status' => '1',
                'menu_order' => '11',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Office Type',
                'menu_link' => '/systemSetting/officeType',
                'menu_controller' => 'OfficeTypeController',
                'menu_icon' => 'fa fa-list-alt',
                'menu_status' => '1',
                'menu_order' => '1',
                'action_module_status' => '1',

            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Office',
                'menu_link' => '/systemSetting/office',
                'menu_controller' => 'OfficeController',
                'menu_icon' => 'fa fa-building',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '1',

            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Department',
                'menu_link' => '/systemSetting/department',
                'menu_controller' => 'DepartmentController',
                'menu_icon' => 'fa fa-home',
                'menu_status' => '1',
                'menu_order' => '3',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'City',
                'menu_link' => '/systemSetting/city',
                'menu_controller' => 'CityController',
                'menu_icon' => 'fas fa-home',
                'menu_status' => '1',
                'menu_order' => '4',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Designation',
                'menu_link' => '/systemSetting/designation',
                'menu_controller' => 'DesignationController',
                'menu_icon' => 'fa fa-user-graduate',
                'menu_status' => '1',
                'menu_order' => '5',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Fiscal Year',
                'menu_link' => '/systemSetting/fiscalYear',
                'menu_controller' => 'FiscalYearController',
                'menu_icon' => 'fa fa-calendar',
                'menu_status' => '1',
                'menu_order' => '6',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Product Category',
                'menu_link' => '/systemSetting/productCategory',
                'menu_controller' => 'ProductCategoryController',
                'menu_icon' => 'fas fa-list',
                'menu_status' => '1',
                'menu_order' => '7',
                'action_module_status' => '1',
            ],

            [
                'parent_id' => '10',
                'menu_name' => 'Source of Queries',
                'menu_link' => '/systemSetting/sourceQuery',
                'menu_controller' => 'SourceQueryController',
                'menu_icon' => 'fas fa-question',
                'menu_status' => '1',
                'menu_order' => '8',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Payment Methods',
                'menu_link' => '/systemSetting/paymentMethod',
                'menu_controller' => 'PaymentMethodController',
                'menu_icon' => 'fas fa-money-bill-alt',
                'menu_status' => '1',
                'menu_order' => '9',
                'action_module_status' => '1',
            ],

            [
                'parent_id' => '10',
                'menu_name' => 'App Setting',
                'menu_link' => 'systemSetting/appSetting',
                'menu_controller' => 'AppSettingController',
                'menu_icon' => 'fa fa-bell',
                'menu_status' => '1',
                'menu_order' => '10',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Mail Setting',
                'menu_link' => 'systemSetting/mailSetting',
                'menu_controller' => 'EmailSettingController',
                'menu_icon' => 'fa fa-envelope',
                'menu_status' => '1',
                'menu_order' => '11',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '10',
                'menu_name' => 'Login Setting',
                'menu_link' => 'systemSetting/loginSetting',
                'menu_controller' => 'LoginSettingController',
                'menu_icon' => 'fa fa-key',
                'menu_status' => '1',
                'menu_order' => '12',
                'action_module_status' => '1',
            ],


            [
                'parent_id' => '0',
                'menu_name' => 'Campaign',
                'menu_link' => '/campaign',
                'menu_controller' => 'CampaignController',
                'menu_icon' => 'fas fa-bullseye',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '1',
            ],

            [
                'parent_id' => '0',
                'menu_name' => 'Product',
                'menu_link' => '/product',
                'menu_controller' => 'ProductController',
                'menu_icon' => 'fas fa-list-alt',
                'menu_status' => '1',
                'menu_order' => '3',
                'action_module_status' => '1',
            ],

            [
                'parent_id' => '0',
                'menu_name' => 'Customer',
                'menu_link' => '/customer',
                'menu_controller' => 'CustomerController',
                'menu_icon' => 'fas fa-user-md',
                'menu_status' => '1',
                'menu_order' => '5',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Customer Followup',
                'menu_link' => '/followup',
                'menu_controller' => 'CustomerFollowupController',
                'menu_icon' => 'fas fa-phone-square-alt"',
                'menu_status' => '1',
                'menu_order' => '6',
                'action_module_status' => '1',
            ],

            [
                'parent_id' => '0',
                'menu_name' => 'Customer Queries',
                'menu_link' => '/query',
                'menu_controller' => 'CustomerQueryController',
                'menu_icon' => 'fas fa-question-circle',
                'menu_status' => '1',
                'menu_order' => '7',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Feedback',
                'menu_link' => '/feedback',
                'menu_controller' => 'FeedbackController',
                'menu_icon' => 'fas fa-comment-dots',
                'menu_status' => '0',
                'menu_order' => '6',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Payments',
                'menu_link' => '/payment',
                'menu_controller' => 'PaymentController',
                'menu_icon' => 'fas fa-money-bill-alt',
                'menu_status' => '1',
                'menu_order' => '7',
                'action_module_status' => '1',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Report',
                'menu_link' => '',
                'menu_controller' => '',
                'menu_icon' => 'fas fa-chart-bar',
                'menu_status' => '1',
                'menu_order' => '7',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '30',
                'menu_name' => 'Office Wise Sell Report',
                'menu_link' => 'report/officeWiseReport',
                'menu_controller' => 'OfficeWiseReportController',
                'menu_icon' => 'far fa-building',
                'menu_status' => '1',
                'menu_order' => '1',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '30',
                'menu_name' => 'Product Wise Sell Report',
                'menu_link' => 'report/productWiseSellReport',
                'menu_controller' => 'ProductWiseReportController',
                'menu_icon' => 'fab fa-product-hunt',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Mobile App User',
                'menu_link' => 'appUser',
                'menu_controller' => 'AppUserController',
                'menu_icon' => 'fa fa-mobile',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'DSR',
                'menu_link' => 'dsr',
                'menu_controller' => 'DailySalesReportController',
                'menu_icon' => 'fa fa-list',
                'menu_status' => '1',
                'menu_order' => '2',
                'action_module_status' => '0',
            ],
            [
                'parent_id' => '0',
                'menu_name' => 'Notice',
                'menu_link' => 'notice',
                'menu_controller' => 'NoticeController',
                'menu_icon' => 'fa fa-bell',
                'menu_status' => '1',
                'menu_order' => '4',
                'action_module_status' => '1',
            ],


        ];
        DB::table('menus')->insert($rows);
    }
}