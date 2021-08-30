<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Form;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Show;
use Encore\Admin\Table;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new User());

        $table->column('id', __('Id'));
        $table->column('name', __('Name'));
        $table->column('token', __('Token'));
        $table->column('role', __('Role'));
        $table->column('nis', __('Nis'));
        $table->column('kelas', __('Kelas'));
        $table->column('email', __('Email'));
        // $table->column('email_verified_at', __('Email verified at'));
        // $table->column('password', __('Password'));
        // $table->column('two_factor_secret', __('Two factor secret'));
        // $table->column('two_factor_recovery_codes', __('Two factor recovery codes'));
        // $table->column('remember_token', __('Remember token'));
        // $table->column('current_team_id', __('Current team id'));
        // $table->column('profile_photo_path', __('Profile photo path'));
        // $table->column('created_at', __('Created at'));
        // $table->column('updated_at', __('Updated at'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('token', __('Token'));
        $show->field('role', __('Role'));
        $show->field('nis', __('Nis'));
        $show->field('kelas', __('Kelas'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('two_factor_secret', __('Two factor secret'));
        $show->field('two_factor_recovery_codes', __('Two factor recovery codes'));
        $show->field('remember_token', __('Remember token'));
        $show->field('current_team_id', __('Current team id'));
        $show->field('profile_photo_path', __('Profile photo path'))->image();
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->number('token', __('Token'))->default(3);
        $form->number('role', __('Role'));
        $form->text('nis', __('Nis'));
        $form->text('kelas', __('Kelas'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->textarea('two_factor_secret', __('Two factor secret'));
        $form->textarea('two_factor_recovery_codes', __('Two factor recovery codes'));
        $form->text('remember_token', __('Remember token'));
        $form->number('current_team_id', __('Current team id'));
        $form->text('profile_photo_path', __('Profile photo path'));

        return $form;
    }
}
