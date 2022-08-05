<?php



/**
 * This class defines the structure of the 'Parametrage_Enchere_Tranches_Bareme_NETC' table.
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
class CommonParametrageEnchereTranchesBaremeNETCTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonParametrageEnchereTranchesBaremeNETCTableMap';

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
        $this->setName('Parametrage_Enchere_Tranches_Bareme_NETC');
        $this->setPhpName('CommonParametrageEnchereTranchesBaremeNETC');
        $this->setClassname('CommonParametrageEnchereTranchesBaremeNETC');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Parametrage_Enchere', 'organisme', true, 30, '');
        $this->addForeignKey('idEnchere', 'Idenchere', 'INTEGER', 'Parametrage_Enchere', 'id', true, 10, 0);
        $this->addForeignKey('idEnchere', 'Idenchere', 'INTEGER', 'Parametrage_Enchere', 'id', true, 10, 0);
        $this->addColumn('borneInf', 'Borneinf', 'DOUBLE', false, null, null);
        $this->addColumn('borneSup', 'Bornesup', 'DOUBLE', false, null, null);
        $this->addColumn('note', 'Note', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonParametrageEnchereRelatedByIdenchere', 'CommonParametrageEnchere', RelationMap::MANY_TO_ONE, array('idEnchere' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonParametrageEnchereRelatedByIdenchereOrganisme', 'CommonParametrageEnchere', RelationMap::MANY_TO_ONE, array('idEnchere' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonParametrageEnchereTranchesBaremeNETCTableMap
