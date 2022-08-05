<?php



/**
 * This class defines the structure of the 'ItemCritereEvaluation' table.
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
class CommonItemCritereEvaluationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonItemCritereEvaluationTableMap';

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
        $this->setName('ItemCritereEvaluation');
        $this->setPhpName('CommonItemCritereEvaluation');
        $this->setClassname('CommonItemCritereEvaluation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('idCritereEvaluation', 'Idcritereevaluation', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prix', 'Prix', 'CHAR', true, null, '0');
        $this->getColumn('prix', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('quantite', 'Quantite', 'INTEGER', false, null, null);
        $this->addColumn('ponderation', 'Ponderation', 'INTEGER', false, null, null);
        $this->addColumn('numero', 'Numero', 'INTEGER', true, null, null);
        $this->addColumn('regle_evaluation', 'RegleEvaluation', 'INTEGER', true, 1, null);
        $this->addColumn('type_item', 'TypeItem', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonItemCritereEvaluationTableMap
