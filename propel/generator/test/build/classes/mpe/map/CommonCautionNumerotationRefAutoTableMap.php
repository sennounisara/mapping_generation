<?php



/**
 * This class defines the structure of the 'caution_numerotation_ref_auto' table.
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
class CommonCautionNumerotationRefAutoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCautionNumerotationRefAutoTableMap';

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
        $this->setName('caution_numerotation_ref_auto');
        $this->setPhpName('CommonCautionNumerotationRefAuto');
        $this->setClassname('CommonCautionNumerotationRefAuto');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_banque', 'IdBanque', 'INTEGER', true, null, null);
        $this->addColumn('id_ref_ville', 'IdRefVille', 'INTEGER', false, null, null);
        $this->addColumn('annee', 'Annee', 'INTEGER', true, 4, 0);
        $this->addColumn('index_auto', 'IndexAuto', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCautionNumerotationRefAutoTableMap
