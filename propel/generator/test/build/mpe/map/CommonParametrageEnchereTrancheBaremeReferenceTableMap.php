<?php



/**
 * This class defines the structure of the 'Parametrage_Enchere_Tranche_Bareme_Reference' table.
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
class CommonParametrageEnchereTrancheBaremeReferenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonParametrageEnchereTrancheBaremeReferenceTableMap';

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
        $this->setName('Parametrage_Enchere_Tranche_Bareme_Reference');
        $this->setPhpName('CommonParametrageEnchereTrancheBaremeReference');
        $this->setClassname('CommonParametrageEnchereTrancheBaremeReference');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Parametrage_Enchere_Reference', 'organisme', true, 30, '');
        $this->addForeignKey('idReference', 'Idreference', 'INTEGER', 'Parametrage_Enchere_Reference', 'id', true, 10, 0);
        $this->addForeignKey('idReference', 'Idreference', 'INTEGER', 'Parametrage_Enchere_Reference', 'id', true, 10, 0);
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
        $this->addRelation('CommonParametrageEnchereReferenceRelatedByIdreference', 'CommonParametrageEnchereReference', RelationMap::MANY_TO_ONE, array('idReference' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonParametrageEnchereReferenceRelatedByIdreferenceOrganisme', 'CommonParametrageEnchereReference', RelationMap::MANY_TO_ONE, array('idReference' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonParametrageEnchereTrancheBaremeReferenceTableMap
