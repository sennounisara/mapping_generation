<?php



/**
 * This class defines the structure of the 'exec_type_structure' table.
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
class CommonExecTypeStructureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecTypeStructureTableMap';

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
        $this->setName('exec_type_structure');
        $this->setPhpName('CommonExecTypeStructure');
        $this->setClassname('CommonExecTypeStructure');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
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
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_type_structure', ), null, null, 'CommonExecContractants');
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_type_structure', ), null, null, 'CommonExecContrats');
        $this->addRelation('CommonExecTypeContractant', 'CommonExecTypeContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_type_structure', ), null, null, 'CommonExecTypeContractants');
    } // buildRelations()

} // CommonExecTypeStructureTableMap
