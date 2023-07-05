<?php

namespace App\Admin\Controllers;

use App\Models\Seller;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SellerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Seller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Seller());

        $grid->column('id', __('Id'));
        $grid->column('nickname', __('Nickname'));
        $grid->column('last_login_time', __('Last login time'));
        $grid->column('availability_status', __('Availability status'));
        $grid->column('gender', __('Gender'));
        $grid->column('age', __('Age'));
        $grid->column('sales_record', __('Sales record'));
        $grid->column('rating', __('Rating'));
        $grid->column('follower_count', __('Follower count'));
        $grid->column('coconala_user_id', __('Coconala user id'));
        $grid->column('search_text', __('Search text'));
        $grid->column('detail', __('Detail'));
        $grid->column('profile_image', __('Profile image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
	$grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Seller::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nickname', __('Nickname'));
        $show->field('last_login_time', __('Last login time'));
        $show->field('availability_status', __('Availability status'));
        $show->field('gender', __('Gender'));
        $show->field('age', __('Age'));
        $show->field('sales_record', __('Sales record'));
        $show->field('rating', __('Rating'));
        $show->field('follower_count', __('Follower count'));
        $show->field('coconala_user_id', __('Coconala user id'));
        $show->field('search_text', __('Search text'));
        $show->field('detail', __('Detail'));
        $show->field('profile_image', __('Profile image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Seller());

        $form->text('nickname', __('Nickname'));
        $form->datetime('last_login_time', __('Last login time'))->default(date('Y-m-d H:i:s'));
        $form->text('availability_status', __('Availability status'));
        $form->text('gender', __('Gender'));
        $form->number('age', __('Age'));
        $form->number('sales_record', __('Sales record'));
        $form->decimal('rating', __('Rating'));
        $form->number('follower_count', __('Follower count'));
        $form->number('coconala_user_id', __('Coconala user id'));
        $form->text('search_text', __('Search text'));
        $form->textarea('detail', __('Detail'));
        $form->text('profile_image', __('Profile image'));

        return $form;
    }
}
