<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            "name" => "All Routes",
            "slug" => "all_routes",
            "route_name" => "*",
            "description" => "All routes.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Home",
            "slug" => "home",
            "route_name" => "home",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "All Events",
            "slug" => "all_events",
            "route_name" => "events.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Create Event",
            "slug" => "create_event",
            "route_name" => "events.create",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Store Event",
            "slug" => "store_event",
            "route_name" => "events.store",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Show Event",
            "slug" => "show_event",
            "route_name" => "events.show",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Delete Event",
            "slug" => "delete_event",
            "route_name" => "events.delete",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


        DB::table("permissions")->insert([
            "name" => "All Teachers",
            "slug" => "all_teachers",
            "route_name" => "academic.teachers.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Show Teacher",
            "slug" => "show_teacher",
            "route_name" => "academic.teachers.show",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "All Timetables",
            "slug" => "all_timetables",
            "route_name" => "timetables.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Create Timetable",
            "slug" => "create_timetable",
            "route_name" => "timetables.create",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Store Timetable",
            "slug" => "store_timetable",
            "route_name" => "timetables.store",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "All Salary Requests",
            "slug" => "all_salary_requests",
            "route_name" => "academic.salary-requests.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Show Salary Request",
            "slug" => "show_salary_request",
            "route_name" => "academic.salary-requests.show",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Generate Salary Report",
            "slug" => "generate_salary_report",
            "route_name" => "report.salary-requests",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "All Users",
            "slug" => "all_users",
            "route_name" => "control-panel.users.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Store User",
            "slug" => "store_user",
            "route_name" => "control-panel.users.store",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Create User",
            "slug" => "create_user",
            "route_name" => "control-panel.users.create",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Show User",
            "slug" => "show_user",
            "route_name" => "control-panel.users.show",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Edit User",
            "slug" => "edit_user",
            "route_name" => "control-panel.users.edit",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Update User",
            "slug" => "update_user",
            "route_name" => "control-panel.users.update",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Delete User",
            "slug" => "delete_user",
            "route_name" => "control-panel.users.delete",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


        DB::table("permissions")->insert([
            "name" => "All Roles",
            "slug" => "all_roles",
            "route_name" => "control-panel.roles.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Store Role",
            "slug" => "store_role",
            "route_name" => "control-panel.roles.store",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Create Role",
            "slug" => "create_role",
            "route_name" => "control-panel.roles.create",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Edit Role",
            "slug" => "edit_role",
            "route_name" => "control-panel.roles.edit",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Update Role",
            "slug" => "update_role",
            "route_name" => "control-panel.roles.update",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Delete Role",
            "slug" => "delete_role",
            "route_name" => "control-panel.roles.delete",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "All Permissions",
            "slug" => "all_permissions",
            "route_name" => "control-panel.permissions.index",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Store Permissions",
            "slug" => "store_permissions",
            "route_name" => "control-panel.permissions.store",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Create Permissions",
            "slug" => "create_permissions",
            "route_name" => "control-panel.permissions.create",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Edit Permissions",
            "slug" => "edit_permissions",
            "route_name" => "control-panel.permissions.edit",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Update Permissions",
            "slug" => "update_permissions",
            "route_name" => "control-panel.permissions.update",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Delete Permissions",
            "slug" => "delete_permissions",
            "route_name" => "control-panel.permissions.delete",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("permissions")->insert([
            "name" => "Teacher Full Report",
            "slug" => "teacher_full_report",
            "route_name" => "reports.teachers-full-report",
            "description" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
