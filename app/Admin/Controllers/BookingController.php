<?php

namespace App\Admin\Controllers;

use App\Booking;
use Encore\Admin\Form;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Show;
use Encore\Admin\Table;

class BookingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Booking';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new Booking());

        $table->column('id', __('Id'));
        $table->column('user_id', __('User id'));
        $table->column('tanggal', __('Tanggal'));
        $table->column('room_id', __('Room id'));
        $table->column('created_at', __('Created at'));
        $table->column('updated_at', __('Updated at'));

        return $table;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Booking::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('room_id', __('Room id'));
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
        $form = new Form(new Booking());

        $form->number('user_id', __('User id'));
        $form->date('tanggal', __('Tanggal'))->default(date('Y-m-d'));
        $form->number('room_id', __('Room id'));

        return $form;
    }
}
