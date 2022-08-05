<?php



/**
 * This class defines the structure of the 'EnchereValeursInitiales' table.
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
class CommonEnchereValeursInitialesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereValeursInitialesTableMap';

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
        $this->setName('EnchereValeursInitiales');
        $this->setPhpName('CommonEnchereValeursInitiales');
        $this->setClassname('CommonEnchereValeursInitiales');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EnchereEntreprisePmi', 'organisme', true, 30, '');
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EnchereReference', 'organisme', true, 30, '');
        $this->addForeignKey('idEnchereEntreprise', 'Idenchereentreprise', 'INTEGER', 'EnchereEntreprisePmi', 'id', true, 10, 0);
        $this->addForeignKey('idEnchereReference', 'Idencherereference', 'INTEGER', 'EnchereReference', 'id', true, 10, 0);
        $this->addColumn('valeur', 'Valeur', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonEnchereEntreprisePmi', 'CommonEnchereEntreprisePmi', RelationMap::MANY_TO_ONE, array('idEnchereEntreprise' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEnchereReference', 'CommonEnchereReference', RelationMap::MANY_TO_ONE, array('idEnchereReference' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonEnchereValeursInitialesTableMap
