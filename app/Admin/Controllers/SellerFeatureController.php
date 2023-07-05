<?php

namespace App\Admin\Controllers;

use App\Models\SellerFeature;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SellerFeatureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SellerFeature';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SellerFeature());

        $grid->column('id', __('Id'));
        $grid->column('seller_id', __('Seller id'));
        $grid->column('feature', __('Feature'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(SellerFeature::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seller_id', __('Seller id'));
        $show->field('feature', __('Feature'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SellerFeature());

        $form->number('seller_id', __('Seller id'));
        $form->textarea('feature', __('Feature'));

        return $form;
    }
}
