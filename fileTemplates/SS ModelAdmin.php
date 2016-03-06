<?php

/**
 * Class ${NAME}
 */
class ${NAME} extends ModelAdmin
{
    private static ${DS}url_segment = '$UrlSegment';

    private static ${DS}menu_title = '$MenuTitle';

    private static ${DS}managed_models = array($ManagedModels);



    public function getEditForm(${DS}id = null, ${DS}fields = null)
    {
        ${DS}form = parent::getEditForm(${DS}id, ${DS}fields);

        /** @var FieldList ${DS}fields */
        ${DS}fields = ${DS}form->Fields();

        ${DS}fields->insertBefore(HeaderField::create('$HeaderFieldName', '$HeaderTitle'), '$GridField');

        // Tailor the gridfield
        /** @var GridField ${DS}gridField */
        ${DS}gridField = ${DS}fields->fieldByName('$GridField');
        ${DS}gridFieldConfig = ${DS}gridField->getConfig();

        ${DS}gridFieldConfig->removeComponentsByType('GridFieldExportButton');
        ${DS}gridFieldConfig->removeComponentsByType('GridFieldPrintButton');
        ${DS}gridFieldConfig->removeComponentsByType('GridFieldAddNewButton');

        ${DS}form->setFields(${DS}fields);

        return ${DS}form;
    }

}