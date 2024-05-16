<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\employee;
use App\Http\Controllers\customerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdvanceSalaryController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/dashboard', function () {
    return view('dashboards');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', [DashboardsController::class, 'index'])->name('dashboards');
    Route::get('/dashboards', [DashboardsController::class, 'index'])->name('dashboards');
    // employee route
    Route::get('/add-employee', [Employee::class, 'addEmployee'])->name('employee.add-employee');
    Route::get('/all-employee', [Employee::class, 'allEmployee'])->name('employee.all-employee');

    Route::post('/insert-employee', [Employee::class, 'store'])->name('addEmployee');
    Route::get('/view-employee{id}', [Employee::class, 'viewEmployee']);
    Route::get('/delete-employee{id}', [Employee::class, 'deleteEmployee']);
    Route::get('/edit-employee{id}', [Employee::class, 'editEmployee']);
    Route::post('/update-employee{id}', [Employee::class, 'updateEmployee']);

    // customer route
    Route::get('/all-customer', [customerController::class, 'index'])->name('customer.all-customer');
    Route::get('/add-customer', [customerController::class, 'create'])->name('customer.add-customer');

    Route::post('/insert-customer', [customerController::class, 'store'])->name('addCustomer');
    Route::get('/view-customer{id}', [customerController::class, 'show']);
    Route::get('/delete-customer{id}', [customerController::class, 'destroy']);
    Route::get('/edit-customer{id}', [customerController::class, 'edit']);
    Route::post('/update-customer{id}', [customerController::class, 'update']);

    // supplier route
    Route::get('/all-supplier', [SupplierController::class, 'index'])->name('supplier.all-supplier');
    Route::get('/add-supplier', [SupplierController::class, 'create'])->name('supplier.add-supplier');

    Route::post('/insert-supplier', [SupplierController::class, 'store']);
    Route::get('/view-supplier{id}', [SupplierController::class, 'show']);
    Route::get('/delete-supplier{id}', [SupplierController::class, 'destroy']);
    Route::get('/edit-supplier{id}', [SupplierController::class, 'edit']);
    Route::post('/update-supplier{id}', [SupplierController::class, 'update']);

    // Salary route
    Route::get('/all-salary', [salaryController::class, 'index'])->name('salary.all-salary');
    Route::get('/add-salary', [salaryController::class, 'create'])->name('salary.add-salary');

    Route::post('/insert-salary', [salaryController::class, 'store'])->name('store');
    Route::get('/view-salary{id}', [salaryController::class, 'show']);
    Route::get('/delete-salary{id}', [salaryController::class, 'destroy']);
    Route::get('/edit-salary{id}', [salaryController::class, 'edit']);
    Route::post('/update-salary{id}', [salaryController::class, 'update']);

    // Advance Salary route
    Route::get('/all-advance-salary', [AdvanceSalaryController::class, 'index'])->name('salary.all-advance-salary');
    Route::get('/add-advance-salary', [AdvanceSalaryController::class, 'create'])->name('salary.add-advance-salary');

    Route::post('/insert-advance-salary', [AdvanceSalaryController::class, 'store'])->name('advanceSalary');
    Route::get('/view-advance-salary{id}', [AdvanceSalaryController::class, 'show']);
    Route::get('/delete-advance-salary{id}', [AdvanceSalaryController::class, 'destroy']);
    Route::get('/edit-advance-salary{id}', [AdvanceSalaryController::class, 'edit']);
    Route::post('/update-advance-salary{id}', [AdvanceSalaryController::class, 'update']);

    // pay due salary / salary
    Route::get('/add-salary/{id}', [SalaryController::class, 'create'])->name('add-salary');
    Route::post('/store-salary', [SalaryController::class,'storeSalary'])->name('storeSalary');

    Route::get('/view-salary{id}', [SalaryController::class, 'show']);
    Route::get('/delete-salary{id}', [SalaryController::class, 'destroy']);
    Route::get('/edit-salary{id}', [SalaryController::class, 'edit']);
    Route::post('/update-salary{id}', [SalaryController::class, 'updateSalary'])->name('updateSalary');


    // Categories route
    Route::get('/all-product-categories', [CategoriesController::class, 'index'])->name('allCategories');
    Route::get('/add-product-categories', [CategoriesController::class, 'create'])->name('addCategories');

    
    Route::post('/insert-product-categories', [CategoriesController::class, 'store']);
    Route::get('/view-product-categories/{id}', [CategoriesController::class, 'show']);
    Route::get('/delete-product-categories/{id}', [CategoriesController::class, 'destroy']);
    Route::get('/edit-product-categories/{id}', [CategoriesController::class, 'edit']);
    Route::post('/update-product-categories/{id}', [CategoriesController::class, 'update']);
    
    // Product route
    Route::get('/all-product', [ProductController::class, 'index'])->name('allProduct');
    Route::get('/add-product', [ProductController::class, 'create'])->name('addProduct');
    
    Route::post('/insert-product', [ProductController::class, 'store']);
    Route::get('/view-product/{id}', [ProductController::class, 'show']);
    Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);
    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::post('/update-product/{id}', [ProductController::class, 'update']);
    Route::get('/update-product-qty-view', [ProductController::class, 'updateProductQtyView'])->name('updateProductQtyView');
    Route::get('/update-product-qty/{id}', [ProductController::class, 'updateProductQty'])->name('updateProductQty');

    // Expense route
    Route::get('/all-expense', [ExpensesController::class, 'index'])->name('allExpense');
    Route::get('/add-expense', [ExpensesController::class, 'create'])->name('addExpense');
    Route::get('/today-expense', [ExpensesController::class, 'todayExpense'])->name('todayExpense');
    Route::get('/monthly-expense', [ExpensesController::class, 'monthlyExpense'])->name('monthlyExpense');
    Route::get('/yearly-expense', [ExpensesController::class, 'yearlyExpense'])->name('yearlyExpense');

    Route::post('/insert-expense', [ExpensesController::class, 'store']);
    Route::get('/view-expense/{id}', [ExpensesController::class, 'show']);
    Route::get('/delete-expense/{id}', [ExpensesController::class, 'destroy']);
    Route::get('/edit-expense/{id}', [ExpensesController::class, 'edit']);
    Route::post('/update-expense/{id}', [ExpensesController::class, 'update']);

    // monthly expense Route

    Route::get('/January-expense', [ExpensesController::class, 'JanuaryExpense'])->name('JanuaryExpense');
    Route::get('/February-expense', [ExpensesController::class, 'FebruaryExpense'])->name('FebruaryExpense');
    Route::get('/March-expense', [ExpensesController::class, 'MarchExpense'])->name('MarchExpense');
    Route::get('/April-expense', [ExpensesController::class, 'AprilExpense'])->name('AprilExpense');
    Route::get('/May-expense', [ExpensesController::class, 'MayExpense'])->name('MayExpense');
    Route::get('/June-expense', [ExpensesController::class, 'JuneExpense'])->name('JuneExpense');
    Route::get('/July-expense', [ExpensesController::class, 'JulyExpense'])->name('JulyExpense');
    Route::get('/August-expense', [ExpensesController::class, 'AugustExpense'])->name('AugustExpense');
    Route::get('/September-expense', [ExpensesController::class, 'SeptemberExpense'])->name('SeptemberExpense');
    Route::get('/October-expense', [ExpensesController::class, 'OctoberExpense'])->name('OctoberExpense');
    Route::get('/November-expense', [ExpensesController::class, 'NovemberExpense'])->name('NovemberExpense');
    Route::get('/December-expense', [ExpensesController::class, 'DecemberExpense'])->name('DecemberExpense');

    // attendance

    Route::get('/all-attendance', [AttendanceController::class, 'index'])->name('allAttendance');
    Route::get('/take-attendance', [AttendanceController::class, 'create'])->name('takeAttendance');
    Route::post('/insert-attendance', [AttendanceController::class, 'store'])->name('attendanceEmployee');
    Route::get('/edit-attendance/{id}', [AttendanceController::class, 'edit'])->name('editAttendance');
    Route::post('/update-attendance', [AttendanceController::class, 'update']);
    Route::get('/delete-attendance/{edit_date}', [AttendanceController::class, 'destroy']);

    // Pos
    Route::get('/pos', [PosController::class, 'index'])->name('pos');
    Route::get('/pending-orders', [PosController::class, 'pendingOrder'])->name('pendingOrder');
    Route::get('/view-order/{id}', [PosController::class, 'viewOrder'])->name('viewOrder');
    Route::get('/view-paid-order/{id}', [PosController::class, 'viewPaidOrder'])->name('viewPaidOrder');
    Route::get('/paid/{id}', [PosController::class, 'paidOrder']);
    Route::get('/paid-orders', [PosController::class, 'paidAllOrder'])->name('paidOrder');

    // individual paid details for day, month, year

    // Route::get('/today-paid', [PosController::class, 'todayPaid'])->name('todayPaid');
    // Route::get('/monthly-paid', [PosController::class, 'monthlyPaid'])->name('monthlyPaid');
    // Route::get('/yearly-paid', [PosController::class, 'yearlyPaid'])->name('yearlyPaid');


    // Card Controller
    Route::post('/add-card', [CardController::class, 'store']);
    Route::post('/update-card/{rowId}', [CardController::class, 'update']);
    Route::get('/delete-cart/{rowId}', [CardController::class, 'destroy']);
    Route::get('/create-invoice', [CardController::class, 'createInvoice']);
    Route::get('/final-invoice', [CardController::class, 'finalInvoice']);
    Route::get('/due-pay/{id}', [CardController::class, 'duePay']);

    // sales Reports

    Route::get('/all-sales-report', [SalesReportController::class, 'index'])->name('allSalesReport');
    Route::get('/add-sales-report', [SalesReportController::class, 'create'])->name('addSalesReport');

    Route::get('/today-sales-report', [SalesReportController::class, 'todaySalesReport'])->name('todaySalesReport');
    Route::get('/monthly-sales-report', [SalesReportController::class, 'monthlySalesReport'])->name('monthlySalesReport');
    Route::get('/yearly-sales-report', [SalesReportController::class, 'yearlySalesReport'])->name('yearlySalesReport');

    // monthly Sales Report Route

    Route::get('/January-Sales-Report', [SalesReportController::class, 'JanuarySalesReport'])->name('JanuarySalesReport');
    Route::get('/February-Sales-Report', [SalesReportController::class, 'FebruarySalesReport'])->name('FebruarySalesReport');
    Route::get('/March-Sales-Report', [SalesReportController::class, 'MarchSalesReport'])->name('MarchSalesReport');
    Route::get('/April-Sales-Report', [SalesReportController::class, 'AprilSalesReport'])->name('AprilSalesReport');
    Route::get('/May-Sales-Report', [SalesReportController::class, 'MaySalesReport'])->name('MaySalesReport');
    Route::get('/June-Sales-Report', [SalesReportController::class, 'JuneSalesReport'])->name('JuneSalesReport');
    Route::get('/July-Sales-Report', [SalesReportController::class, 'JulySalesReport'])->name('JulySalesReport');
    Route::get('/August-Sales-Report', [SalesReportController::class, 'AugustSalesReport'])->name('AugustSalesReport');
    Route::get('/September-Sales-Report', [SalesReportController::class, 'SeptemberSalesReport'])->name('SeptemberSalesReport');
    Route::get('/October-Sales-Report', [SalesReportController::class, 'OctoberSalesReport'])->name('OctoberSalesReport');
    Route::get('/November-Sales-Report', [SalesReportController::class, 'NovemberSalesReport'])->name('NovemberSalesReport');
    Route::get('/December-Sales-Report', [SalesReportController::class, 'DecemberSalesReport'])->name('DecemberSalesReport');

    // yearly sales Report

    Route::get('/yearly-Sales-Report', [SalesReportController::class, 'yearlySalesReport'])->name('yearly-Sales-Reports');

    // Export Route 

    Route::get('/export', [ExcelController::class, 'export'])->name('export');
    Route::post('/import', [ExcelController::class, 'import'])->name('import');


    // setting

    Route::get('/view-setting', [SettingController::class, 'index']);
    Route::get('/edit-setting', [SettingController::class, 'update']);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');


});

require __DIR__.'/auth.php';
