<?php

namespace App\Http\Sections;

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
 * Class Roles
 *
 * @property \App\Models\Role $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Roles extends Section implements Initializable
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

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatables()->with('users')
            ->setHtmlAttribute('class', 'table-primary')
            ->setNewEntryButtonText(trans('sleeping_owl::lang.button.new_role'))
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('name', trans('sleeping_owl::lang.table.titles.name')),
                AdminColumn::link('description', trans('sleeping_owl::lang.table.titles.description'))
            )->paginate(20);
    }

    public function getTitle()
    {
        return trans('sleeping_owl::lang.titles.roles');
    }

    public function getIcon()
    {
        return 'fa fa-id-card-o';
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', trans('sleeping_owl::lang.table.titles.name'))->required(),
            AdminFormElement::text('description', trans('sleeping_owl::lang.table.titles.description'))->required()
        ]);
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
