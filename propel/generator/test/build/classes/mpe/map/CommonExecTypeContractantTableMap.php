<?php



/**
 * This class defines the structure of the 'exec_type_contractant' table.
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
class CommonExecTypeContractantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecTypeContractantTableMap';

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
        $this->setName('exec_type_contractant');
        $this->setPhpName('CommonExecTypeContractant');
        $this->setClassname('CommonExecTypeContractant');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_type_structure', 'IdTypeStructure', 'INTEGER', 'exec_type_structure', 'id', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecTypeStructure', 'CommonExecTypeStructure', RelationMap::MANY_TO_ONE, array('id_type_structure' => 'id', ), null, null);
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_type_contractant', ), null, null, 'CommonExecContractants');
    } // buildRelations()

} // CommonExecTypeContractantTableMap
