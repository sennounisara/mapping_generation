<?php



/**
 * This class defines the structure of the 'EnchereOffre' table.
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
class CommonEnchereOffreTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereOffreTableMap';

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
        $this->setName('EnchereOffre');
        $this->setPhpName('CommonEnchereOffre');
        $this->setClassname('CommonEnchereOffre');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EnchereEntreprisePmi', 'organisme', true, 30, '');
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EncherePmi', 'organisme', true, 30, '');
        $this->addForeignKey('idEnchere', 'Idenchere', 'INTEGER', 'EncherePmi', 'id', true, 10, 0);
        $this->addForeignKey('idEnchere', 'Idenchere', 'INTEGER', 'EncherePmi', 'id', true, 10, 0);
        $this->addForeignKey('idEnchereEntreprise', 'Idenchereentreprise', 'INTEGER', 'EnchereEntreprisePmi', 'id', true, 10, 0);
        $this->addColumn('date', 'Date', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('valeurTIC', 'Valeurtic', 'DOUBLE', false, null, null);
        $this->addColumn('valeurTC', 'Valeurtc', 'DOUBLE', false, null, null);
        $this->addColumn('valeurNETC', 'Valeurnetc', 'DOUBLE', false, null, null);
        $this->addColumn('valeurNGC', 'Valeurngc', 'DOUBLE', false, null, null);
        $this->addColumn('rang', 'Rang', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonEnchereEntreprisePmi', 'CommonEnchereEntreprisePmi', RelationMap::MANY_TO_ONE, array('idEnchereEntreprise' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEncherePmiRelatedByIdenchereOrganisme', 'CommonEncherePmi', RelationMap::MANY_TO_ONE, array('idEnchere' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEncherePmiRelatedByIdenchere', 'CommonEncherePmi', RelationMap::MANY_TO_ONE, array('idEnchere' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme', 'CommonEnchereOffreReference', RelationMap::ONE_TO_MANY, array('id' => 'idEnchereOffre', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE', 'CommonEnchereOffreReferencesRelatedByIdenchereoffreOrganisme');
        $this->addRelation('CommonEnchereOffreReferenceRelatedByIdenchereoffre', 'CommonEnchereOffreReference', RelationMap::ONE_TO_MANY, array('id' => 'idEnchereOffre', ), 'CASCADE', 'CASCADE', 'CommonEnchereOffreReferencesRelatedByIdenchereoffre');
    } // buildRelations()

} // CommonEnchereOffreTableMap
