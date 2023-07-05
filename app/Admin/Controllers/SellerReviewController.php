<?php

namespace App\Admin\Controllers;

use App\Models\SellerReview;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SellerReviewController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SellerReview';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SellerReview());

        $grid->column('id', __('Id'));
        $grid->column('seller_id', __('Seller id'));
        $grid->column('review', __('Review'));
        $grid->column('rate', __('Rate'));
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
        $show = new Show(SellerReview::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seller_id', __('Seller id'));
        $show->field('review', __('Review'));
        $show->field('rate', __('Rate'));
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
        $form = new Form(new SellerReview());

        $form->number('seller_id', __('Seller id'));
        $form->textarea('review', __('Review'));
        $form->decimal('rate', __('Rate'));

        return $form;
    }
}
