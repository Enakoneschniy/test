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
        return AdminDisplay::datatables()->with('roles')
            ->setHtmlAttribute('class', 'table-primary')
            ->setNewEntryButtonText(trans('sleeping_owl::lang.button.new_user'))
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('name', trans('sleeping_owl::lang.table.titles.name')),
                AdminColumn::link('email', 'Email'),
                AdminColumn::link('rating', trans('sleeping_owl::lang.table.titles.rating')),
                AdminColumn::link('roles.name', trans('sleeping_owl::lang.table.titles.role'))
       /*         AdminColumnEditable::select('role')->setWidth('250px')
                    ->setModelForOptions(new Role)
                    ->setLabel('Роль')
                    ->setDisplay('name')
                    ->setLoadOptionsQueryPreparer(function($element, $query) {
                        return $query->MyScoupe();
                    })->setTitle('Выберите роль:')*/
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {

    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
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
