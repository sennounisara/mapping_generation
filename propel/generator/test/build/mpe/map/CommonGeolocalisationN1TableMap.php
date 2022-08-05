<?php



/**
 * This class defines the structure of the 'GeolocalisationN1' table.
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
class CommonGeolocalisationN1TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonGeolocalisationN1TableMap';

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
        $this->setName('GeolocalisationN1');
        $this->setPhpName('CommonGeolocalisationN1');
        $this->setClassname('CommonGeolocalisationN1');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_geolocalisationN0', 'IdGeolocalisationn0', 'INTEGER', true, null, 0);
        $this->addColumn('actif', 'Actif', 'CHAR', true, null, '1');
        $this->getColumn('actif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('denomination1', 'Denomination1', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2', 'Denomination2', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_ar', 'Denomination1Ar', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_ar', 'Denomination2Ar', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_fr', 'Denomination1Fr', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_fr', 'Denomination2Fr', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_en', 'Denomination1En', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_en', 'Denomination2En', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_es', 'Denomination1Es', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_es', 'Denomination2Es', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_su', 'Denomination1Su', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_su', 'Denomination2Su', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_du', 'Denomination1Du', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_du', 'Denomination2Du', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_cz', 'Denomination1Cz', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination2_cz', 'Denomination2Cz', 'VARCHAR', true, 100, null);
        $this->addColumn('denomination1_it', 'Denomination1It', 'VARCHAR', true, 100, '');
        $this->addColumn('denomination2_it', 'Denomination2It', 'VARCHAR', true, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonGeolocalisationN1TableMap
