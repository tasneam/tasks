<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Departments
    Route::apiResource('departments', 'DepartmentsApiController');

    // Projects
    Route::apiResource('projects', 'ProjectsApiController');

    // Tasks
    Route::apiResource('tasks', 'TasksApiController');

    // Department Employees
    Route::apiResource('department-employees', 'DepartmentEmployeesApiController');
});
