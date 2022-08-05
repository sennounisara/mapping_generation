<?php



/**
 * This class defines the structure of the 'Operations' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonOperationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonOperationsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Operations');
        $this->setPhpName('CommonOperations');
        $this->setClassname('CommonOperations');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_operation', 'IdOperation', 'INTEGER', true, null, null);
        $this->addColumn('acronyme', 'Acronyme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('type', 'Type', 'INTEGER', true, 2, null);
        $this->addColumn('categorie', 'Categorie', 'INTEGER', false, 2, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'CLOB', true, null, null);
        $this->addColumn('annee_debut', 'AnneeDebut', 'VARCHAR', true, 4, null);
        $this->addColumn('annee_fin', 'AnneeFin', 'VARCHAR', true, 4, null);
        $this->addColumn('budget', 'Budget', 'VARCHAR', true, 40, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('supprime', 'Supprime', 'CHAR', true, null, '0');
        $this->getColumn('supprime', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonOperationsTableMap
