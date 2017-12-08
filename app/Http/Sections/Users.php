<?php

namespace App\Http\Sections;

use App\Models\Role;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminColumnEditable;
/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation($priority = 500);

    }

    public function getIcon()
    {
        return 'fa fa-users';
    }

    public function getTitle()
    {
        return trans('sleeping_owl::lang.titles.users');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $table = AdminDisplay::datatables()->with('roles')
            ->setHtmlAttribute('class', 'table-primary')
                ->setActions([
                AdminColumn::action('password_reset', trans('sleeping_owl::lang.actions.password_reset'))->setAction(route('users.password_reset')),
            ])
            ->setNewEntryButtonText(trans('sleeping_owl::lang.button.new_user'))
            ->setColumns(
                AdminColumn::checkbox(),
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('name', trans('sleeping_owl::lang.table.titles.name')),
                AdminColumn::link('email', 'Email'),
                AdminColumn::link('rating', trans('sleeping_owl::lang.table.titles.rating')),
                AdminColumn::link('roles.name', trans('sleeping_owl::lang.table.titles.role'))
            )->paginate(20);
        $table->getActions()
            ->setHtmlAttribute('class', 'pull-left')
            ->setHtmlAttribute('style', 'margin-top: 15px; margin-left: -16px;');
        return $table;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()
            ->setHtmlAttribute('enctype', 'multipart/form-data')
            ->addBody([
                AdminFormElement::text('name', trans('sleeping_owl::lang.table.titles.name'))->required(),
                AdminFormElement::text('email', trans('sleeping_owl::lang.table.titles.email'))->required(),
                //AdminFormElement::password('password', trans('sleeping_owl::lang.table.titles.password'))->hashWithBcrypt()->required(),
                AdminFormElement::text('rating', trans('sleeping_owl::lang.table.titles.rating'))->setReadonly(true)->required(),
                AdminFormElement::image('avatar', trans('sleeping_owl::lang.table.titles.avatar')),
                AdminFormElement::multiselect('role', trans('sleeping_owl::lang.table.titles.role'))
                    ->setModelForOptions(Role::class)
                    ->setDisplay('name')->setFetchColumns('name'),
            ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()
            ->setHtmlAttribute('enctype', 'multipart/form-data')
            ->addBody([
            AdminFormElement::text('name', trans('sleeping_owl::lang.table.titles.name'))->required(),
            AdminFormElement::text('email', trans('sleeping_owl::lang.table.titles.email'))->addValidationRule('unique:users')->required(),
            AdminFormElement::password('password', trans('sleeping_owl::lang.table.titles.password'))->hashWithBcrypt()->required(),
            AdminFormElement::image('avatar', trans('sleeping_owl::lang.table.titles.avatar')),
            AdminFormElement::multiselect('role', trans('sleeping_owl::lang.table.titles.role'))
                    ->setModelForOptions(Role::class)
                    ->setDisplay('name')->setFetchColumns('name'),
        ]);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }


}
