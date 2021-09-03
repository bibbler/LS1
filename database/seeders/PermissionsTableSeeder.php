<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 23,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 24,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 25,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 28,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 29,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 30,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 33,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 34,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 35,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 38,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 39,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 40,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 41,
                'title' => 'team_create',
            ],
            [
                'id'    => 42,
                'title' => 'team_edit',
            ],
            [
                'id'    => 43,
                'title' => 'team_show',
            ],
            [
                'id'    => 44,
                'title' => 'team_delete',
            ],
            [
                'id'    => 45,
                'title' => 'team_access',
            ],
            [
                'id'    => 46,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 47,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 48,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 49,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 50,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 51,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 52,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 53,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 54,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 55,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 56,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 57,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 58,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 59,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 60,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 61,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 62,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 63,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 64,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 65,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 66,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 67,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 68,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 69,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 70,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 71,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 72,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 73,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 74,
                'title' => 'product_create',
            ],
            [
                'id'    => 75,
                'title' => 'product_edit',
            ],
            [
                'id'    => 76,
                'title' => 'product_show',
            ],
            [
                'id'    => 77,
                'title' => 'product_delete',
            ],
            [
                'id'    => 78,
                'title' => 'product_access',
            ],
            [
                'id'    => 79,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 80,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 81,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 82,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 83,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 84,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 85,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 86,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 87,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 88,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 89,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 90,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 91,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 92,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 93,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 94,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 95,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 96,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 97,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 98,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 99,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 100,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 101,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 102,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 103,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 104,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 105,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 106,
                'title' => 'task_create',
            ],
            [
                'id'    => 107,
                'title' => 'task_edit',
            ],
            [
                'id'    => 108,
                'title' => 'task_show',
            ],
            [
                'id'    => 109,
                'title' => 'task_delete',
            ],
            [
                'id'    => 110,
                'title' => 'task_access',
            ],
            [
                'id'    => 111,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 112,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 113,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 114,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 115,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 116,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 117,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 118,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 119,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 120,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 121,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 122,
                'title' => 'contact_contact_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
