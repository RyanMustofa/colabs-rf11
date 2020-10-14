<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{
    AuthController,
    UserController,
    PortfolioCategoryController,
    BlogCategoryController,
    BlogController,
    PortfolioController,
    ProfileController,
    PortfolioGalleryController,
    CommentPortofolioController,
    CommentBlogController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    // show all blog & show detail blog
    Route::get('/blog', [BlogController::class, 'index']); //data blog yang berstatus publish
    Route::get('/blog/detail-post/{slug}', [BlogController::class, 'show']);
    // all portfolio & detail
    Route::get('/portfolio', [PortfolioController::class, 'index']);
    Route::get('/portfolio/detail/{url_slug}', [
        PortfolioController::class,
        'show'
    ]);
    Route::get('/portfolio/comment', [
        CommentPortofolioController::class,
        'index'
    ]);
    Route::get('/portfolio/comment/detail/{id}', [
        CommentPortofolioController::class,
        'index'
    ]);
    Route::get('/blog/comment', [CommentBlogController::class, 'index']);
    Route::get('/blog/comment/detail/{id}', [
        CommentBlogController::class,
        'index'
    ]);
    Route::group(['middleware' => 'jwt.verify'], function () {
        Route::group(['middleware' => ['role.check:admin']], function () {
            // route yang bisa diakses admin
            // Portfolio-category
            Route::get('/portfolio-category', [
                PortfolioCategoryController::class,
                'index'
            ]);
            Route::get('/portfolio-category/{id}', [
                PortfolioCategoryController::class,
                'index'
            ]);
            Route::post('/portfolio-category', [
                PortfolioCategoryController::class,
                'save'
            ]);
            Route::put('/portfolio-category/update/{id}', [
                PortfolioCategoryController::class,
                'save'
            ]);
            Route::delete('/portfolio-category/delete/{id}', [
                PortfolioCategoryController::class,
                'destroy'
            ]);
            // blog-category
            Route::get('/Blog-category', [
                BlogCategoryController::class,
                'index'
            ]);
            Route::get('/Blog-category/{id}', [
                BlogCategoryController::class,
                'index'
            ]);
            Route::post('/Blog-category', [
                BlogCategoryController::class,
                'save'
            ]);
            Route::put('/Blog-category/update/{id}', [
                BlogCategoryController::class,
                'save'
            ]);
            Route::delete('/Blog-category/delete/{id}', [
                BlogCategoryController::class,
                'destroy'
            ]);
            Route::post('/portfolio/comment', [
                CommentPortofolioController::class,
                'save'
            ]);
            Route::put('/portfolio/comment/update/{id}', [
                CommentPortofolioController::class,
                'save'
            ]);
            Route::delete('/portfolio/comment/delete/{id}', [
                CommentPortofolioController::class,
                'destroy'
            ]);
            Route::post('/blog/comment', [
                CommentBlogController::class,
                'save'
            ]);
            Route::put('/blog/comment/update/{id}', [
                CommentBlogController::class,
                'save'
            ]);
            Route::delete('/blog/comment/delete/{id}', [
                CommentBlogController::class,
                'destroy'
            ]);
        });
        Route::group(['middleware' => ['role.check:user']], function () {
            // route hanya yang bisa diakses user
        });
        Route::group(
            ['middleware' => ['role.check:user,uploader']],
            function () {
                // route yang bisa diakses user & uploader
            }
        );
        Route::group(['middleware' => ['role.check:uploader']], function () {
            // route yang hanya bisa diakses uploader
            // portfolio upload phto gallery
            Route::get('/portfolio-gallery', [
                PortfolioGalleryController::class,
                'index'
            ]);
            Route::post('/portfolio-gallery', [
                PortfolioGalleryController::class,
                'store'
            ]);
            Route::delete('/portfolio-gallery/delete/{id}', [
                PortfolioGalleryController::class,
                'destroy'
            ]);
            // portfolio route
            Route::post('/portfolio', [PortfolioController::class, 'save']);
            Route::put('/portfolio/update/{id}', [
                PortfolioController::class,
                'save'
            ]);
            Route::delete('/portfolio/delete/{id}', [
                PortfolioController::class,
                'destroy'
            ]);
            // portfolio gallery route
        });
        Route::group(
            ['middleware' => ['role.check:admin,user,uploader']],
            function () {
                // route yang bisa diakses semua role
                // update user profile - cover -data -photo_profile
                Route::get('/user/profile', [
                    ProfileController::class,
                    'profile'
                ]);
                Route::put('/user/profile', [
                    ProfileController::class,
                    'updateProfile'
                ]);
                Route::post('/user/update/profile-cover-user', [
                    ProfileController::class,
                    'updateCover'
                ]);
                Route::put('/user/update/profile-photo-user', [
                    ProfileController::class,
                    'updatePhoto'
                ]);
                // blog
                Route::post('/blog', [BlogController::class, 'store']);
                Route::get('/blog/all', [BlogController::class, 'showAll']); //seluruh data blog
                Route::put('/blog/update-post/{id}', [
                    BlogController::class,
                    'update'
                ]);
                Route::delete('/blog/delete-post/{id}', [
                    BlogController::class,
                    'destroy'
                ]);
                // logout
                Route::post('/logout', [AuthController::class, 'logout']);
            }
        );
    });
});
