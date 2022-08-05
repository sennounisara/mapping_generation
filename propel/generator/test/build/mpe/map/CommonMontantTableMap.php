<?php



/**
 * This class defines the structure of the 'Montant' table.
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
class CommonMontantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonMontantTableMap';

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
        $this->setName('Montant');
        $this->setPhpName('CommonMontant');
        $this->setClassname('CommonMontant');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_enveloppe', 'IdEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('format_enveloppe', 'FormatEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('devise', 'Devise', 'VARCHAR', true, 20, null);
        $this->addColumn('montant', 'Montant', 'DOUBLE', true, null, null);
        $this->addColumn('order', 'Order', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonMontantTableMap
