<?php



/**
 * This class defines the structure of the 'exec_type_evenement' table.
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
class CommonExecTypeEvenementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecTypeEvenementTableMap';

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
        $this->setName('exec_type_evenement');
        $this->setPhpName('CommonExecTypeEvenement');
        $this->setClassname('CommonExecTypeEvenement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 255, null);
        $this->addColumn('demande', 'Demande', 'BOOLEAN', false, 1, false);
        $this->addColumn('controle_input', 'ControleInput', 'VARCHAR', false, 50, null);
        $this->addColumn('reconductible', 'Reconductible', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecEvenement', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_type_evenement', ), null, null, 'CommonExecEvenements');
        $this->addRelation('CommonExecTypeEvenementOrganisme', 'CommonExecTypeEvenementOrganisme', RelationMap::ONE_TO_MANY, array('id' => 'id_type_evenement', ), null, null, 'CommonExecTypeEvenementOrganismes');
    } // buildRelations()

} // CommonExecTypeEvenementTableMap
