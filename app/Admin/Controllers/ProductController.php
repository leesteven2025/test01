<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;


class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'));
        $grid->column('on_sale', __('On sale'));
        $grid->column('price', __('Price'));
        $grid->column('unitsold', __('Unitsold'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('on_sale', __('On sale'));
        $show->field('price', __('Price'));
        $show->field('unitsold', __('Unitsold'));
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
        $form = new Form(new Product());

        $form->text('title', __('Title'))->rules('required');
        $form->ckeditor('description', __('Description'))->rules('required');
        $form->image('image', __('Image'))->rules('required');
        $form->switch('on_sale', __('On sale'))->default(1);
        $form->number('price', __('Price'))->rules('required|min:3');
        $form->number('unitsold', __('Unitsold'));

        return $form;
    }

    public function index(Content $content)
    {
        return $content
        ->header('商品管理')
        ->description('管理所有賣場商品')
        ->body($this->grid());
    }
    public function edit($id, Content $content)
    {
        return $content
        ->header('編輯商品')
        ->description('可於此頁面修改商品內容')
        ->body($this->form()->edit($id));
    }
    
}
