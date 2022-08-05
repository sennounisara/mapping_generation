<?php



/**
 * This class defines the structure of the 'EnchereTrancheBaremeReference' table.
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
class CommonEnchereTrancheBaremeReferenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonEnchereTrancheBaremeReferenceTableMap';

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
        $this->setName('EnchereTrancheBaremeReference');
        $this->setPhpName('CommonEnchereTrancheBaremeReference');
        $this->setClassname('CommonEnchereTrancheBaremeReference');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'EnchereReference', 'organisme', true, 30, '');
        $this->addForeignKey('idReference', 'Idreference', 'INTEGER', 'EnchereReference', 'id', true, 10, 0);
        $this->addForeignKey('idReference', 'Idreference', 'INTEGER', 'EnchereReference', 'id', true, 10, 0);
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
        $this->addRelation('CommonEnchereReferenceRelatedByIdreference', 'CommonEnchereReference', RelationMap::MANY_TO_ONE, array('idReference' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonEnchereReferenceRelatedByIdreferenceOrganisme', 'CommonEnchereReference', RelationMap::MANY_TO_ONE, array('idReference' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonEnchereTrancheBaremeReferenceTableMap
